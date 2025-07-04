<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gofood Mockup</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
<body class="bg-green-50 font-poppins" x-data="{ showLogin: false }">

  <!-- Navbar -->
  <header class="bg-green-300 p-4 flex items-center justify-between">
    <div class="flex items-center space-x-2">
      <div class="w-8 h-8 bg-green-400 text-white flex items-center justify-center rounded-full font-bold">L</div>
     <span class="text-xl font-semibold text-white">Gofood</span>
    </div>
<div class="relative w-[500px] mx-auto">
  <!-- Ikon di dalam input -->
  <i class="bi bi-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>

  <!-- Input -->
  <input
    type="text"
    placeholder="Cari..."
    class="w-full h-[43px] pl-10 pr-32 border border-green-400 rounded-full focus:outline-none"
  />

  <!-- Tombol yang nempel di kanan input -->
  <button
    class="absolute top-1/2 right-2 -translate-y-1/2 h-[35px] px-6 bg-green-500 text-white font-semibold rounded-full hover:bg-green-600 active:bg-white active:text-green-500 transition"
  >
    Cari
  </button>
</div>
</div>
   <div class="flex items-center space-x-4 text-white" x-data="{ 
    showLocations: false, 
    selectedLocation: 'Madinah' 
}">
  <div class="flex items-center gap-2">
  <!-- Tas -->
  <button class="p-2 bg-green-300 rounded-full">
    <svg width="23" height="23" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M29.5901 16.25L30.0051 13.76C30.2757 12.131 30.4111 11.318 29.9768 10.784C29.544 10.25 28.7469 10.25 27.1541 10.25H5.10214C3.50937 10.25 2.71224 10.25 2.27946 10.784C1.84521 11.318 1.98203 12.131 2.25121 13.76L4.04178 24.53C4.63517 28.1 4.93112 29.8835 6.14317 30.9425C7.35374 32 9.0997 32 12.5916 32H16.1281M19.1025 26H31M25.0513 32V20M24.3077 10.25C24.3077 8.06196 23.4459 5.96354 21.9119 4.41637C20.378 2.86919 18.2975 2 16.1281 2C13.9588 2 11.8783 2.86919 10.3443 4.41637C8.81039 5.96354 7.94862 8.06196 7.94862 10.25"
        stroke="white"
        stroke-width="3"
        stroke-linecap="round"
        stroke-linejoin="round"
      />
    </svg>
  </button>

  <!-- Chat -->
  <button class="p-2 bg-green-300 rounded-full">
    <svg
      width="24"
      height="24"
      viewBox="0 0 36 33"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M18.092 29.2225C19.3296 29.1379 20.5569 28.9402 21.7585 28.632C23.2426 29.0781 24.8091 29.1791 26.3382 28.9272C26.3992 28.9198 26.4605 28.9152 26.522 28.9135C27.0676 28.9135 27.7833 29.2264 28.8275 29.8854V28.8021C28.8279 28.6133 28.879 28.4282 28.9753 28.2658C29.0716 28.1035 29.2096 27.97 29.375 27.8791C29.83 27.6223 30.2504 27.3335 30.6363 27.0128C32.1577 25.7418 33.0161 24.0444 33.0161 22.2493C33.0161 21.6568 32.9222 21.0662 32.7365 20.5031C33.198 19.6544 33.5656 18.7686 33.8394 17.8456C34.7193 19.146 35.1925 20.681 35.1984 22.2493C35.1984 24.6897 34.0486 26.9659 32.056 28.63C31.7222 28.9077 31.3735 29.1632 31.0098 29.3965V31.9347C31.0098 32.8069 29.989 33.3094 29.2694 32.7893C28.5876 32.2876 27.8829 31.8177 27.1575 31.3813C26.948 31.2605 26.7312 31.1527 26.5083 31.0587C25.903 31.1483 25.2919 31.1934 24.68 31.1936C22.1965 31.1936 19.9008 30.4564 18.092 29.2225ZM4.94929 24.1481C1.81272 21.5219 0 17.9414 0 14.1048C0 6.26727 7.49335 0 16.643 0C25.7946 0 33.2899 6.26532 33.2899 14.1048C33.2899 21.9423 25.7946 28.2076 16.643 28.2076C15.6144 28.2076 14.6008 28.1294 13.6022 27.973C13.172 28.0727 11.4473 29.0837 8.96386 30.8729C8.06435 31.5221 6.78938 30.8964 6.78938 29.8033V25.4758C6.14529 25.0777 5.53097 24.6332 4.95124 24.1461ZM13.6629 25.3037C13.7385 25.3037 13.8147 25.3096 13.8916 25.3213C14.7912 25.47 15.7083 25.5449 16.643 25.5462C24.3729 25.5462 30.5581 20.374 30.5581 14.1028C30.5581 7.8336 24.3729 2.66139 16.6449 2.66139C8.91693 2.66139 2.72788 7.83751 2.72788 14.1048C2.72788 17.1358 4.17492 19.9907 6.72876 22.1281C7.37276 22.6652 8.07412 23.1475 8.83285 23.5751C9.03866 23.6893 9.21047 23.8561 9.33071 24.0585C9.45096 24.2609 9.51533 24.4915 9.51726 24.7269V27.2221C11.4825 25.9217 12.7751 25.3037 13.6629 25.3037Z"
        fill="white"
      />
      <path
        d="M9.89857 16.5002C10.482 16.5002 11.0416 16.2685 11.4541 15.8559C11.8667 15.4433 12.0985 14.8838 12.0985 14.3003C12.0985 13.7169 11.8667 13.1573 11.4541 12.7448C11.0416 12.3322 10.482 12.1004 9.89857 12.1004C9.31512 12.1004 8.75557 12.3322 8.34301 12.7448C7.93044 13.1573 7.69867 13.7169 7.69867 14.3003C7.69867 14.8838 7.93044 15.4433 8.34301 15.8559C8.75557 16.2685 9.31512 16.5002 9.89857 16.5002ZM17.0497 16.5002C17.6332 16.5002 18.1927 16.2685 18.6053 15.8559C19.0178 15.4433 19.2496 14.8838 19.2496 14.3003C19.2496 13.7169 19.0178 13.1573 18.6053 12.7448C18.1927 12.3322 17.6332 12.1004 17.0497 12.1004C16.4663 12.1004 15.9067 12.3322 15.4941 12.7448C15.0816 13.1573 14.8498 13.7169 14.8498 14.3003C14.8498 14.8838 15.0816 15.4433 15.4941 15.8559C15.9067 16.2685 16.4663 16.5002 17.0497 16.5002ZM24.1989 16.5002C24.7824 16.5002 25.3419 16.2685 25.7545 15.8559C26.167 15.4433 26.3988 14.8838 26.3988 14.3003C26.3988 13.7169 26.167 13.1573 25.7545 12.7448C25.3419 12.3322 24.7824 12.1004 24.1989 12.1004C23.6155 12.1004 23.0559 12.3322 22.6433 12.7448C22.2308 13.1573 21.999 13.7169 21.999 14.3003C21.999 14.8838 22.2308 15.4433 22.6433 15.8559C23.0559 16.2685 23.6155 16.5002 24.1989 16.5002Z"
        fill="white"
      />
    </svg>
  </button>
