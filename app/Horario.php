<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = "horarios";
   protected $fillable=['nombre','descripcion','horario','fecha'];
   protected $primaryKey="id";
}
