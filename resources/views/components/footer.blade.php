<footer class="bg-slate-900 py-8">
    <div class="container-page flex flex-col items-center justify-between gap-4 text-sm text-slate-400 md:flex-row">

        <p>&copy; {{ date('Y') }} Portofolio Elon Musk. </p>

        <ul class="flex gap-4">
            <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-white">About</a></li>
            <li><a href="{{ route('blog') }}" class="hover:text-white">Blog</a></li>
        </ul>
    </div>
</footer>