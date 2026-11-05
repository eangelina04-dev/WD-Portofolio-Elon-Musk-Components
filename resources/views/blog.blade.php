@php
    $posts = [
        [
            'title' => 'Tesla: Mempopulerkan Mobil Listrik',
            'body'  => 'Tesla mulai dikenal lewat Roadster pada 2008, lalu Model S, Model 3, Model X, dan Model Y. Tesla membuktikan bahwa mobil listrik bisa cepat, nyaman, dan diminati pasar luas. Perusahaan ini juga mengembangkan baterai, panel surya, dan fitur Autopilot.',
        ],
        [
            'title' => 'SpaceX: Roket yang Bisa Dipakai Ulang',
            'body'  => 'SpaceX didirikan pada 2002 dengan tujuan menurunkan biaya peluncuran ke luar angkasa. Terobosannya adalah roket Falcon 9 yang tahap pertamanya bisa mendarat kembali dan dipakai lagi. Proyek besar berikutnya adalah Starship untuk misi Bulan dan Mars.',
        ],
        [
            'title' => 'Neuralink: Menghubungkan Otak dan Komputer',
            'body'  => 'Neuralink mengembangkan implan kecil yang membaca sinyal otak. Tujuan awalnya membantu orang dengan kelumpuhan mengendalikan perangkat digital hanya dengan pikiran.',
        ],
        [
            'title' => 'Visi Multi-Planet',
            'body'  => 'Musk percaya manusia perlu menjadi spesies multi-planet agar tidak bergantung pada satu planet. Mars menjadi target jangka panjang SpaceX.',
        ],
    ];
@endphp

<x-layout title="Blog - Elon Musk">
    <div class="container-page py-12">
        <h1 class="section-title">Blog</h1>

        <div class="grid gap-6 md:grid-cols-2">
            @foreach ($posts as $post)
                <article class="card">
                    <x-image-slot class="mb-4 h-44 rounded-lg" label="Gambar post" />
                    <h2 class="text-xl font-semibold">{{ $post['title'] }}</h2>
                    <p class="mt-2 leading-relaxed text-slate-600">{{ $post['body'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>