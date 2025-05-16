<?php

namespace App\Controllers;

use App\Models\PraktikanModel;

class Beranda extends BaseController
{
    public function index()
    {
        $model = new PraktikanModel();
        $data = $model->getData();

        return view('template/header')
            . view('beranda', [
                'nama' => $data['nama'],
                'nim'  => $data['nim']
            ])
            . view('template/footer');
    }
}
