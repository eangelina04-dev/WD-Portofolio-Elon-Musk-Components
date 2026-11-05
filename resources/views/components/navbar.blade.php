@php
    $links = [
        ['label' => 'Home',    'route' => 'home'],
        ['label' => 'About',   'route' => 'about'],
        ['label' => 'Blog',    'route' => 'blog'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<nav class="bg-slate-900">
    <div class="container-page flex flex-wrap items-center justify-between gap-y-3 py-4">

        {{-- Logo / nama --}}
        <a href="{{ route('home') }}" class="text-xl font-bold text-white">
            Elon<span class="text-sky-400">Musk</span>
        </a>

        {{-- Menu --}}
        <ul class="flex flex-wrap gap-x-6 gap-y-2 text-sm">
            @foreach ($links as $link)
                <li>
                    <a href="{{ route($link['route']) }}"
                       class="{{ request()->routeIs($link['route'])
                            ? 'border-b-2 border-sky-400 pb-1 font-semibold text-white'
                            : 'pb-1 text-slate-400 transition hover:text-white' }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>