</div>
  <!-- Lokasi -->
  <div class="relative">
    <!-- Tombol Lokasi -->
    <button @click="showLocations = !showLocations" class="flex items-center space-x-1 focus:outline-none">
      <i class="bi bi-geo-alt-fill text-2xl"></i>
      <span x-text="selectedLocation"></span>
    </button>

    <!-- Dropdown Lokasi -->
    <div 
      x-show="showLocations" 
      @click.away="showLocations = false" 
      class="absolute mt-2 bg-white text-gray-800 rounded shadow p-2 space-y-1 z-10 w-32"
    >
      <button 
        class="block w-full text-left hover:bg-gray-100 px-2 py-1"
        @click="selectedLocation = 'Mekkah'; showLocations = false"
      >
        Mekkah
      </button>
      <button 
        class="block w-full text-left hover:bg-gray-100 px-2 py-1"
        @click="selectedLocation = 'Madinah'; showLocations = false"
      >
        Madinah
      </button>
      <button 
        class="block w-full text-left hover:bg-gray-100 px-2 py-1"
        @click="selectedLocation = 'Jeddah'; showLocations = false"
      >
        Jeddah
      </button>
    </div>
  </div>

 <button @click="showLogin = true" class="flex items-center space-x-1">
  <div class="bg-white w-8 h-8 flex items-center justify-center rounded-full">
    <i class="bi bi-person-fill text-gray-600 text-base"></i>
  </div>
   <span class="font-bold text-white">Customer1</span>
