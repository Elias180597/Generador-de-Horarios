<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getResource(Request $request){

        $process= $request['process'];
        $days = $request['days'];
        $nombre = $request['nombre'];
        $tiempo1 = $request['tiempo1'];
        $tiempo2 = $request['tiempo2'];
        $minutos = $request['minutos'];
        $descripcion = $request['descripcion'];
        $horario = $request['horario'];
        $dataid = $request['dataid'];
        $id = $request['id'];
        
        
        
        return view('include.process',compact('process','days','nombre','tiempo1','tiempo2','minutos','descripcion','horario','dataid','id'));
       // return View::make('include.process');
    }
}
