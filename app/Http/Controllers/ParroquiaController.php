<?php

namespace App\Http\Controllers;

use App\Models\Parroquia;
use Illuminate\Http\Request;

class ParroquiaController extends Controller
{
    public function index()
    {
        return Parroquia::all();
    }
    public function show(Parroquia $parroquia)
    {
        return $parroquia;
    }
    public function store(Request $request)
    {
        $parroquia = Parroquia::create($request->all());
        return response()->json($parroquia, 201);
    }
    public function update(Request $request, Parroquia $parroquia)
    {
        $parroquia->update($request->all());
        return response()->json($parroquia, 200);
    }
    public function delete(Parroquia $parroquia)
    {
        $parroquia->delete();
        return response()->json(null, 204);
    }
}

