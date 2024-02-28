<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        return view('index'); // Update with the actual path to your Blade view.
    }

    public function index1()
    {
        return view('index1'); // Update with the actual path to your Blade view.
    }

    public function areaClinica()
    {
        return view('area-clinica');
    }

    public function contactos()
    {
        return view('contactos');
    }

    public function galeria()
    {
        return view('galeria');
    }

    public function guiaSaude()
    {
        return view('guia-saude');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function termosCondicoes()
    {
        return view('termos-e-condicoes');
    }
    public function Error()
    {
        return view('partials.error');
    }
}
