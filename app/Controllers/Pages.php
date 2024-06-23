<?php

namespace App\Controllers;

class Pages extends BaseController

{
    public function index()
    {
        $data = [
            'title' => 'Home | ThreedyArtist',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. rejoso no.50',
                    'kota' => 'Jombang'
                ],

                [
                    'tipe' => 'kantor',
                    'alamat' => 'Universitas Pondok Tinggi DU',
                    'kota' => 'Ponpes DU'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
