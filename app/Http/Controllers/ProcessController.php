<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function store(Request $request){
        return View::make('include.process');
    }
}
