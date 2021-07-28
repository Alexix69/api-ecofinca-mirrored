<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use Illuminate\Http\Request;

class CantonController extends Controller
{
    public function index()
    {
        return Canton::all();
    }
    public function show(Canton $canton)
    {
        return $canton;
    }
    public function store(Request $request)
    {
        $canton = Canton::create($request->all());
        return response()->json($canton, 201);
    }
    public function update(Request $request, Canton $canton)
    {
        $canton->update($request->all());
        return response()->json($canton, 200);
    }
    public function delete(Canton $canton)
    {
        $canton->delete();
        return response()->json(null, 204);
    }
}

