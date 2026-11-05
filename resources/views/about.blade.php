@php
    $profile = [
        'Nama lengkap'    => 'Elon Reeve Musk',
        'Lahir'           => '28 Juni 1971, Pretoria, Afrika Selatan',
        'Kewarganegaraan' => 'Amerika Serikat (sebelumnya Afrika Selatan dan Kanada)',
        'Pendidikan'      => 'University of Pennsylvania, Fisika (dan Ekonomi)',
    ];

    $timeline = [
        ['year' => '1995', 'event' => 'Mendirikan Zip2 (software peta dan direktori bisnis)'],
        ['year' => '1999', 'event' => 'Mendirikan X.com, yang kemudian menjadi PayPal'],
        ['year' => '2002', 'event' => 'PayPal dibeli eBay; Musk mendirikan SpaceX'],
        ['year' => '2004', 'event' => 'Masuk Tesla sebagai investor dan chairman'],
        ['year' => '2008', 'event' => 'Menjadi CEO Tesla'],
        ['year' => '2012', 'event' => 'Dragon milik SpaceX menjadi pesawat swasta pertama yang bersandar di ISS'],
        ['year' => '2016', 'event' => 'Mendirikan Neuralink dan The Boring Company'],
        ['year' => '2022', 'event' => 'Mengakuisisi Twitter, lalu mengganti namanya menjadi X'],
        ['year' => '2023', 'event' => 'Mendirikan xAI'],
    ];
@endphp

<x-layout title="About - Elon Musk">
    <div class="container-page space-y-12 py-12">

        {{-- Data diri --}}
        <section class="grid gap-8 md:grid-cols-3">
            <x-image-slot class="h-64 rounded-xl md:col-span-1" label="Foto profil" />

            <div class="card md:col-span-2">
                <h1 class="section-title">Tentang Elon Musk</h1>
                <dl class="space-y-3">
                    @foreach ($profile as $label => $value)
                        <div>
                            <dt class="text-sm text-slate-500">{{ $label }}</dt>
                            <dd class="font-medium">{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </section>

        {{-- Latar belakang --}}
        <section>
            <h2 class="section-title">Latar Belakang</h2>
            <p class="leading-relaxed">
                Musk tertarik pada komputer sejak kecil dan belajar pemrograman otodidak. Di usia 12
                tahun, ia menjual kode game buatannya bernama Blastar. Ia pindah ke Kanada pada usia
                17 tahun, lalu melanjutkan kuliah di Amerika Serikat.
            </p>
        </section>

        {{-- Timeline --}}
        <section>
            <h2 class="section-title">Perjalanan Karier</h2>
            <ol class="space-y-6 border-l-2 border-sky-400 pl-6">
                @foreach ($timeline as $item)
                    <li>
                        <span class="font-bold text-sky-600">{{ $item['year'] }}</span>
                        <p>{{ $item['event'] }}</p>
                    </li>
                @endforeach
            </ol>
        </section>

        {{-- Filosofi --}}
        <section class="card">
            <h2 class="section-title">Filosofi Kerja</h2>
            <p class="leading-relaxed">
                Musk sering menyebut <em>first principles thinking</em>, yaitu memecah masalah menjadi
                fakta paling dasar lalu menyusun solusi dari sana, bukan meniru cara orang lain.
            </p>
        </section>

    </div>
</x-layout>