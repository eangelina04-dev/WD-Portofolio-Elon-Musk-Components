@php
    $companies = [
        ['name' => 'Tesla',     'desc' => 'Mobil listrik dan penyimpanan energi'],
        ['name' => 'SpaceX',    'desc' => 'Roket dan satelit'],
        ['name' => 'Neuralink', 'desc' => 'Chip otak untuk membantu penderita gangguan saraf'],
        ['name' => 'xAI',       'desc' => 'Pengembangan AI (Grok)'],
    ];
@endphp

<x-layout title="Home - Elon Musk">

    {{-- Hero --}}
    <section class="bg-slate-900 text-white">
        <div class="container-page grid items-center gap-8 py-16 md:grid-cols-2">
            <div>
                <h1 class="text-5xl font-bold">Elon Musk</h1>
                <p class="mt-2 text-xl text-sky-400">Entrepreneur, Engineer, Visionary</p>
                <p class="mt-6 leading-relaxed text-slate-300">
                    Elon Musk adalah pengusaha dan insinyur kelahiran Afrika Selatan yang dikenal lewat
                    perusahaan-perusahaan di bidang kendaraan listrik, penerbangan luar angkasa,
                    kecerdasan buatan, dan teknologi otak. Visinya adalah membuat manusia bisa hidup di
                    planet lain dan mempercepat peralihan dunia ke energi berkelanjutan.
                </p>
            </div>
            <x-image-slot class="h-72 rounded-xl" label="Foto utama" />
        </div>
    </section>

    {{-- Perusahaan utama --}}
    <section class="container-page py-12">
        <h2 class="section-title">Perusahaan Utama</h2>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($companies as $company)
                <div class="card">
                    <x-image-slot class="mb-4 h-28 rounded-lg" :label="'Logo ' . $company['name']" />
                    <h3 class="text-lg font-semibold">{{ $company['name'] }}</h3>
                    <p class="mt-1 text-sm text-slate-600">{{ $company['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

</x-layout>