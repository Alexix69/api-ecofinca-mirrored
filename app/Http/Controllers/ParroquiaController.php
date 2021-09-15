<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParroquiaCollection;
use App\Models\Parroquia;
use Illuminate\Http\Request;
use App\Http\Resources\Parroquia as ParroquiaResource;

class ParroquiaController extends Controller
{
    public function index()
    {
        return response()->json(new ParroquiaCollection(Parroquia::all()), 200) ;
    }
    public function show(Parroquia $parroquia)
    {
        return response()->json(new ParroquiaResource($parroquia), 200) ;
    }
//    public function store(Request $request)
//    {
//        $parroquia = Parroquia::create($request->all());
//        return response()->json($parroquia, 201);
//    }
//
//    public function update(Request $request, Parroquia $parroquia)
//    {
//        $parroquia->update($request->all());
//        return response()->json($parroquia, 200);
//    }
//
//    public function delete(Parroquia $parroquia)
//    {
//        $parroquia->delete();
//        return response()->json(null, 204);
//    }
}

