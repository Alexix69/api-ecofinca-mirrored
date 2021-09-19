<?php

namespace App\Http\Controllers;

use App\Http\Resources\CantonCollection;
use App\Http\Resources\Parroquia;
use App\Http\Resources\ParroquiaCollection;
use App\Models\Canton;
use Illuminate\Http\Request;
use App\Http\Resources\Canton as CantonResource;

class CantonController extends Controller
{
    public function index()
    {
        return response()->json(new CantonCollection(Canton::all()), 200);
    }
    public function show(Canton $canton)
    {
        return response()->json(new CantonResource($canton), 200) ;
    }

    //PARROQUIAS POR CANTON => FUNCIONA
    public function parroquias(Canton $canton){
        return response()->json(new ParroquiaCollection($canton->parroquias), 200);
    }
//    public function store(Request $request)
//    {
//        $canton = Canton::create($request->all());
//        return response()->json($canton, 201);
//    }
//    public function update(Request $request, Canton $canton)
//    {
//        $canton->update($request->all());
//        return response()->json($canton, 200);
//    }
//    public function delete(Canton $canton)
//    {
//        $canton->delete();
//        return response()->json(null, 204);
//    }
}

