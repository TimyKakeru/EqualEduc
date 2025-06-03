<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Equal Education Indonesia</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-gray-600 text-white">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-4">
        <img src="https://i.ibb.co.com/B5z7p8BD/logo-equal-education.png" class="h-10">
        <nav class="hidden md:flex space-x-6 text-sm">
          <a href="{{ route('login') }}" class="hover:underline">Beranda</a>
        </nav>
      <div class="absolute right-4 top-4 flex space-x-2">
        <a href="{{ route('login') }}" class="bg-white text-blue-600 px-4 py-2 rounded hover:bg-blue-100 text-sm">Sign In</a>
      
      </div>

  </header>

  <!-- Hero Section -->
  <section class="relative bg-gray-100">
    <img src="https://psga.uin-malang.ac.id/wp-content/uploads/2025/03/image_2025-03-14_110739881-1060x570.png" alt="Hero Image" class="w-full h-96 object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
      <div class="text-center text-white px-4">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Bersama Equal,Menambah Wawasan</h1>
        <p class="mb-6">Kebaikan Anda bersama EQUAL dan #PendekarAnak adalah bagian dari perubahan besar.</p>
        <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded text-white font-semibold">Baca Sekarang</a>
      </div>
    </div>
  </section>

  <!-- Berita & Artikel -->
  <section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold mb-6 text-center">Berita & Artikel Terbaru</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <!-- Artikel 1 -->
      <div class="bg-white shadow rounded overflow-hidden">
        <img src="https://picsum.photos/200/300" alt="Artikel 1" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg mb-2">Imunisasi: Investasi Vital untuk Generasi Sehat</h3>
          <p class="text-sm text-gray-600 mb-4">Imunisasi adalah investasi penting untuk menciptakan generasi Indonesia Emas 2045.</p>
          <a href="{{ route('login') }}" class="text-blue-600 hover:underline text-sm">Baca Selengkapnya</a>
        </div>
      </div>
      <!-- Artikel 2 -->
      <div class="bg-white shadow rounded overflow-hidden">
        <img src="https://picsum.photos/200/300" alt="Artikel 2" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg mb-2">Lagu Melawan Kanker Serviks</h3>
          <p class="text-sm text-gray-600 mb-4">Perjuangan seorang remaja untuk meningkatkan kesadaran tentang kanker serviks melalui lagu.</p>
          <a href="{{ route('login') }}" class="text-blue-600 hover:underline text-sm">Baca Selengkapnya</a>
        </div>
      </div>
      <!-- Artikel 3 -->
      <div class="bg-white shadow rounded overflow-hidden">
        <img src="https://picsum.photos/200/300" alt="Artikel 3" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg mb-2">Mendengar Harapan Anak Melalui Pekerja Sosial</h3>
          <p class="text-sm text-gray-600 mb-4">Pekerja sosial melindungi dan melayani anak-anak serta keluarga mereka.</p>
          <a href="{{ route('login') }}" class="text-blue-600 hover:underline text-sm">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Ajakan Bertindak -->
  <section class="bg-blue-600 text-white py-12">
    <div class="max-w-3xl mx-auto text-center px-4">
      <h2 class="text-2xl md:text-3xl font-bold mb-4">Bergabunglah dengan Kami</h2>
      <p class="mb-6">Bersama, kita dapat menciptakan dunia yang lebih baik untuk setiap anak. Ambil tindakan sekarang dan jadilah bagian dari perubahan.</p>
      <a href="{{ route('login') }}" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">Ambil Tindakan</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-6">
      <div>
        <h3 class="font-bold mb-2">EQUAL Indonesia</h3>
        <p class="text-sm">Jl. Arif Rahman Hakim ( Itats ), Indonesia</p>
      </div>
      <div>
        <h3 class="font-bold mb-2">Tautan Cepat</h3>
        <ul class="text-sm space-y-2">
          <li><a href="#" class="hover:underline">Tentang Kami</a></li>
          <li><a href="#" class="hover:underline">Program</a></li>
          <li><a href="#" class="hover:underline">Donasi</a></li>
        </ul>
      </div>
      <div>
        <h3 class="font-bold mb-2">Ikuti Kami</h3>
        <ul class="flex space-x-4">
          <li><a href="#" class="hover:underline">Facebook</a></li>
          <li><a href="#" class="hover:underline">Twitter</a></li>
          <li><a href="#" class="hover:underline">Instagram</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center text-sm mt-6">&copy; 2025 EQUAL Indonesia. All rights reserved.</div>
  </footer>

</body>
</html>
