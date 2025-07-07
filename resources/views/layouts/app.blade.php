<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Gofood')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
          },
        },
      },
    }
  </script>
</head>
<body class="min-h-screen flex flex-col bg-green-50 font-poppins" x-data="{ showLogin: false, showLocations: false, selectedLocation: 'Madinah' }">

  <!-- Navbar -->
  <header class="p-4 md:px-8 flex flex-wrap items-center justify-between" style="background-color: #35CD81;">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <div class="w-8 h-8 text-white flex items-center justify-center rounded-full font-bold" style="background-color: #D9D9D9;">
        L
      </div>
      <span class="text-xl font-semibold text-white">Gofood</span>
    </div>

    <!-- Search -->
    <div class="relative w-full max-w-md mx-auto my-2 md:my-0">
      <i class="bi bi-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
      <input
        type="text"
        placeholder="Cari..."
        class="w-full h-[43px] pl-10 pr-32 border border-green-400 rounded-full focus:outline-none"
      />
      <button
        class="absolute top-1/2 right-2 -translate-y-1/2 h-[35px] px-6 text-white font-semibold rounded-full active:bg-white active:text-green-500 transition"
        style="background-color: #35CD81;"
      >
        Cari
      </button>
    </div>

    <!-- Tombol Kanan -->
    <div class="flex flex-wrap items-center justify-center gap-2 mt-2 md:mt-0 md:justify-end text-white">
      <!-- Tombol Keranjang -->
      <div class="relative">
        <button class="p-2 bg-green-300 rounded-full">
          <!-- Ikon Keranjang -->
          <svg width="24" height="24" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M29.5901 16.25L30.0051 13.76C30.2757 12.131 30.4111 11.318 29.9768 10.784C29.544 10.25 28.7469 10.25 27.1541 10.25H5.10214C3.50937 10.25 2.71224 10.25 2.27946 10.784C1.84521 11.318 1.98203 12.131 2.25121 13.76L4.04178 24.53C4.63517 28.1 4.93112 29.8835 6.14317 30.9425C7.35374 32 9.0997 32 12.5916 32H16.1281M19.1025 26H31M25.0513 32V20M24.3077 10.25C24.3077 8.06196 23.4459 5.96354 21.9119 4.41637C20.378 2.86919 18.2975 2 16.1281 2C13.9588 2 11.8783 2.86919 10.3443 4.41637C8.81039 5.96354 7.94862 8.06196 7.94862 10.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>

      <!-- Tombol Chat -->
      <div class="relative">
        <button class="p-2 bg-green-300 rounded-full">
          <i class="bi bi-chat-dots-fill text-xl"></i>
        </button>
      </div>

      <!-- Lokasi Dropdown -->
      <div class="relative">
        <button @click="showLocations = !showLocations" class="flex items-center space-x-1 focus:outline-none">
          <i class="bi bi-geo-alt-fill text-2xl"></i>
          <span x-text="selectedLocation"></span>
        </button>
        <div 
          x-show="showLocations" 
          @click.away="showLocations = false" 
          class="absolute mt-2 bg-white text-gray-800 rounded shadow p-2 space-y-1 z-10 w-32"
        >
          <button class="block w-full text-left hover:bg-gray-100 px-2 py-1" @click="selectedLocation = 'Mekkah'; showLocations = false">Mekkah</button>
          <button class="block w-full text-left hover:bg-gray-100 px-2 py-1" @click="selectedLocation = 'Madinah'; showLocations = false">Madinah</button>
          <button class="block w-full text-left hover:bg-gray-100 px-2 py-1" @click="selectedLocation = 'Jeddah'; showLocations = false">Jeddah</button>
        </div>
      </div>

      <!-- Profil -->
  <button @click="showLogin = true" class="flex items-center space-x-1">
    <div class="bg-white w-8 h-8 flex items-center justify-center rounded-full">
      <i class="bi bi-person-fill text-gray-600 text-base"></i>
    </div>
    <span class="font-bold text-white">Customer 1</span>
  </button>
</div>

