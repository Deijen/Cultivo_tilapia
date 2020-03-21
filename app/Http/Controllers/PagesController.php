<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){  //retornar al home
        return view('welcome');
    }

    public function hola1(){
        return view('hola');
    }
}
