<?php

namespace App\Http\Controllers;
use App\Http\Resources\CantonCollection;
use App\Http\Resources\ProvinciaCollection;
use App\Models\Provincia;
use App\Http\Resources\Provincia as ProvinciaResource;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    public function index()
    {
        return response()->json(new ProvinciaCollection(Provincia::all()), 200) ;
    }
    public function show(Provincia $provincia)
    {
        return response()->json(new ProvinciaResource($provincia), 200) ;
    }

    //LLAMADA A LOS CANTONES DE UNA PROVINCIA, DEFINIR ENDPOINT EN API
    public function cantones(Provincia $provincia)
    {
        return response()->json(new CantonCollection($provincia->cantones), 200) ;
    }

//    public function store(Request $request)
//    {
//        $provincia = Provincia::create($request->all());
//        return response()->json($provincia, 201);
//    }
//    public function update(Request $request, Provincia $provincia)
//    {
//        $provincia->update($request->all());
//        return response()->json($provincia, 200);
//    }
//    public function delete(Provincia $provincia)
//    {
//        $provincia->delete();
//        return response()->json(null, 204);
//    }
}

