<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        return Tiket::all();
    }

    public function store(Request $request)
    {
        $tiket = Tiket::create($request->all());
        return response()->json($tiket, 201);
    }

    public function update(Request $request, $id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->update($request->all());
        return response()->json($tiket, 200);
    }

    public function destroy($id)
    {
        Tiket::destroy($id);
        return response()->json(null, 204);
    }
}