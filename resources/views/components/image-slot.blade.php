@props(['src' => null, 'alt' => '', 'label' => 'Gambar'])

@if ($src)
    <img src="{{ asset($src) }}" alt="{{ $alt }}"
         {{ $attributes->merge(['class' => 'w-full object-cover']) }}>
@else
    <div {{ $attributes->merge(['class' => 'flex items-center justify-center bg-slate-200 text-sm text-slate-500']) }}>
        {{ $label }} (ganti dengan gambar)
    </div>
@endif