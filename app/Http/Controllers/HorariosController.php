<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//use Barryvdh\DomPDF\Facade as PDF;
use Vsmoraes\Pdf\PdfFacade as PDF;

class HorariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $idCarrera = \Auth::user()->carrera; 
        $idCuatri = \Auth::user()->cuatrimestre; 

        $materias = DB::table('materias')
    ->where('id_carrera','=',$idCarrera)
    ->where('cuatrimestre','=',$idCuatri)
    ->get();
    
        return view('horario.index',compact('materias'));
    }

    public function imprimir($id){
      $idP = $id;
      //$pdf = \App::make('dompdf.wrapper');
     // $pdf =PDF::loadView('horario.lista');
      //$pdf->loadHTML('<h1>Test</h1>');
      //return $pdf->stream();
      //return $pdf->download('pdfview.pdf'); 
      return view('horario.imprimir',compact('idP'));
    }

    public function store(Request $request){

     /*  \App\Horario::insert([
            'descripcion'=>$request['descripcion'],
            'dias'=>$request['dias'],
            'inicio'=>$request['inicio'],
            'final'=>$request['final'],
            'dividir'=>$request['dividir']
        ]);*/

        //return view('horario.index');
        return redirect()->route('/horario/index');
    }

    public function verHorarios(){
        $horarios = DB::table('horarios')->get();
        $idCarrera = \Auth::user()->carrera; 
        $idCuatri = \Auth::user()->cuatrimestre; 

        $materias = DB::table('materias')
    ->where('id_carrera','=',$idCarrera)
    ->where('cuatrimestre','=',$idCuatri)
    ->get();
    

        return view('horario.lista',compact('horarios','materias'));
    }

    public function getCurrentMaterias(){
        $idCarrera = \Auth::user()->carrera; 
        $idCuatri = \Auth::user()->cuatrimestre; 

        $materias = DB::table('materias')
    ->where('id_carrera','=',$idCarrera)
    ->where('cuatrimestre','=',$idCuatri)
    ->get();
    return $materias;
    }



   

}
