<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;

use Illuminate\Http\Request;

class ApiPeliController extends Controller
{
    public function listarPeliculas(Request $request)
    {
        $ordenarPor = $request->query('ordenarPor', 'nombre');
        $orden = $request->query('orden', 'asc');
    
        $camposValidos = ['nombre', 'año', 'estudio'];
        if (!in_array($ordenarPor, $camposValidos)) {
            return response()->json(['error' => 'Campo de ordenación no válido'], 400);
        }
    
        $peliculas = Pelicula::with('categoria')->orderBy($ordenarPor, $orden)->get();
        return response()->json($peliculas);
    }
    
    public function obtenerPelicula($id)
    {
        $pelicula = Pelicula::with('categoria')->where('id', $id)->first();
    
        if (is_null($pelicula)) {
            return response()->json(['error' => 'Película no encontrada'], 404);
        }
    
        return response()->json($pelicula);
    }
    
    public function crearPelicula(Request $request)
    {
        $datosValidados = $request->validate([
            'nombre' => 'required|string|max:255',
            'año' => 'required|integer',
            'estudio' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
        ]);
    
        $pelicula = new Pelicula();
        $pelicula->fill($datosValidados);
        $pelicula->save();
    
        return response()->json(['mensaje' => 'Película creada', 'pelicula' => $pelicula], 201);
    }
    
}