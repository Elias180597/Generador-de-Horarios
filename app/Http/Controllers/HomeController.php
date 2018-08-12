<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idCarrera = \Auth::user()->carrera;
        $carrera = DB::table('users as u')
        ->join('carreras as c','u.carrera','=','c.id')
        ->pluck('c.carrera');
        

        return view('home',compact('carrera'));
    }
}
