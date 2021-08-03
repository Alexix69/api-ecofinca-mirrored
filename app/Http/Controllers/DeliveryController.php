<?php

namespace App\Http\Controllers;

use App\Mail\NewDelivery;
use App\Models\Delivery;
use App\Http\Resources\Delivery as DeliveryResource;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index()
    {
        return Delivery::all();
    }
    public function show(Delivery $delivery)
    {
        return response()->json(new DeliveryResource($delivery), 200) ;
    }
    public function store(Request $request)
    {
        $delivery = Delivery::create($request->all());
        Mail::to($delivery->user)->send(new NewDelivery($delivery));
        return response()->json($delivery, 201);
    }
    public function update(Request $request, Delivery $delivery)
    {
        $delivery->update($request->all());
        return response()->json($delivery, 200);
    }
    public function delete(Delivery $delivery)
    {
        $delivery->delete();
        return response()->json(null, 204);
    }
}
