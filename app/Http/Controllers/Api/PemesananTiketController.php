<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PemesananTiket;
use Illuminate\Http\Request;

class PemesananTiketController extends Controller
{
    public function index()
    {
        return PemesananTiket::all();
    }

    public function store(Request $request)
    {
        $pemesananTiket = PemesananTiket::create($request->all());
        return response()->json($pemesananTiket, 201);
    }

    public function update(Request $request, $id)
    {
        $pemesananTiket = PemesananTiket::findOrFail($id);
        $pemesananTiket->update($request->all());
        return response()->json($pemesananTiket, 200);
    }

    public function destroy($id)
    {
        PemesananTiket::destroy($id);
        return response()->json(null, 204);
    }

    public function history($id)
    {
        return PemesananTiket::where('id_customer', $id)
            ->where('status', 'success')
            ->get();
    }
}