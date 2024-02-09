<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentificationController extends Controller
{
    public function index(){
        return view('connexion');
    }

    public function indice(){
        return view('inscription');
    }
}

