<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Equal Education')</title>
    @vite('resources/js/app.js')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-white text-gray-800">
<div x-data="{ sidebarOpen: false }" class="relative min-h-screen overflow-x-hidden">
    <!-- SIDEBAR -->
    <aside x-show="sidebarOpen" @click.outside="sidebarOpen = false" class="fixed top-0 left-0 w-64 h-full overflow-y-auto bg-gradient-to-b from-gray-600 to-gray-900 text-white p-6 z-50 shadow-xl">
        <h2 class="text-2xl font-bold mb-6">E-LEARN</h2>
       @auth
    @if(Auth::user()->role == 'admin')
        {{-- Tampilkan konten admin --}}
    @elseif(Auth::user()->role == 'user')
        {{-- Tampilkan konten user --}}
    @endif
@endauth

    </aside>

    <!-- HEADER -->
    <div :class="sidebarOpen ? 'ml-64' : 'ml-0'" class="transition-all duration-300">
        <header class="bg-gray-500 text-white p-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <button @click="sidebarOpen = !sidebarOpen" class="text-white text-2xl">☰</button>
                <img src="https://i.ibb.co.com/B5z7p8BD/logo-equal-education.png" alt="Logo" class="h-12 w-auto">
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 px-4 py-2 rounded">Logout</button>
            </form>
        </header>

        <!-- CONTENT -->
        <main class="mt-4 px-6">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
