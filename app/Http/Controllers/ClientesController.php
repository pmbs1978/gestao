<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\EstadoCivil;
use \App\Models\Genero;
use \App\Models\Pais;

class ClientesController extends Controller
{
    public function verefica_contribuinte()
    {
        return view('site.clientes.verefica-contribuinte');
    }

    public function adicionar()
    {
        if(isset($_POST['btn'])){
            $estado_civil = EstadoCivil::all();
            $genero = Genero::all();
            $nacionalidade = Pais::orderBy('nome')->get();
            if(isset($_POST['nif'])){
                $nif = $_POST['nif'];
                return view('site.clientes.adicionar', compact('nif', 'estado_civil', 'genero', 'nacionalidade'));
            }
            $nif = 900000000;
           return view('site.clientes.adicionar', compact('nif', 'estado_civil', 'genero', 'nacionalidade'));
        }
        return view('site.clientes.verefica-contribuinte');

    }
}