<!-- Modal Login/Profile -->
<div
  x-show="showLogin"
  class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
>
  <div class="bg-green-300 rounded-2xl p-6 w-80 relative">
    <!-- Tombol Close -->
    <button
      @click="showLogin = false"
      class="absolute top-2 right-2 text-gray-600 hover:text-black text-2xl"
    >
      ✕
    </button>

    <!-- Foto Profil + Ikon Edit -->
   <div class="flex justify-center mb-2 relative">
  <!-- Lingkaran Foto Profil -->
  <div class="w-24 h-24 rounded-full bg-gray-300 flex items-center justify-center border border-gray-300">
    <i class="bi bi-person-fill text-4xl text-gray-500"></i>
  </div>

  <!-- Ikon Edit di Luar Sisi Kanan Bawah -->
  <button
    class="absolute -right-2 bottom-2 text-white text-2xl"
  >
    <i class="bi bi-pencil-square"></i>
  </button>
</div>


    <!-- Nama + Nomor -->
    <div class="text-center mb-4">
      <h2 class="text-base font-semibold">Nama</h2>
      <p class="text-sm">08xxxxxxxx80</p>
    </div>

    <div class="flex justify-between text-white mb-4 px-4">
  <!-- Bag -->
  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14l1 12H4L5 8z" />
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8V6a4 4 0 10-8 0v2" />
  </svg>

  <!-- Receipt -->
  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 4H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v15l-2-2z"/>
  </svg>

  <!-- Clock History -->
  <svg width="24" height="24" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M21.9543 0V4.04607C30.756 5.12769 36.9914 13.1197 35.9088 21.9129C34.9865 29.2038 29.2523 34.9925 21.9543 35.8538V39.8598C32.9815 38.7581 41.0014 28.9835 39.8986 17.967C38.9964 8.45268 31.4377 0.941412 21.9543 0ZM17.9444 0.0600901C14.0347 0.440661 10.3055 1.94291 7.25794 4.4667L10.125 7.43115C12.3706 5.62844 15.0773 4.4667 17.9444 4.0661V0.0600901ZM4.43095 7.29094C1.92565 10.3311 0.383134 14.0477 0 17.967H4.00991C4.39086 15.1227 5.51363 12.4186 7.29804 10.1552L4.43095 7.29094ZM0.0200495 21.973C0.421041 25.8988 1.96486 29.6044 4.451 32.649L7.29804 29.7847C5.52735 27.5206 4.39859 24.8225 4.02996 21.973H0.0200495ZM10.125 32.7291L7.25794 35.4732C10.2954 38.0018 14.0134 39.5767 17.9444 40V35.994C15.0921 35.6257 12.3913 34.4981 10.125 32.7291ZM20.9518 9.95493V20.4707L29.9741 25.8187L28.4704 28.2824L17.9444 21.973V9.95493H20.9518Z" fill="white"/>
  </svg>

  <!-- Check Circle -->
    <svg width="24" height="24" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.5923 0.953227L25.5262 3.44829C26.1656 3.99193 26.9597 4.32086 27.7962 4.3886L31.635 4.69882C33.5906 4.85689 35.1431 6.40939 35.3012 8.36501L35.6115 12.2038C35.6792 13.0403 36.0081 13.8344 36.5517 14.4738L39.0468 17.4076C40.3177 18.9021 40.3177 21.0978 39.0468 22.5923L36.5517 25.5262C36.0081 26.1656 35.6791 26.9597 35.6114 27.7962L35.3011 31.635C35.1431 33.5906 33.5905 35.1431 31.635 35.3012L27.7962 35.6115C26.9597 35.6792 26.1656 36.0081 25.5262 36.5517L22.5923 39.0468C21.0978 40.3177 18.9021 40.3177 17.4076 39.0468L14.4738 36.5517C13.8344 36.0081 13.0403 35.6791 12.2038 35.6114L8.36501 35.3011C6.40939 35.1431 4.85689 33.5905 4.69882 31.635L4.38851 27.7962C4.32077 26.9597 3.99183 26.1656 3.4482 25.5262L0.953227 22.5923C-0.317742 21.0978 -0.317742 18.9021 0.953227 17.4076L3.44829 14.4738C3.99193 13.8344 4.32086 13.0403 4.3886 12.2038L4.69882 8.36501C4.85689 6.40939 6.40939 4.85689 8.36501 4.69882L12.2038 4.38851C13.0403 4.32077 13.8344 3.99183 14.4738 3.4482L17.4076 0.953227C18.9021 -0.317742 21.0978 -0.317742 22.5923 0.953227ZM27.5236 12.8466L17.9922 22.4299L13.4063 17.844L10.5782 20.6721L17.9922 28.0862L30.3518 15.6748L27.5236 12.8466Z" fill="white"/>
  </svg>

  <!-- Custom Refresh Icon -->
  <svg width="24" height="24" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M20 40C15.3333 40 11.2037 38.5837 7.61111 35.7511C4.01852 32.9185 1.68519 29.2978 0.611111 24.8889C0.462963 24.3333 0.574074 23.8244 0.944444 23.3622C1.31481 22.9 1.81481 22.6311 2.44444 22.5555C3.03704 22.4815 3.57407 22.5926 4.05555 22.8889C4.53704 23.1852 4.87037 23.6296 5.05556 24.2222C5.94444 27.5555 7.77778 30.2778 10.5556 32.3889C13.3333 34.5 16.4815 35.5555 20 35.5555C24.3333 35.5555 28.0096 34.0467 31.0289 31.0289C34.0481 28.0111 35.557 24.3348 35.5556 20C35.5541 15.6652 34.0452 11.9896 31.0289 8.97333C28.0126 5.95704 24.3363 4.44741 20 4.44444C17.4444 4.44444 15.0556 5.03704 12.8333 6.22222C10.6111 7.40741 8.74074 9.03703 7.22222 11.1111H11.1111C11.7407 11.1111 12.2689 11.3244 12.6956 11.7511C13.1222 12.1778 13.3348 12.7052 13.3333 13.3333C13.3319 13.9615 13.1185 14.4896 12.6933 14.9178C12.2681 15.3459 11.7407 15.5585 11.1111 15.5556H2.22222C1.59259 15.5556 1.06519 15.3422 0.64 14.9156C0.214815 14.4889 0.00148148 13.9615 0 13.3333V4.44444C0 3.81481 0.213334 3.28741 0.64 2.86222C1.06667 2.43704 1.59407 2.2237 2.22222 2.22222C2.85037 2.22074 3.37852 2.43407 3.80667 2.86222C4.23481 3.29037 4.44741 3.81778 4.44444 4.44444V7.44444C6.33333 5.07407 8.63926 3.24074 11.3622 1.94444C14.0852 0.648148 16.9644 0 20 0C22.7778 0 25.38 0.528148 27.8067 1.58444C30.2333 2.64074 32.3444 4.06593 34.14 5.86C35.9356 7.65407 37.3615 9.76518 38.4178 12.1933C39.4741 14.6215 40.0015 17.2237 40 20C39.9985 22.7763 39.4711 25.3785 38.4178 27.8067C37.3644 30.2348 35.9385 32.3459 34.14 34.14C32.3415 35.9341 30.2304 37.36 27.8067 38.4178C25.383 39.4755 22.7807 40.003 20 40ZM22.2222 19.1111L27.7778 24.6667C28.1852 25.0741 28.3889 25.5926 28.3889 26.2222C28.3889 26.8518 28.1852 27.3704 27.7778 27.7778C27.3704 28.1852 26.8519 28.3889 26.2222 28.3889C25.5926 28.3889 25.0741 28.1852 24.6667 27.7778L18.4444 21.5555C18.2222 21.3333 18.0556 21.0837 17.9444 20.8067C17.8333 20.5296 17.7778 20.2422 17.7778 19.9444V11.1111C17.7778 10.4815 17.9911 9.95407 18.4178 9.52889C18.8444 9.1037 19.3718 8.89037 20 8.88889C20.6281 8.88741 21.1563 9.10074 21.5844 9.52889C22.0126 9.95704 22.2252 10.4844 22.2222 11.1111V19.1111Z"
      fill="white"/>
  </svg>
