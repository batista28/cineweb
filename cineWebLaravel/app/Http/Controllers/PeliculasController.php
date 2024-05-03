<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;

class PeliculasController extends Controller
{
    // Función para mostrar una lista de películas
    public function index()
    {
        $peliculas = Peliculas::all();
        return response()->json($peliculas);
    }

    // Función para mostrar el detalle de una película específica
    public function show($id)
    {
        $pelicula = Peliculas::findOrFail($id);
        return response()->json($pelicula);
    }

    // Función para crear una nueva película
    public function store(Request $request)
    {
        $pelicula = new Peliculas();
        $pelicula->fill($request->all());
        $pelicula->save();
        return response()->json($pelicula, 201);
    }

    // Función para actualizar una película existente
    public function update(Request $request, $id)
    {
        $pelicula = Peliculas::findOrFail($id);
        $pelicula->fill($request->all());
        $pelicula->save();
        return response()->json($pelicula);
    }

    // Función para eliminar una película
    public function destroy($id)
    {
        $pelicula = Peliculas::findOrFail($id);

        // Verificar si el usuario tiene permisos para eliminar la película
        if (Auth::user()->can('delete', $pelicula)) {
            $pelicula->delete();
            return response()->json(null, 204);
        } else {
            // El usuario no tiene permisos para eliminar la película
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
