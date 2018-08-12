<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = "carreras";
    protected $fillable = ['carrera','created_at','updated_at'];
    protected $primaryKey = "id";
}