</button>
</div>
  </header>

  <!-- Container dengan background hijau -->
<section class="w-full py-20" style="background-color: #35CD81;">
  <!-- Swiper Carousel -->
  <div class="swiper mySwiper w-full max-w-4xl">
    <div class="swiper-wrapper">
      <div class="swiper-slide w-96"> <!-- Lebih lebar -->
        <div class="bg-white rounded-xl shadow p-4 flex items-center space-x-4">
          <img src="images/promo 1.png" class="h-24 w-24 object-cover rounded-lg" />
        </div>
      </div>
      <div class="swiper-slide w-96">
        <div class="bg-white rounded-xl shadow p-4 flex items-center space-x-4">
          <img src="images/promo 2.png" class="h-24 w-24 object-cover rounded-lg" />
        </div>
      </div>
      <div class="swiper-slide w-96">
        <div class="bg-white rounded-xl shadow p-4 flex items-center space-x-4">
          <img src="images/promo 3.png" class="h-24 w-24 object-cover rounded-lg" />
        </div>
      </div>
    </div>
    <!-- Pagination jika mau -->
    <div class="swiper-pagination mt-4"></div>
  </div>
</section>

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
  <button
    class="flex items-center space-x-1 bg-white px-4 py-2 rounded-full text-green-500 font-medium transform transition active:scale-90 active:bg-green-500 active:text-white"
  >
    <i class="bi bi-gear-fill"></i>
    <span>Setting</span>
  </button>

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


  <!-- Kategori Pilihan -->
<section class="px-4 mt-8 space-y-12">
  <h2 class="text-3xl font-bold text-center mb-8">Kategori Pilihan</h2>

 <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  <!-- Card 1 -->
  <div 
    x-data="{ selected: false }"
    @click="selected = !selected"
    :class="selected ? 'bg-[#00C38E] text-white' : 'bg-white text-black'"
    class="rounded-3xl shadow-lg p-6 flex flex-col items-center cursor-pointer transition-colors duration-300"
  >
    <img
      src="images/kat 1.png"
      alt="Makanan"
      class="w-48 h-48 mb-6 object-contain"
    />
    <h3 class="text-xl font-bold">Makanan</h3>
  </div>

  <!-- Card 2 -->
  <div 
    x-data="{ selected: false }"
    @click="selected = !selected"
    :class="selected ? 'bg-[#3A464F] text-white' : 'bg-white text-black'"
    class="rounded-3xl shadow-lg p-6 flex flex-col items-center cursor-pointer transition-colors duration-300"
  >
    <img
      src="images/kat 2.png"
      alt="Mobil"
      class="w-48 h-48 mb-6 object-contain"
    />
    <h3 class="text-xl font-bold">Mobil & Sopir</h3>
  </div>

  <!-- Card 3 -->
  <div 
    x-data="{ selected: false }"
    @click="selected = !selected"
    :class="selected ? 'bg-[#00C38E] text-white' : 'bg-white text-black'"
    class="rounded-3xl shadow-lg p-6 flex flex-col items-center cursor-pointer transition-colors duration-300"
  >
    <img
      src="images/kat 3.png"
      alt="Guide"
      class="w-48 h-48 mb-6 object-contain"
    />
    <h3 class="text-xl font-bold">Guide</h3>
  </div>
</div>

   <!-- Menu Filter -->
  <div class="relative -mx-4 bg-white rounded-xl shadow flex flex-wrap items-center justify-between p-4">
<!-- Kategori -->
<div class="relative" x-data="{ open: false }">
  <button @click="open = !open" class="flex items-center space-x-1 font-semibold">
    <span>Kategori</span>
    <svg xmlns="http://www.w3.org/2000/svg"
         class="h-4 w-4 transition-transform duration-200"
         :class="open ? 'rotate-180' : ''"
         viewBox="0 0 20 20"
         fill="currentColor">
      <path fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
    </svg>
  </button>
  <div x-show="open" @click.away="open = false" class="absolute mt-2 bg-white border rounded shadow w-40">
    <!-- Promo -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Promo</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200"
             :class="subOpen ? 'rotate-90' : ''" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false"
           class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Diskon A</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Diskon B</a>
      </div>
    </div>

    <!-- Buka -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Buka</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200"
             :class="subOpen ? 'rotate-90' : ''" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false"
           class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">24 Jam</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Jam Kerja</a>
      </div>
    </div>

    <!-- Favorite -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Favorite</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200"
             :class="subOpen ? 'rotate-90' : ''" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false"
           class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Tersimpan</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Paling Sering</a>
      </div>
    </div>
  </div>
