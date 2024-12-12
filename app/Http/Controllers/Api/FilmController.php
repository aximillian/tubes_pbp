<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    public function index()
    {
        return Film::all();
    }

    public function store(Request $request)
    {
        $film = Film::create($request->all());
        return response()->json($film, 201);
    }

    public function update(Request $request, $id)
    {
        $film = Film::findOrFail($id);
        $film->update($request->all());
        return response()->json($film, 200);
    }

    public function destroy($id)
    {
        Film::destroy($id);
        return response()->json(null, 204);
    }
}