</div>

    <!-- Form Input -->
<div class="space-y-3 mb-4">
  <div>
    <label class="text-sm text-white">Email</label>
    <input
      type="email"
      class="w-full mt-1 px-3 py-2 rounded bg-white text-gray-800 focus:outline-none"
    />
  </div>
  <div>
    <label class="text-sm text-white">Kota</label>
    <input
      type="text"
      class="w-full mt-1 px-3 py-2 rounded bg-white focus:outline-none text-gray-800"
    />
  </div>
  <div>
  </div>
</div>
    <div class="flex justify-between">
  <!-- Tombol Setting -->
<a
  href="{{ route('pengaturan') }}"
  class="flex items-center space-x-1 bg-white px-4 py-2 rounded-full text-green-500 font-medium transform transition active:scale-90 active:bg-green-500 active:text-white"
>
  <i class="bi bi-gear-fill"></i>
  <span>Setting</span>
</a>

  <!-- Tombol Login -->
  <button
    class="flex items-center space-x-1 bg-white px-4 py-2 rounded-full text-green-500 font-medium transform transition active:scale-90 active:bg-green-500 active:text-white"
  >
    <i class="bi bi-box-arrow-in-right"></i>
    <span>Login</span>
  </button>
</div>
  </div>
</div>
  </header>

  <!-- Konten -->
  <main>
    @yield('content')
  </main>
