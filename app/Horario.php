<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = "horario";
   protected $fillable=['descripcion','dias','inicio','final','dividir'];
   protected $primaryKey="idHorario";
}
