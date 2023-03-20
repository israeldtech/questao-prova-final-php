<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class provaController extends Controller
{
    public function welcome(){
        return view('/welcome');
    }

    public function rota1()
    {
        return view('prova.rota1');
    }

    public function rota2()
    {
        return view('prova.rota2');
    }
}
