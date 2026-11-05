@props(['title' => 'Elon Musk'])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-slate-50 text-slate-800">

    <x-navbar />

    <main class="flex-1">
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>