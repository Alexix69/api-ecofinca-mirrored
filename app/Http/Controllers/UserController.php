<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Mail\NewUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Resources\User as UserResource;
use App\Models\FarmOwner;
use App\Models\RecyclerOwner;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {
        $usertype = $request->usertype;

        if ($usertype == 'FarmOwner') {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'farm_name' => 'required|string',
                'farm_description' => 'required|string'
            ]);

            $farm_owner = FarmOwner::create([
                'farm_name' => $request->get('farm_name'),
                'farm_description' => $request->get('farm_description'),
            ]);
        }

        if ($usertype == 'RecyclerOwner') {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'collection_center_name' => 'required|string',
                'collection_center_information' => 'required|string'
            ]);
            $recycler_owner = RecyclerOwner::create([
                'collection_center_name' => $request->get('collection_center_name'),
                'collection_center_information' => $request->get('collection_center_information'),
            ]);
        }

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $faker = \Faker\Factory::create();

        if ($usertype == 'FarmOwner') {
            $farm_owner->user()->create([
                'name' => $request->get('name'),
                'lastname' => $request->get('lastname'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
                'cellphone' => $request->get('cellphone'),
                'address' => $request->get('address'),
                'image' => $request->get('image'),
                'parroquia_id' => $faker->numberBetween(1, 100)
            ]);

            $user = $farm_owner->user;

            $token = JWTAuth::fromUser($user);
            Mail::to($user)->send(new NewUser($user));
            return response()->json(new UserResource($user, $token), 201);
        }

        if ($usertype == 'RecyclerOwner') {
            $recycler_owner->user()->create([
                'name' => $request->get('name'),
                'lastname' => $request->get('lastname'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
                'cellphone' => $request->get('cellphone'),
                'address' => $request->get('address'),
                'image' => $request->get('image'),
                'parroquia_id' => $faker->numberBetween(1, 100)
            ]);

            $user = $recycler_owner->user;

            $token = JWTAuth::fromUser($user);
            Mail::to($user)->send(new NewUser($user));
            return response()->json(new UserResource($user, $token), 201);
        }

//        $token = JWTAuth::fromUser($user);

//        return response()->json(compact('user', 'token'), 201);
    }

    public function getAuthenticatedUser()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }

        // return cambiado por recurso
        return response()->json(new UserResource($user), 200);
    }

    public function index()
    {
        return response()->json(new UserCollection(User::all()), 200);
    }

    public function show(User $user)
    {
        return response()->json(new UserResource($user), 200);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            //            'cellphone' => 'string|max:10',
            //            'address' => 'string',
            'image' => 'string|url'
        ]);

        $user->update($request->all());
        $path = $request->image->store('public/users'); // storeAs('',$request->user()->id.'_'.$delivery->id.'.'.$request->picture->extension());
        $user->image=$path;
        $user->save();
        return response()->json($user, 200);
    }

    public function image(User $user)
    {
        return response()->download(public_path(Storage::url($user->image)), $user->name);
    }
}
