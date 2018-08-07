@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Datos del Alumno.</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                Nombre del Alumno:
                                <b>{{ Auth::user()->name }}</b>
                            </div>
                            <div class="col-md-6">
                                Ingenieria Cursando:
                                <b>{{ Auth::user()->carrera }}</b>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                Matricula:
                                <b>{{ Auth::user()->matricula }}</b>
                            </div>
                            <div class="col-md-6">
                                Correo Estudiantil:
                                <b>{{ Auth::user()->email }}</b>
                            </div>

                        </div>
                    </div>
                    <div>
                        <center>
                            <a href="{{ url('/horario/index') }}">
                               <button class="btn btn-info backk" style="width: auto;">
                                <img src="img/registro.png" width="20%"><br>
                                Cargar Horario.
                            </button>
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
