<x-layout title="Blog - Elon Musk">
    <div class="container-page py-12">
        <h1 class="section-title">Blog</h1>

        <div class="grid gap-6 md:grid-cols-2">
            @foreach ($posts as $post)
                <article class="card">
                    <x-image-slot class="mb-4 h-44 rounded-lg" label="Gambar post" />
                    <h2 class="text-xl font-semibold">{{ $post['judul'] }}</h2>
                    <p class="mt-2 leading-relaxed text-slate-600">{{ $post['isi'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>