<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TesteController extends Controller
{
    public function index($nome)
    {

        return view('teste.index', ['nome' => $nome]);
    }

    public function notas()
    {
        return view('teste.notas');
    }
}
