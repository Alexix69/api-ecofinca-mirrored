<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeliveryCollection;
use App\Models\Delivery;
use App\Http\Resources\Delivery as DeliveryResource;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index()
    {
        return response()->json(new DeliveryCollection(Delivery::all()), 200) ;
    }

    public function show(Delivery $delivery)
    {
        return response()->json(new DeliveryResource($delivery), 200);
    }

    public function store(Request $request)
    {
        $delivery = Delivery::create($request->all());
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
