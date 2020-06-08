<?php

namespace App\Http\Controllers;

use App\ListaLekow;
use Illuminate\Http\Request;

class Apteczka extends Controller
{
    public function index(){
        return view('apteczka.index');
    }

    public function wybierzapteczke(){
        return view('apteczka.wybierzapteczke');
    }

    public function stworzapteczke(){
        return view('apteczka.stworzapteczke');
    }

    public function panelutylizacji(){
        return view('apteczka.panelutylizacji');
    }

    public function listalekow(){
        $apteczki=ListaLekow::paginate(50);
        return view('apteczka.listalekow', compact('apteczki'));
    }

    public function twojaapteczka(){
        return view('apteczka.twojaapteczka');
    }

    public function utylizujlek(){
        return view('apteczka.utylizujlek');
    }

    public function zazyjlek(){
        return view('apteczka.zazyjlek');
    }

    public function dodajlek(){
        return view('apteczka.dodajlek');
    }

}
