<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index()
    {
        return Owner::all();
    }
    public function show(Owner $owner)
    {
        return $owner;
    }
    public function store(Request $request)
    {
        $owner = Owner::create($request->all());
        return response()->json($owner, 201);
    }
    public function update(Request $request, Owner $owner)
    {
        $owner->update($request->all());
        return response()->json($owner, 200);
    }
    public function delete(Owner $owner)
    {
        $owner->delete();
        return response()->json(null, 204);
    }
}
