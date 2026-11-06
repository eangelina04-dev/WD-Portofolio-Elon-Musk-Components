<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function blog()
    {
        $posts = [
            [
                'judul' => 'Tesla: Mempopulerkan Mobil Listrik',
                'isi'   => 'Tesla mulai dikenal lewat Roadster pada 2008, lalu Model S, Model 3, Model X, dan Model Y. Tesla membuktikan bahwa mobil listrik bisa cepat, nyaman, dan diminati pasar luas. Perusahaan ini juga mengembangkan baterai, panel surya, dan fitur Autopilot.',
                'gambar' => 'images/tesla.jpg',
            ],
            [
                'judul' => 'SpaceX: Roket yang Bisa Dipakai Ulang',
                'isi'   => 'SpaceX didirikan pada 2002 dengan tujuan menurunkan biaya peluncuran ke luar angkasa. Terobosannya adalah roket Falcon 9 yang tahap pertamanya bisa mendarat kembali dan dipakai lagi. Proyek besar berikutnya adalah Starship untuk misi Bulan dan Mars.',
                'gambar' => 'images/spacex.jpg',
            ],
            [
                'judul' => 'Neuralink: Menghubungkan Otak dan Komputer',
                'isi'   => 'Neuralink mengembangkan implan kecil yang membaca sinyal otak. Tujuan awalnya membantu orang dengan kelumpuhan mengendalikan perangkat digital hanya dengan pikiran.',
                'gambar' => 'images/neuralink.jpg',
            ],
            [
                'judul' => 'Visi Multi-Planet',
                'isi'   => 'Musk percaya manusia perlu menjadi spesies multi-planet agar tidak bergantung pada satu planet. Mars menjadi target jangka panjang SpaceX.',
                'gambar' => 'images/elon-profile.jpg',
            ],
        ];

        return view('blog', ['posts' => $posts]);
    }
}