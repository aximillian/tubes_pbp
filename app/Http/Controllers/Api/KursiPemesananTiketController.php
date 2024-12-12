<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KursiPemesananTiket;
use Illuminate\Http\Request;

class KursiPemesananTiketController extends Controller
{
    public function index()
    {
        return KursiPemesananTiket::all();
    }

    public function store(Request $request)
    {
        $kursiPemesananTiket = KursiPemesananTiket::create($request->all());
        return response()->json($kursiPemesananTiket, 201);
    }

    public function update(Request $request, $id)
    {
        $kursiPemesananTiket = KursiPemesananTiket::findOrFail($id);
        $kursiPemesananTiket->update($request->all());
        return response()->json($kursiPemesananTiket, 200);
    }

    public function destroy($id)
    {
        KursiPemesananTiket::destroy($id);
        return response()->json(null, 204);
    }
}