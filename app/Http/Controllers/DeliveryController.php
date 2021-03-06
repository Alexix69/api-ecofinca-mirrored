<?php

namespace App\Http\Controllers;


use App\Mail\NewDelivery;
use App\Http\Resources\DeliveryCollection;
use App\Models\Delivery;
use App\Http\Resources\Delivery as DeliveryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DeliveryController extends Controller
{
    private static $messages = [
        'description.max' => 'La descripción es muy extensa',
        'quantity.integer' => 'La cantidad debe especificarse en enteros',
        'picture.url' => 'La imagen no se encuentra en Storage',
    ];

    public function index()
    {
        return response()->json(new DeliveryCollection(Delivery::all()), 200);
    }

    public function show(Delivery $delivery)
    {
        return response()->json(new DeliveryResource($delivery), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|max:500',
            'quantity' => 'required|integer',
            'picture' => 'required|url',
            'latitude' => 'required',
            'longitude' => 'required'
        ], self::$messages);

        $delivery = Delivery::create($request->all());
        Mail::to($delivery->user)->send(new NewDelivery($delivery));
        return response()->json($delivery, 201);
    }

    public function update(Request $request, Delivery $delivery)
    {
        $request->validate([
            'description' => 'required|max:500',
            'quantity' => 'required|integer',
            'picture' => 'required|url',
            'latitude' => 'required',
            'longitude' => 'required'
        ], self::$messages);

        $delivery->update($request->all());
        return response()->json($delivery, 200);
    }

    public function delete(Delivery $delivery)
    {
        $delivery->delete();
        return response()->json(null, 204);
    }
}


