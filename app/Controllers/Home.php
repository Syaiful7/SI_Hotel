<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $tipeKamarModel = model('TipeKamarModel', false);
        $tipeKamar = $tipeKamarModel->findAll();
// dd(user());
        $data = [
            'tipe_kamar'=> $tipeKamar,
            'user'  => user(),
        ];
        return view('welcome_message', $data);
    }
    public function reservation(): string
    {
        $tipeKamarModel = model('TipeKamarModel', false);
        $tipeKamar = $tipeKamarModel->findAll();

        $data = [
            'tipe_kamar'=> $tipeKamar,
            'user'  => user(),
        ];
        return view('welcome_message', $data);
    }
    public function coba(): string
    {
        return view('resepsionis/dashboard');
    }
}