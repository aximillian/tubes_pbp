<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JadwalTayang;
use Illuminate\Http\Request;

class JadwalTayangController extends Controller
{
    public function index()
    {
        return JadwalTayang::all();
    }

    public function store(Request $request)
    {
        $jadwalTayang = JadwalTayang::create($request->all());
        return response()->json($jadwalTayang, 201);
    }

    public function update(Request $request, $id)
    {
        $jadwalTayang = JadwalTayang::findOrFail($id);
        $jadwalTayang->update($request->all());
        return response()->json($jadwalTayang, 200);
    }

    public function destroy($id)
    {
        JadwalTayang::destroy($id);
        return response()->json(null, 204);
    }
}