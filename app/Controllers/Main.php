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
use Config\MyConfig;

class Main extends BaseController
{

    var $Komponent;
    var $Nazevparametr;
    var $Parametr;
    var $TypKomponent;
    var $TypPocitace;
    var $Vyber;
    var $Vyrobce;

    public function index() {
        //
    }

    public function hlavnistranka() {
        $model = new TypKomponent;
        $data['komponenty'] = $model->findAll();

        return view('hlavnistranka', $data);
    }


    public function komponent($url) {
        $typModel = new TypKomponent;
        $komponentModel = new Komponent;

        $typ = $typModel->where("url", $url)->first();

        $config = new MyConfig();
        $perPage = $config->perPage;
        
        $data['komponent'] = $komponentModel
            ->where('typKomponent_id', $typ->idKomponent)
            ->paginate($perPage);

        $data["typ"] = $typ;
        $data["pager"] = $komponentModel->pager;
        $data["perPage"] = $perPage;
 
        return view('komponent', $data);
    }

    public function informace($id) {
        $Komponent = new Komponent();
        $parametrModel = new Parametr();

        $data['komponent'] = $Komponent
            ->join('mt_vyrobce', 'mt_komponent.vyrobce_id = mt_vyrobce.idVyrobce')
            ->join('mt_typkomponent', 'mt_komponent.typKomponent_id = mt_typkomponent.idKomponent')
            ->where('mt_komponent.id', $id)
            ->first();
        $data['parametry'] = $parametrModel
            ->select('mt_parametr.hodnota, mt_nazevparametr.nazev')
            ->join('mt_nazevparametr', 'mt_parametr.nazevParametr_id = mt_nazevparametr.id')
            ->where('mt_parametr.komponent_id', $id)
            ->findAll();
    return view('informace', $data);
    }
}
