<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index()
    {
        return Studio::all();
    }

    public function store(Request $request)
    {
        $studio = Studio::create($request->all());
        return response()->json($studio, 201);
    }

    public function update(Request $request, $id)
    {
        $studio = Studio::findOrFail($id);
        $studio->update($request->all());
        return response()->json($studio, 200);
    }

    public function destroy($id)
    {
        Studio::destroy($id);
        return response()->json(null, 204);
    }
}