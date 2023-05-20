<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        $model = new \App\Models\SingerModel;
        $singers = $model->findAll();
        $data = [
            'title' => 'Singers',
            'singers' => $singers,
        ];
        return view('main/index', $data);
    }
}