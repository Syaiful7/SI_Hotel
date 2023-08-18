<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Resepsionis extends BaseController
{
    public function index()
    {
        $tipeKamarModel = model('TipeKamarModel', false);
        $kamarModel = model('KamarModel', false);

        $data = [
            'tipe_kamar_model'=> $tipeKamarModel,
            'kamar_model'=> $kamarModel,
        ];
        // dd($kamar);
        return view('resepsionis/dashboard', $data);
    }
}