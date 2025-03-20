<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Komponent;
use App\Models\Nazevparametr;
use App\Models\Parametr;
use App\Models\TypKomponent;
use App\Models\TypPocitace;
use App\Models\Vyber;
use App\Models\Vyrobce;

class Main extends BaseController
{
    var $Komponent;
    var $Nazevparametr;
    var $Parametr;
    var $TypKomponent;
    var $TypPocitace;
    var $TyppocitaceHasKomponent;
    var $Vyber;
    var $Vyrobce;

    public function index() {
        //
    }

    public function komponenty() {
        $model = new TypKomponent;
        $data['komponenty'] = $model->findAll();

        return view('komponenty', $data);
    }


    public function komponent($idKomponent) {
        $TypKomponent = new TypKomponent;
        $Komponent = new Komponent;
        $data["komponent"] = $Komponent->asObject()->where('typKomponent_id', $idKomponent)->findAll();
        $data["typ"]= $TypKomponent->asObject()->find($idKomponent);
 
        return view('komponent', $data);
    }
    public function informace($idKomponent) {
        $TypKomponent = new TypKomponent;
        $Komponent = new Komponent;
        $data['komponent'] = $Komponent->asObject()->where("typKomponent_id", $idKomponent)->find();
        $data['informace'] = $TypKomponent->asObject()->find($idKomponent);

        return view('informace', $data);

    }
}
