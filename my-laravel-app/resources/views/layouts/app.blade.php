<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">
    <nav class="border-b bg-white shadow-sm">
        <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
            <h1 class="text-xl font-bold">Laravel App</h1>
            <div class="flex gap-3">
                <a href="{{ url('/') }}" class="rounded px-3 py-2 hover:bg-slate-100">Home</a>
                <a href="{{ url('/greet') }}" class="rounded px-3 py-2 hover:bg-slate-100">Greet</a>
            </div>
        </div>
    </nav>

    <main class="mx-auto max-w-5xl px-6 py-8">
        @yield('content')
    </main>
</body>
</html>