<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        $companies = [
            ['nama' => 'Tesla',     'deskripsi' => 'Mobil listrik dan penyimpanan energi', 'gambar' => 'images/tesla.jpg'],
            ['nama' => 'SpaceX',    'deskripsi' => 'Roket dan satelit',                    'gambar' => 'images/spacex.jpg'],
            ['nama' => 'Neuralink', 'deskripsi' => 'Chip otak untuk membantu penderita gangguan saraf', 'gambar' => 'images/neuralink.jpg'],
            ['nama' => 'xAI',       'deskripsi' => 'Pengembangan AI (Grok)',               'gambar' => 'images/xai.jpg'],
        ];

        return view('home', ['companies' => $companies]);
    }
}