</div>
    <!-- Terlaris -->
<div class="relative" x-data="{ open: false }">
  <button @click="open = !open" class="flex items-center space-x-1 font-semibold">
    <span>Terlaris</span>
    <svg xmlns="http://www.w3.org/2000/svg"
         class="h-4 w-4 transition-transform duration-200"
         :class="open ? 'rotate-180' : ''"
         viewBox="0 0 20 20"
         fill="currentColor">
      <path fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
    </svg>
  </button>
      <div x-show="open" @click.away="open = false" class="absolute mt-2 bg-white border rounded shadow w-40">
    <!-- Penilaian -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Penilaian</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200"
             :class="subOpen ? 'rotate-90' : ''" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false"
           class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Diskon A</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Diskon B</a>
      </div>
    </div>

    <!-- Terjual -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Terjual</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200"
             :class="subOpen ? 'rotate-90' : ''" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false"
           class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">24 Jam</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Jam Kerja</a>
      </div>
    </div>

    <!-- Dilihat -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Dilihat</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200"
             :class="subOpen ? 'rotate-90' : ''" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false"
           class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Tersimpan</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Paling Sering</a>
      </div>
    </div>
  </div>
</div>

    <!-- Penilaian -->
    <div class="relative" x-data="{ open: false }">
  <button @click="open = !open" class="flex items-center space-x-1 font-semibold">
    <span>Penilaian</span>
    <svg xmlns="http://www.w3.org/2000/svg"
         class="h-4 w-4 transition-transform duration-200"
         :class="open ? 'rotate-180' : ''"
         viewBox="0 0 20 20"
         fill="currentColor">
      <path fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
    </svg>
  </button>
      <div x-show="open" @click.away="open = false" class="absolute mt-2 bg-white border rounded shadow w-40 z-10">
    <!-- Bintang 5 -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Bintang 5</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-90': subOpen}" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false" class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi A</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi B</a>
      </div>
    </div>

    <!-- Bintang 4 -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Bintang 4</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-90': subOpen}" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false" class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi C</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi D</a>
      </div>
    </div>

    <!-- Bintang 3 -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Bintang 3</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-90': subOpen}" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false" class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi C</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi D</a>
      </div>
    </div>

    <!-- Bintang 2 -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Bintang 2</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-90': subOpen}" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false" class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi C</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi D</a>
      </div>
    </div>

    <!-- Bintang 1 -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex justify-between w-full px-4 py-2 hover:bg-gray-100">
        <span>Bintang 1</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-90': subOpen}" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="subOpen" @click.away="subOpen = false" class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi C</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi D</a>
      </div>
    </div>
  </div>
</div>

    <!-- Harga Dropdown with Submenus -->
<div class="relative" x-data="{ open: false }">
  <button @click="open = !open" class="flex items-center space-x-1 font-semibold -ml-8">
    <span>Harga</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
    </svg>
  </button>
  <div x-show="open" @click.away="open = false" class="absolute mt-2 bg-white border rounded shadow w-40 right-0">
    <!-- Tinggi -->
    <div x-data="{ subOpen: false }" class="relative group">
      <button @click="subOpen = !subOpen" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">
  <div class="flex items-center space-x-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:rotate-90" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
    </svg>
    <span>Tinggi</span>
  </div>
</button>
      <div x-show="subOpen" @click.away="subOpen = false" class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi A</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Opsi B</a>
      </div>
    </div>
    <!-- Sedang -->
    <div x-data="{ subOpen: false }" class="relative group">
  <button @click="subOpen = !subOpen" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">
    <div class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:rotate-90" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
      </svg>
      <span>Sedang</span>
    </div>
  </button>
  <div x-show="subOpen" @click.away="subOpen = false" class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
    <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-left">Opsi C</a>
    <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-left">Opsi D</a>
  </div>
