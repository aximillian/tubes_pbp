<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Foodbev;
use Illuminate\Http\Request;

class FoodbevController extends Controller
{
    public function index()
    {
        return Foodbev::all();
    }

    public function store(Request $request)
    {
        $foodbev = Foodbev::create($request->all());
        return response()->json($foodbev, 201);
    }

    public function update(Request $request, $id)
    {
        $foodbev = Foodbev::findOrFail($id);
        $foodbev->update($request->all());
        return response()->json($foodbev, 200);
    }

    public function destroy($id)
    {
        Foodbev::destroy($id);
        return response()->json(null, 204);
    }
}