<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Inventory Dashboard') }}</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-cloud text-gray-900">

    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-700 to-purple-400 text-slate-100 shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Inventory Dashboard</h1>

            @auth
                <div class="flex items-center space-x-4">
                    <span class="text-sm">Halo, <strong>{{ Auth::user()->name }}</strong></span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="bg-red-400 hover:bg-red-700 text-white px-3 py-1 rounded text-sm transition">
                            Keluar
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </header>

    <!-- Content -->
    <main class="min-h-screen px-4 py-6 md:px-10 bg-slate-200">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-pale text-center text-xs py-4 text-navy">
        &copy; {{ now()->year }} Inventory Dashboard | Made by M Lintang A W
    </footer>

    <script>
        lucide.createIcons();
    </script>
    
    @yield('popup')
    @stack('scripts')
</body>

</html>