</div>
    <!-- Kurang -->
    <div x-data="{ subOpen: false }" class="relative group">
  <button @click="subOpen = !subOpen" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">
    <div class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:rotate-90" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M7.21 5.23a.75.75 0 011.06-.02l4.24 4.24a.75.75 0 010 1.06l-4.24 4.24a.75.75 0 11-1.06-1.06L10.94 10 7.21 6.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
      </svg>
      <span>Kurang</span>
    </div>
  </button>
  <div x-show="subOpen" @click.away="subOpen = false" class="absolute left-full top-0 mt-0 ml-1 w-40 bg-white border rounded shadow">
    <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-left">Opsi E</a>
    <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-left">Opsi F</a>
  </div>
</div>
  </div>
</div>
</section>
<!-- Wrapper Hijau Full -->
<div class="w-full py-8" style="background-color: #35CD81;">

 <div class="max-w-7xl mx-auto px-4">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold text-white">Makanan</h2>
    <a href="#" class="text-white text-sm hover:underline">Lihat semua &gt;</a>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

    <!-- Card 1 -->
    <div class="bg-white rounded-2xl shadow-md p-4">
      <div class="mb-4">
        <img src="images/makanan 1.jpg" alt="Sate Madura" class="rounded-xl w-full h-40 object-cover">
      </div>
      <div class="text-center">
        <h3 class="text-lg font-bold">Nasi Goreng</h3>
        <p class="text-green-600 font-bold text-md mb-1">Rp.20.000</p>
        <div class="flex items-center justify-center text-sm text-gray-500 mb-1">
          <span class="text-yellow-400 text-base mr-1">★</span>
          <span class="font-semibold mr-1">4.6</span>
          <span class="text-gray-400">| Terjual 80</span>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2
                         active:bg-white active:text-green-500">
            Beli Sekarang
          </button>
          <button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-2xl shadow-md p-4">
      <div class="mb-4">
        <img src="images/makanan 2.jpg" alt="Nasi Kebuli" class="rounded-xl w-full h-40 object-cover">
      </div>
      <div class="text-center">
        <h3 class="text-lg font-bold">Sate Madura</h3>
        <p class="text-green-600 font-bold text-md mb-1">Rp.100.000</p>
        <div class="flex items-center justify-center text-sm text-gray-500 mb-1">
          <span class="text-yellow-400 text-base mr-1">★</span>
          <span class="font-semibold mr-1">4.6</span>
          <span class="text-gray-400">| Terjual 80</span>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2
                         active:bg-white active:text-green-500">
            Pesan Sekarang
          </button>
          <button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-2xl shadow-md p-4">
      <div class="mb-4">
        <img src="images/makanan 3.jpg" alt="Roti Arab" class="rounded-xl w-full h-40 object-cover">
      </div>
      <div class="text-center">
        <h3 class="text-lg font-bold">Nasi Uduk Jawa</h3>
        <p class="text-green-600 font-bold text-md mb-1">Rp.15.000</p>
        <div class="flex items-center justify-center text-sm text-gray-500 mb-1">
          <span class="text-yellow-400 text-base mr-1">★</span>
          <span class="font-semibold mr-1">4.6</span>
          <span class="text-gray-400">| Terjual 50</span>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2
                         active:bg-white active:text-green-500">
            Pesan Sekarang
          </button>
          <button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-2xl shadow-md p-4">
      <div class="mb-4">
        <img src="images/makanan 4.jpg" alt="Ayam Bakar" class="rounded-xl w-full h-40 object-cover">
      </div>
      <div class="text-center">
        <h3 class="text-lg font-bold">Sayur Kangkung</h3>
        <p class="text-green-600 font-bold text-md mb-1">Rp.20.000</p>
        <div class="flex items-center justify-center text-sm text-gray-500 mb-1">
          <span class="text-yellow-400 text-base mr-1">★</span>
          <span class="font-semibold mr-1">4.6</span>
          <span class="text-gray-400">| Terjual 90</span>
        </div>
        <div class="mt-4 flex justify-between items-center">
          <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2
                         active:bg-white active:text-green-500">
                          Pesan Sekarang
         </button>
          <button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
        </div>
      </div>
    </div>
    

  </div>
