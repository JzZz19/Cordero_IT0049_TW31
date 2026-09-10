<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        $data = [
            'title' => 'Home',
        ];

        return view('templates/header', $data)
            . view('pages/home')
            . view('templates/footer');
    }

    public function about(): string
    {
        $data = [
            'title' => 'About',
        ];

        return view('templates/header', $data)
            . view('pages/about')
            . view('templates/footer');
    }
}

