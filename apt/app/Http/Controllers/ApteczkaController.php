<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apteczka\repositories\FrontendRepository;
use App\Lek;

class ApteczkaController extends Controller
{
    //tworze instance repozytorium
    public function __construct(FrontendRepository $repository) {
        $this->fR = $repository;
    }
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

    public function listalekow($id){
      // $apteczki=ListaLekow::paginate(50);
      $lek = $this->fR->pokazLekiwApteczce($id);
      dd($lek);
        return view('apteczka.listalekow');
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
