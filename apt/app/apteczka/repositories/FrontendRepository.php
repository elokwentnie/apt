<?php 
namespace App\apteczka\repositories;
use App\Apteczka;
use App\Lek;


class FrontendRepository {
    public function pokazApteczki() {
        return Apteczka::all();
    }

    public function pokazLekiwApteczce($id) { 
        return Lek::find($id);
    }

}