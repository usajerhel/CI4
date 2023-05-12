<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        $yea = ['me','myself'];

        $data=[
            'oye' => $yea
        ];
        return view('main/index', $data);
    }
}