</div>

 <div class="max-w-7xl mx-auto px-4">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold text-white">Guide</h2>
    <a href="#" class="text-white text-sm hover:underline">Lihat semua &gt;</a>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

    <!-- Card Menu -->
    <div class="bg-white rounded-2xl shadow-md p-4">
      <div class="mb-4">
        <img src="images/Madinah.jpg" alt="Sate Madura" class="rounded-xl w-full h-40 object-cover">
      </div>
      <div class="text-center">
        <!-- Nama Makanan -->
        <h3 class="text-lg font-bold mt-3">
        Guide Umrah Madinah<br>- Kak Nur
        </h3>
        <!-- Harga -->
        <p class="text-green-600 font-bold text-md mb-1">SAR 120 / Hari</p>

        <!-- Rating dan Terjual -->
        <div class="flex items-center justify-center text-sm text-gray-500 mb-1">
          <span class="text-yellow-400 text-base mr-1">★</span>
          <span class="font-semibold mr-1">4.6</span>
          <span class="text-gray-400">| Terjual 80</span>
        </div>

        <!-- Waktu & Lokasi -->
        <p class="text-sm text-gray-400">30 min • Mekah • 15 km</p>

        <!-- Tombol -->
        <div class="mt-4 flex justify-between items-center">
          <!-- Tombol Pesan Sekarang -->
<button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2
  active:bg-white active:text-green-500">
  Pesan Sekarang
</button>
<button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
        </div>
      </div>
    </div>
    <!-- Card Menu -->
    <div class="bg-white rounded-2xl shadow-md p-4">
      <div class="mb-4">
        <img src="images/Mekkah.png" alt="Sate Madura" class="rounded-xl w-full h-40 object-cover">
      </div>
      <div class="text-center">
        <!-- Nama Makanan -->
        <h3 class="text-lg font-bold mt-3">
        Guide Umrah Makkah<br>- Ust. Abi
        </h3>
        <!-- Harga -->
        <p class="text-green-600 font-bold text-md mb-1">SAR 134 / Hari</p>

        <!-- Rating dan Terjual -->
        <div class="flex items-center justify-center text-sm text-gray-500 mb-1">
          <span class="text-yellow-400 text-base mr-1">★</span>
          <span class="font-semibold mr-1">4.6</span>
          <span class="text-gray-400">| Terjual 80</span>
        </div>

        <!-- Waktu & Lokasi -->
        <p class="text-sm text-gray-400">30 min • Mekah • 15 km</p>

        <!-- Tombol -->
        <div class="mt-4 flex justify-between items-center">
          <!-- Tombol Pesan Sekarang -->
<button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2
  active:bg-white active:text-green-500">
  Pesan Sekarang
</button>
<button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
        </div>
      </div>
    </div>
     <!-- Card Menu -->
    <div class="bg-white rounded-2xl shadow-md p-4">
      <div class="mb-4">
        <img src="images/Mekkah.png" alt="Sate Madura" class="rounded-xl w-full h-40 object-cover">
      </div>
      <div class="text-center">
        <!-- Nama Makanan -->
        <h3 class="text-lg font-bold mt-3">
        Guide Umrah Makkah<br>- Ust. Ahmad
        </h3>
        <!-- Harga -->
        <p class="text-green-600 font-bold text-md mb-1">SAR 150 / Hari</p>

        <!-- Rating dan Terjual -->
        <div class="flex items-center justify-center text-sm text-gray-500 mb-1">
          <span class="text-yellow-400 text-base mr-1">★</span>
          <span class="font-semibold mr-1">4.6</span>
          <span class="text-gray-400">| Terjual 80</span>
        </div>

        <!-- Waktu & Lokasi -->
        <p class="text-sm text-gray-400">30 min • Mekah • 15 km</p>

        <!-- Tombol -->
        <div class="mt-4 flex justify-between items-center">
          <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2
  active:bg-white active:text-green-500">
  Pesan Sekarang
