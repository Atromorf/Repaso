<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorBiblioteca;

class ControladorVista extends Controller
{
    public function procesarLibro(validadorBiblioteca $req)
    {
        return redirect()->route('Registro')->with('confirmacion', 'Libro guardado');
        //return $req->all();
        //return $req->path();
        //return $req->url();
        //return $req->ip();
    }

    public function showMenu()
    {
        return view('menu');
    }

    public function showRegistro()
    {
        return view('registro');
    }

}