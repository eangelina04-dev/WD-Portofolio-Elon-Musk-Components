<x-layout title="About - Elon Musk">
    <div class="container-page space-y-12 py-12">

        {{-- Data diri --}}
        <section class="grid gap-8 md:grid-cols-3">
            <x-image-slot src="images/elon-profile.jpg" class="h-64 rounded-xl md:col-span-1" label="Foto profil" />

            <div class="card md:col-span-2">
                <h1 class="section-title">Tentang Elon Musk</h1>
                <dl class="space-y-3">
                    @foreach ($profil as $label => $value)
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
                        <span class="font-bold text-sky-600">{{ $item['tahun'] }}</span>
                        <p>{{ $item['peristiwa'] }}</p>
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