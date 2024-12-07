<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reforest</title>
  @vite('resources/css/app.css')

{{-- font --}
{{-- font --}}
</head>
<body class="bg-gray-100">
  <!-- Navbar -->
  <header class="bg-[#D2E2E2] shadow">
    <div class="container mx-auto flex justify-between items-center p-4">
      <!-- Logo -->
      <div class="flex items-center space-x-4">
        <img src="img/Logo.png" alt="Logo" class="w-12 h-12">
      </div>
      <!-- Navbar Links and Buttons -->
      <nav class="flex items-center justify-items-center space-x-6">
        <div class="hidden md:flex items-center space-x-6">
          <a href="#" class="text-gray-700">Home</a>
          <a href="#" class="text-gray-700">Lokasi</>
          <a href="#" class="text-gray-700">Proker</a>
          <a href="#" class="text-gray-700">Artikel</a>
          <a href="#" class="text-gray-700">FAQs</a>
          <button class="bg-white text-[#004C6D] py-1 px-4 border border-[#004C6D] hover:bg-[#004C6D] hover:text-white">SignUp</button>
          <button class="bg-[#004C6D] text-white py-1 px-4 border rounded-full hover:border-[#004C6D] hover:bg-white hover:text-[#004C6D]">Login</button>
        </div>
        

        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button id="menu-btn" class="text-gray-600 hover:text-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
        </div>
      </nav>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#D2E2E2] px-4 py-2 space-y-2">
      <a href="#" class="block text-gray-700 ">Home</a>
      <a href="#" class="block text-gray-700 ">Lokasi</a>
      <a href="#" class="block text-gray-700 ">Proker</a>
      <a href="#" class="block text-gray-700 ">Artikel</a>
      <a href="#" class="block text-gray-700 ">FAQs</a>
      <button class="w-full bg-green-600 text-white py-1 rounded hover:bg-green-700">SignUp</button>
      <button class="w-full bg-white text-green-600 py-1 border border-green-600 rounded hover:bg-green-600 hover:text-white">Login</button>
    </div>
  </header>
  
  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-[615px]" style="background-image: url('img/hero2.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-30 flex justify-center">
      <div class=" ml-[10%] mr-[40%] text-[#1E4D4D] text-start mt-[7%]">
        <h2 class="text-5xl font-bold">Reforest</h2>
        <p class="mt-2 text-lg italic">Menanam Harapan, Menjaga kelestarian
          Bergabunglah dalam misi global melawan perubahan iklim dengan aksi nyata. Reforest mempermudah Anda mendokumentasikan setiap pohon yang ditanam, memantau pertumbuhannya, dan melihat dampak kontribusi Anda terhadap kelestarian bumi.</p>
      </div>20
    </div>
  </section>


  <div class="bg-white p-8">
    <h2 class="text-2xl font-bold mb-6">ARTIKEL</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Artikel 1 -->
      <div class="bg-gray-50 p-4 rounded-lg shadow">
        <img
          src="img/art1.png"
          alt="Pohon Pinus Sumatera"
          class="w-full h-48 object-cover rounded-lg mb-4"
        />
        <h3 class="text-xl font-semibold mb-2">Pohon Pinus Sumatera</h3>
        <p class="text-gray-600">
          Pohon Pinus Sumatera (Pinus merkusii) adalah salah satu spesies pohon
          konifer yang tumbuh di wilayah tropis, khususnya di Sumatera,
          Indonesia. Pohon ini dikenal sebagai satu-satunya spesies pinus yang
          tumbuh alami di kawasan tropis dunia.
        </p>
      </div>
      <!-- Artikel 2 -->
      <div class="bg-gray-50 p-4 rounded-lg shadow">
        <img
          src="img/art2.png"
          alt="Pohon Eboni"
          class="w-full h-48 object-cover rounded-lg mb-4"
        />
        <h3 class="text-xl font-semibold mb-2">Pohon Eboni</h3>
        <p class="text-gray-600">
          Pohon Eboni (Diospyros celebica) adalah salah satu jenis pohon endemik
          yang tumbuh di Sulawesi, Indonesia. Pohon ini dikenal dengan kayunya
          yang keras, padat, dan memiliki warna hitam pekat yang sering diselingi
          garis-garis coklat atau kuning, menjadikannya sangat berharga dalam
          industri kayu.
        </p>
      </div>
    </div>
    <a
      href="#"
      class="block mt-6 text-blue-500 font-medium hover:underline text-right"
    >
      Read More
    </a>
  </div>
  
  </section>
  
  <!-- Footer -->
  <footer class="bg-gray-200 py-6">
    <div class="container mx-auto text-center text-sm text-gray-600">
      <div class="flex justify-center space-x-4">
        <a href="#" class="hover:underline">Syarat dan Ketentuan</a>
        <a href="#" class="hover:underline">FAQ</a>
        <a href="#" class="hover:underline">Kontak</a>
        <a href="#" class="hover:underline">Offline</a>
      </div>
      <p class="mt-4">Copyright © 2024 Reforest. All rights reserved.</p>
    </div>
  </footer>

  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