</button>
<button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
        </div>
      </div>
    </div>
     <!-- Card Menu -->
    <div class="bg-white rounded-2xl shadow-md p-4">
      <div class="mb-4">
        <img src="images/Madinah.jpg" alt="Sate Madura" class="rounded-xl w-full h-40 object-cover">
      </div>
      <div class="text-center">
        <!-- Nama Makanan -->
        <h3 class="text-lg font-bold mt-3">
        Guide Umrah Madinah<br>- Kak Rina
        </h3>
        <!-- Harga -->
        <p class="text-green-600 font-bold text-md mb-1">SAR 130 / Hari</p>

        <!-- Rating dan Terjual -->
        <div class="flex items-center justify-center text-sm text-gray-500 mb-1">
          <span class="text-yellow-400 text-base mr-1">★</span>
          <span class="font-semibold mr-1">4.6</span>
          <span class="text-gray-400">| Terjual 80</span>
        </div>

        <!-- Waktu & Lokasi -->
        <p class="text-sm text-gray-400">30 min • Mekah • 15 km</p>

        <!-- Tombol -->
        <div class="mt-4 flex justify-between items-center">
         <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2
  active:bg-white active:text-green-500">
  Pesan Sekarang
</button>
<button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
        </div>
      </div>
    </div>

  </div>
</div>

  <div class="max-w-7xl mx-auto px-4">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold text-white">Mobil+sopir</h2>
    <a href="#" class="text-white text-sm hover:underline">Lihat semua &gt;</a>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

    <!-- Card Menu -->
<div class="bg-white rounded-2xl shadow-md p-4">
  <!-- Gambar dengan posisi relatif -->
  <div class="mb-4 relative">
    <img src="images/Avansa.png" alt="Toyota Avanza" class="rounded-xl w-full h-40 object-cover">
    
    <!-- Badge Rating di pojok kanan bawah -->
    <div class="absolute bottom-2 right-2 bg-white/80 text-gray-800 px-2 py-1 rounded flex items-center text-sm shadow">
      <span class="text-yellow-400 mr-1">★</span>
      <span class="font-semibold">4.6</span>
    </div>
  </div>

  <div class="text-center">
    <h3 class="text-lg font-bold">Toyota Avanza + Sopir</h3>
    <p class="text-green-600 font-bold text-md mb-1">SAR 250 / Hari</p>

    <div class="flex items-center justify-center space-x-2 text-gray-400 text-sm mt-1">
      <div class="flex items-center space-x-1">
        <i class="bi bi-person-fill"></i>
        <span class="font-medium text-gray-500">7</span>
      </div>
      <div class="h-4 w-px bg-gray-300"></div>
      <div class="flex items-center space-x-1">
        <i class="bi bi-car-front-fill"></i>
        <span>Min H-1</span>
      </div>
    </div>

    <!-- Tombol -->
    <div class="mt-4 flex justify-between items-center">
      <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2 active:bg-white active:text-green-500">
        Pesan Sekarang
      </button>
      <button
  class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
    </div>
  </div>
</div>
    <!-- Card Menu -->
<div class="bg-white rounded-2xl shadow-md p-4">
  <!-- Gambar dengan posisi relatif -->
  <div class="mb-4 relative">
    <img src="images/hyundai.jpg" alt="Toyota Avanza" class="rounded-xl w-full h-40 object-cover">
    
    <!-- Badge Rating di pojok kanan bawah -->
    <div class="absolute bottom-2 right-2 bg-white/80 text-gray-800 px-2 py-1 rounded flex items-center text-sm shadow">
      <span class="text-yellow-400 mr-1">★</span>
      <span class="font-semibold">4.6</span>
    </div>
  </div>

  <div class="text-center">
    <h3 class="text-lg font-bold">Hyundai H1 + Sopir</h3>
    <p class="text-green-600 font-bold text-md mb-1">SAR 400 / Hari</p>

    <div class="flex items-center justify-center space-x-2 text-gray-400 text-sm mt-1">
      <div class="flex items-center space-x-1">
        <i class="bi bi-person-fill"></i>
        <span class="font-medium text-gray-500">11</span>
      </div>
      <div class="h-4 w-px bg-gray-300"></div>
      <div class="flex items-center space-x-1">
      <i class="bi bi-bus-front-fill"></i>
        <span>Min H-7</span>
      </div>
    </div>

    <!-- Tombol -->
    <div class="mt-4 flex justify-between items-center">
      <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2 active:bg-white active:text-green-500">
        Pesan Sekarang
      </button>
      <button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
    </div>
  </div>
</div>
   <!-- Card Menu -->
