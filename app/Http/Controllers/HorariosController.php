<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HorariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('horario.index');
    }

    public function store(Request $request){

       \App\Horario::insert([
            'descripcion'=>$request['descripcion'],
            'dias'=>$request['dias'],
            'inicio'=>$request['inicio'],
            'final'=>$request['final'],
            'dividir'=>$request['dividir']
        ]);

        //return view('horario.index');
        return redirect()->route('/horario/index');
    }

    public function verHorarios(){
        $horarios = DB::table('horario')->get();
        return view('horario.lista',compact('horarios'));
    }

}
