<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kesetaraan Gender</title>
    @vite('resources/js/app.js')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
</head>
<body class="bg-white text-gray-800">
<div x-data="{ sidebarOpen: false }" class="relative min-h-screen overflow-x-hidden">
<style>
    /* Sembunyikan scrollbar untuk sidebar */
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .hide-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;     /* Firefox */
    }
</style>

    <!-- Sidebar -->
    <aside
        x-show="sidebarOpen"
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        @click.outside="sidebarOpen = false"
         class="fixed top-0 left-0 w-64 h-full overflow-y-auto hide-scrollbar bg-gradient-to-b from-gray-600 to-gray-900 text-white p-6 z-50 shadow-xl rounded-r-1x2 font-sans"
    >
        <h2 class="text-2xl font-bold mb-6 tracking-wide">E-LEARN</h2>
        <a href="{{ route('materi.index') }}" class="block py-4 px-6 rounded-lg hover:bg-white/20 transition">📘 Materi</a>
        <a href="{{ route('quiz.index') }}" class="block py-4 px-6 rounded-lg hover:bg-white/20 transition">📝 Quiz</a>
        <a href="#" class="block py-4 px-6 rounded-lg hover:bg-white/20 transition">🎥 Video</a>
        <a href="#" class="block py-4 px-6 rounded-lg hover:bg-white/20 transition">📊 History Belajar</a>
    </aside>

    <!-- Main Content -->
    <div :class="sidebarOpen ? 'ml-64' : 'ml-0'" class="transition-all duration-300">

        <!-- Header -->
        <header class="bg-gray-500 text-white p-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <!-- Toggle Button -->
                <button @click="sidebarOpen = !sidebarOpen" class="text-white text-2xl focus:outline-none">
                    ☰
                </button>
                <img src="https://i.ibb.co.com/B5z7p8BD/logo-equal-education.png" alt="Logo" class="h-12 w-auto">
            </div>

            <!-- Right Side Buttons -->
            <div class="flex items-center space-x-4">
                <!-- Dropdown About -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center gap-2 bg-gray text-white-700 px-4 py-2 rounded-lg ">
                        About
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div 
                        x-show="open"
                        @click.outside="open = false"
                        x-transition
                        class="absolute right-0 mt-2 w-56 bg-gray-500 text-white rounded-lg shadow-lg py-2 z-50"
                    >
                        <a href="#tentang-kami" class="block px-4 py-2 hover:bg-gray-400">Tentang Kami</a>
                        <a href="#ulasan-aplikasi" class="block px-4 py-2 hover:bg-gray-400">Ulasan Aplikasi</a>
                        <a href="#cabang-perusahaan" class="block px-4 py-2 hover:bg-gray-400">Cabang Perusahaan</a>
                    </div>
                </div>

                <!-- <a href="{{ route('login') }}" class="bg-white text-sky-600 px-3 py-1 rounded hover:bg-gray-100">Login</a> -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                        Logout
                </button>
            </form>
            </div>
        </header>

        <!-- Main Section -->
        <main class="mt-4 px-6">
            <section class="p-8 text-center">
                <h2 class="text-3xl font-bold mb-4">EQUAL EDUCATION</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="border shadow p-4 rounded">
                        <img src="https://www.unicef.org/sites/default/files/styles/hero_extended/public/UN0284179.jpg.webp?itok=dig3Gw2w" class="w-full h-48 object-cover rounded mb-2">
                        <p class="text-sm text-gray-500">20 April 2025</p>
                        <h3 class="font-semibold">Girls Education</h3>
                        <a href="#" class="text-blue-600 hover:underline">Read more</a>
                    </div>

                    <!-- Card 2 -->
                    <div class="border shadow p-4 rounded">
                        <img src="https://en.eef.or.th/wp-content/uploads/2023/07/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8%81-1.jpg" class="w-full h-48 object-cover rounded mb-2">
                        <p class="text-sm text-gray-500">01 May 2025</p>
                        <h3 class="font-semibold">Pendidikan Inklusif — Jalan Menuju Pemberdayaan dan Kesetaraan</h3>
                        <a href="#" class="text-blue-600 hover:underline">Read more</a>
                    </div>

                    <!-- Card 3 -->
                    <div class="border shadow p-4 rounded">
                        <img src="https://www.rasmussen.edu/images/rasmussenlibraries/blogs/school-of-education/2021/what-is-inclusive-education2bb88b35-c9be-4662-b0eb-176af034b022.jpg?sfvrsn=27181488_1" class="w-full h-48 object-cover rounded mb-2">
                        <p class="text-sm text-gray-500">30 April 2025</p>
                        <h3 class="font-semibold">What Is Inclusive Education?</h3>
                        <a href="#" class="text-blue-600 hover:underline">Explore the story</a>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Contact Service Floating Button -->
    <a href="https://wa.me/6289611475102" target="_blank"
       class="fixed bottom-6 right-6 bg-green-600 hover:bg-green-700 text-white rounded-full p-1.5 shadow-lg z-50 group"
       title="Contact Service"
    >
    <img src="https://png.pngtree.com/png-vector/20201028/ourmid/pngtree-phone-icon-in-solid-circle-png-image_2380227.jpg"
         alt="Contact Service"
         class="w-14 h-14 rounded-full shadow-lg hover:scale-110 transition-transform duration-200"
    >
    </a>

</div>
</body>
</html>
