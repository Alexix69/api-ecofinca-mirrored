<?php

namespace App\Http\Controllers;


use App\Mail\NewDelivery;
use App\Http\Resources\DeliveryCollection;
use App\Models\Delivery;
use App\Http\Resources\Delivery as DeliveryResource;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;
use Tymon\JWTAuth\Facades\JWTAuth;


class DeliveryController extends Controller
{
    private static $messages = [
        'description.max' => 'La descripción es muy extensa',
        'quantity.integer' => 'La cantidad debe especificarse en enteros',
        'picture.url' => 'La imagen no se encuentra en Storage',
    ];

    // FUNCIONA LAS VALIDACIONES
    public function index()
    {
        //muestra entregas de acuerdo al role y de acuerdo al id
        $this->authorize('viewAny', Delivery::class);
        $user = Auth::user();
        if ($user->role === 'ROLE_FARM') {
            return response()->json(new DeliveryCollection(Delivery::where('user_id', $user->id)->get()));
        } else {
            return response()->json(new DeliveryCollection(Delivery::where('for_user_id', $user->id)->get()));
        }
    }

    public function show(Delivery $delivery)
    {
        $this->authorize('view', $delivery);
        return response()->json(new DeliveryResource($delivery), 200);
    }

    //FUNCIONA CON IMAGENES Y ROL
    public function store(Request $request)
    {
        $this->authorize('create', Delivery::class);
        $request->validate([
            'description' => 'required|max:500',
            'quantity' => 'required|integer',
            'image' => 'required|image',
            'provincia' => 'required',
            'canton' => 'required',
            'parroquia' => 'required',
            'for_user_id' => 'required',
            //  'state' => 'required'
        ], self::$messages);

        $delivery = Delivery::create($request->all());
        $path = $request->image->storeAs('public/deliveries', $request->user()->id . '_' . $delivery->id . '.' . $request->image->extension()); // storeAs('',$request->user()->id.'_'.$delivery->id.'.'.$request->picture->extension());
        $delivery->image = $path;
        $delivery->save();
//        Mail::to($delivery->user)->send(new NewDelivery($delivery));
        return response()->json($delivery, 201);
    }

    //ESTE METODO => FUNCIONA
    public function updateByCollectionCenter(Request $request, Delivery $delivery)
    {
        $this->authorize('updateByCollectionCenter', $delivery);
        $request->validate([
//            'description' => 'required|max:500',
//            'quantity' => 'required|integer',
//            'image' => 'required|image',
//            'provincia' => 'required',
//            'canton' => 'required',
//            'parroquia' => 'required',
//            'for_user_id' => 'required',
            'state' => 'required'
        ]);

        //$delivery->update($request->all());
        //$delivery = Delivery::create($request->all());
        //$path = $request->image->store('public/deliveries'); // storeAs('',$request->user()->id.'_'.$delivery->id.'.'.$request->picture->extension());
        //$delivery->image = $path;

        //SE CAMBIA SOLO EL CAMPO REQUERIDO Y SE VUELVE A GUARDAR EL OBJETO
        $delivery->state = $request->state;
        $delivery->save();
        return response()->json($delivery, 200);
    }

    // PENDIENTE METODO QUE ACTUALIZA LA ENTREGA DESDE FINCA
    public function updateByFarm(Request $request, Delivery $delivery)
    {
        $this->authorize('updateByFarm', $delivery);
        $request->validate([
            'for_user_id' => 'required',
            'state' => 'required',
//           'image' => 'required|image'
        ]);

//        $path = $request->image->store('public/deliveries'); // storeAs('',$request->user()->id.'_'.$delivery->id.'.'.$request->picture->extension());
//        $delivery->image = $path;
        $delivery->state = $request->state;
        $delivery->for_user_id = $request->for_user_id;
        $delivery->save();
        return response()->json($delivery, 200);
    }

    //CREAR OTRO METODO PARA ACTUALIZAR OTRO CAMPO

//    public function delete(Delivery $delivery)
//    {
//        $delivery->delete();
//        return response()->json(null, 204);
//    }

    public function image(Delivery $delivery)
    {
        return response()->download(public_path(Storage::url($delivery->image)), $delivery->id . '.jpg');
    }

}


