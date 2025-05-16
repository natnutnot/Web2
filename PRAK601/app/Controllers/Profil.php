<?php

namespace App\Controllers;

use App\Models\PraktikanModel;

class Profil extends BaseController
{
    public function index()
    {
        $model = new PraktikanModel();
        $data = $model->getData();

        return view('template/header')
            . view('profil', $data)
            . view('template/footer');
    }
}
