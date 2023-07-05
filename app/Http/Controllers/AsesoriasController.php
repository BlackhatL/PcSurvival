<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesoriasController extends Controller
{
    public function index(){
        return view('Servicios.Asesorias.index');
    }
}
