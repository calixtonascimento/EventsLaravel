<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
    public function index() {
        $nome = "Calixto Nascimento";
        $idade = 25;
    
        $arr = [10,25,39,42,54];
    
        return view('welcome', 
        [
            'nome' => $nome,
            'idade2' => $idade,
            'profissao' => "Programador",
            'arr' => $arr
        ]); 
    }

    public function create() {
        return view('events.create');
    }

    
}
