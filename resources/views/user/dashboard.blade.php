@extends('layouts.app')

@section('title', 'Dashboard Pengguna')

@section('content')
<section class="p-8 text-center">
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
        <a href="{{ route('user.dashboard') }}"
           class="block px-4 py-2 rounded hover:bg-gray-800 {{ request()->routeIs('user.dashboard') ? 'bg-gray-800' : '' }}">
            🏠 Dashboard
        </a>
        <a href="{{ route('user.pdf') }}" class="block py-4 px-6 rounded-lg hover:bg-white/20 transition">📘 Materi</a>
        <a href="{{ route('user.quiz') }}" class="block py-4 px-6 rounded-lg hover:bg-white/20 transition">📝 Quiz</a>
        <a href="{{ route('user.video') }}" class="block py-4 px-6 rounded-lg hover:bg-white/20 transition">🎥 Video</a>
        <a href="#" class="block py-4 px-6 rounded-lg hover:bg-white/20 transition">📊 History Belajar</a>
    </aside>
    
    <h2 class="text-3xl font-bold mb-4">EQUAL EDUCATION</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="border shadow p-4 rounded">
            <img src="https://www.unicef.org/sites/default/files/styles/hero_extended/public/UN0284179.jpg.webp?itok=dig3Gw2w" class="w-full h-48 object-cover rounded mb-2">
            <p class="text-sm text-gray-500">20 April 2025</p>
            <h3 class="font-semibold">Girls Education</h3>
            <a href="#" class="text-blue-600 hover:underline">Read more</a>
        </div>

        <div class="border shadow p-4 rounded">
            <img src="https://en.eef.or.th/wp-content/uploads/2023/07/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8%81-1.jpg" class="w-full h-48 object-cover rounded mb-2">
            <p class="text-sm text-gray-500">01 May 2025</p>
            <h3 class="font-semibold">Pendidikan Inklusif — Jalan Menuju Pemberdayaan dan Kesetaraan</h3>
            <a href="#" class="text-blue-600 hover:underline">Read more</a>
        </div>
        <div class="border shadow p-4 rounded">
            <img src="https://www.rasmussen.edu/images/rasmussenlibraries/blogs/school-of-education/2021/what-is-inclusive-education2bb88b35-c9be-4662-b0eb-176af034b022.jpg?sfvrsn=27181488_1" class="w-full h-48 object-cover rounded mb-2">
            <p class="text-sm text-gray-500">30 April 2025</p>
            <h3 class="font-semibold">What Is Inclusive Education?</h3>
            <a href="#" class="text-blue-600 hover:underline">Explore the story</a>
        </div>
    </div>
    
</section>
@endsection
