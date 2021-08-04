<?php

namespace App\Http\Controllers;


use App\Mail\NewDelivery;
use App\Http\Resources\DeliveryCollection;
use App\Models\Delivery;
use App\Http\Resources\Delivery as DeliveryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;


class DeliveryController extends Controller
{
    private static $messages = [
        'description.max' => 'La descripción es muy extensa',
        'quantity.integer' => 'La cantidad debe especificarse en enteros',
        'picture.url' => 'La imagen no se encuentra en Storage',
    ];

    public function index()
    {
        $this->authorize('viewAny', Delivery::class);
        return response()->json(new DeliveryCollection(Delivery::all()), 200);
    }

    public function show(Delivery $delivery)
    {
        $this->authorize('view', $delivery);
        return response()->json(new DeliveryResource($delivery), 200);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Delivery::class);
        $request->validate([
            'description' => 'required|max:500',
            'quantity' => 'required|integer',
            'picture' => 'required|image',
            'latitude' => 'required',
            'longitude' => 'required'
        ], self::$messages);

        $delivery = Delivery::create($request->all());
        $path = $request->picture->storeAs('public/deliveries', $request->user()->id.'_'.$delivery->id.'.'.$request->picture->extension()); // storeAs('',$request->user()->id.'_'.$delivery->id.'.'.$request->picture->extension());
        $delivery->picture=$path;
        $delivery->save();
        Mail::to($delivery->user)->send(new NewDelivery($delivery));
        return response()->json($delivery, 201);
    }

    public function update(Request $request, Delivery $delivery)
    {
        $this->authorize('update', $delivery);

        $request->validate([
            'description' => 'required|max:500',
            'quantity' => 'required|integer',
            'picture' => 'required|url',
            'latitude' => 'required',
            'longitude' => 'required'
        ], self::$messages);

        $delivery->update($request->all());
        $delivery = Delivery::create($request->all());
        $path = $request->picture->store('public/deliveries'); // storeAs('',$request->user()->id.'_'.$delivery->id.'.'.$request->picture->extension());
        $delivery->picture=$path;
        $delivery->save();
        return response()->json($delivery, 200);
    }

    public function delete(Delivery $delivery)
    {
        $delivery->delete();
        return response()->json(null, 204);
    }

    public function image(Delivery $delivery)
    {
        return response()->download(public_path(Storage::url($delivery->picture)), $delivery->id.'.jpg');
    }


}
