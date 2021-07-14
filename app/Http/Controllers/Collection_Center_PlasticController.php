<?php

namespace App\Http\Controllers;

use App\Models\Collection_Center_Plastic;
use Illuminate\Http\Request;

class Collection_Center_PlasticController extends Controller
{
    public function index(){
        return Collection_Center_Plastic::all();
    }

    public function show(Collection_Center_Plastic $collection_center_plastic){
        return $collection_center_plastic;
    }

    public function store(Request $request){
        $collection_center_plastic = Collection_Center_Plastic::create($request->all());
        return response()->json($collection_center_plastic, 201);
    }

    public function update(Request $request, Collection_Center_Plastic $collection_center_plastic){
        $collection_center_plastic -> update($request->all());
        return response()->json($collection_center_plastic, 200);
    }

    public function delete(Request $request, Collection_Center_Plastic $collection_center_plastic){
        $collection_center_plastic -> delete();
        return response()->json(null, 204);
    }
}