<div class="bg-white rounded-2xl shadow-md p-4">
  <!-- Gambar dengan posisi relatif -->
  <div class="mb-4 relative">
    <img src="images/yaris.jpg" alt="Toyota Avanza" class="rounded-xl w-full h-40 object-cover">
    
    <!-- Badge Rating di pojok kanan bawah -->
    <div class="absolute bottom-2 right-2 bg-white/80 text-gray-800 px-2 py-1 rounded flex items-center text-sm shadow">
      <span class="text-yellow-400 mr-1">★</span>
      <span class="font-semibold">4.6</span>
    </div>
  </div>

  <div class="text-center">
    <h3 class="text-lg font-bold">Toyota Yaris + Sopir</h3>
    <p class="text-green-600 font-bold text-md mb-1">SAR 200 / Hari</p>

    <div class="flex items-center justify-center space-x-2 text-gray-400 text-sm mt-1">
      <div class="flex items-center space-x-1">
        <i class="bi bi-person-fill"></i>
        <span class="font-medium text-gray-500">4</span>
      </div>
      <div class="h-4 w-px bg-gray-300"></div>
      <div class="flex items-center space-x-1">
        <i class="bi bi-car-front-fill"></i>
        <span>Min H-3</span>
      </div>
    </div>

    <!-- Tombol -->
    <div class="mt-4 flex justify-between items-center">
      <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2 active:bg-white active:text-green-500">
        Pesan Sekarang
      </button>
      <button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
    </div>
  </div>
</div>
   <!-- Card Menu -->
<div class="bg-white rounded-2xl shadow-md p-4">
  <!-- Gambar dengan posisi relatif -->
  <div class="mb-4 relative">
    <img src="images/bus.png" alt="Toyota Avanza" class="rounded-xl w-full h-40 object-cover">
    
    <!-- Badge Rating di pojok kanan bawah -->
    <div class="absolute bottom-2 right-2 bg-white/80 text-gray-800 px-2 py-1 rounded flex items-center text-sm shadow">
      <span class="text-yellow-400 mr-1">★</span>
      <span class="font-semibold">4.6</span>
    </div>
  </div>

  <div class="text-center">
    <h3 class="text-lg font-bold">Mini Bus AC + Sopir</h3>
    <p class="text-green-600 font-bold text-md mb-1">SAR 600 / Hari</p>

    <div class="flex items-center justify-center space-x-2 text-gray-400 text-sm mt-1">
      <div class="flex items-center space-x-1">
        <i class="bi bi-person-fill"></i>
        <span class="font-medium text-gray-500">20</span>
      </div>
      <div class="h-4 w-px bg-gray-300"></div>
      <div class="flex items-center space-x-1">
        <i class="bi bi-bus-front-fill"></i>
        <span>Min H-1</span>
      </div>
    </div>

    <!-- Tombol -->
    <div class="mt-4 flex justify-between items-center">
      <button class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2 active:bg-white active:text-green-500">
        Pesan Sekarang
      </button>
      <button
 class="bg-green-400 text-white text-xl p-1 rounded shadow-md transition hover:bg-green-600 active:bg-white active:text-green-500 active:scale-95"
>
  <svg
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    class="text-white"
  >
    <path
      d="M21.0277 11.475L21.3138 9.732C21.5005 8.5917 21.5938 8.0226 21.2944 7.6488C20.9959 7.275 20.4461 7.275 19.3477 7.275H4.13941C3.04094 7.275 2.4912 7.275 2.19273 7.6488C1.89325 8.0226 1.9876 8.5917 2.17325 9.732L3.40812 17.271C3.81736 19.77 4.02146 21.0184 4.85736 21.7597C5.69224 22.5 6.89634 22.5 9.30456 22.5H11.7435M13.7948 18.3H22M17.8974 22.5V14.1M17.3846 7.275C17.3846 5.74337 16.7903 4.27448 15.7324 3.19146C14.6745 2.10844 13.2396 1.5 11.7435 1.5C10.2474 1.5 8.81262 2.10844 7.75472 3.19146C6.69682 4.27448 6.10249 5.74337 6.10249 7.275"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</button>
        </div>
      </div>
    </div>

  </div>
</div>

  <script>
  feather.replace();
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      reverseDirection: true, 
    },
    coverflowEffect: {
      rotate: 30,     
      stretch: 0,    
      depth: 200,     
      modifier: 1,    
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>
</body>
</html>
