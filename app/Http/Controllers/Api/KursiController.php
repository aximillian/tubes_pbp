<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kursi;
use Illuminate\Http\Request;

class KursiController extends Controller
{
    public function index()
    {
        return Kursi::all();
    }

    public function store(Request $request)
    {
        $kursi = Kursi::create($request->all());
        return response()->json($kursi, 201);
    }

    public function update(Request $request, $id)
    {
        $kursi = Kursi::findOrFail($id);
        $kursi->update($request->all());
        return response()->json($kursi, 200);
    }

    public function destroy($id)
    {
        Kursi::destroy($id);
        return response()->json(null, 204);
    }
}