<footer class="w-full text-white py-8" style="background-color: #35CD81;">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
    
    <!-- Logo & Deskripsi -->
    <div>
      <div class="flex items-center space-x-2 mb-2">
        <div class="bg-white text-green-600 font-bold w-8 h-8 rounded-full flex items-center justify-center">L</div>
        <span class="text-xl font-bold">Gofoot</span>
      </div>
      <p class="text-sm text-white">Solusi pemesanan makanan, transportasi, dan guide umroh untuk WNI di Arab Saudi.</p>
      <hr class="border-white border-opacity-30 my-4">
      <p class="text-sm text-white text-opacity-70">© 2025 Gofood.com — All rights reserved</p>
      <div class="text-xs text-white text-opacity-70 space-x-2 mt-1">
        <a href="#" class="hover:underline">Kebijakan Privasi</a> |
        <a href="#" class="hover:underline">Syarat & Ketentuan</a>
      </div>
    </div>

    <!-- Layanan -->
    <div>
      <h4 class="text-lg font-semibold mb-2">Layanan</h4>
      <ul class="text-sm space-y-1">
        <li><a href="#" class="hover:underline">Makanan Khas Indonesia</a></li>
        <li><a href="#" class="hover:underline">Sewa Mobil + Sopir</a></li>
        <li><a href="#" class="hover:underline">Guide Umroh Berbahasa Indonesia</a></li>
        <li><a href="#" class="hover:underline">Promo & Paket Spesial</a></li>
      </ul>
    </div>

    <!-- Kontak -->
    <div>
      <h4 class="text-lg font-semibold mb-2">Kontak</h4>
      <ul class="text-sm space-y-1">
        <li><a href="mailto:support@gofoot.id" class="hover:underline">Support@gofoot.id</a></li>
        <li>WhatsApp Admin</li>
        <li>Riyadh, Arab Saudi</li>
      </ul>
      <div class="flex space-x-3 mt-4">
        <!-- Ganti dengan ikon aslinya jika ingin -->
        <a href="#" class="text-white hover:text-green-900"><i class="bi bi-facebook text-xl"></i></a>
        <a href="#" class="text-white hover:text-green-900"><i class="bi bi-twitter text-xl"></i></a>
        <a href="#" class="text-white hover:text-green-900"><i class="bi bi-linkedin text-xl"></i></a>
        <a href="#" class="text-white hover:text-green-900"><i class="bi bi-instagram text-xl"></i></a>
      </div>
    </div>

  </div>
</footer>
</body>
</html>
