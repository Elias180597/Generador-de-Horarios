<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = "materias";
    protected $fillable = ['nombre','id_carrera','created_at','updated_at'];
    protected $primaryKey = "id";
}
