<?php

namespace App\Controllers;

class About extends BaseController
{
    public function bonjovi()
    {
        $data = [
            'title' => 'Bon Jovi',
        ];
        return view('about/bonjovi', $data);
    }

    public function freddiem()
    {
        $data = [
            'title' => 'Freddie Mercury',
        ];
        return view('about/freddiem', $data);
    }

    public function michaelj()
    {
        $data = [
            'title' => 'Michael Jackson',
        ];
        return view('about/michaelj', $data);
    }

    public function oprah()
    {
        $data = [
            'title' => 'Oprah',
        ];
        return view('about/oprah', $data);
    }

    public function whitneyh()
    {
        $data = [
            'title' => 'Whitney Houston',
        ];
        return view('about/whitneyh', $data);
    }
}
