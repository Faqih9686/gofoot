@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')
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
  <div class="mb-4 relative">
    <a href="{{ route('menu.show', ['slug' => 'nasi-goreng']) }}">
      <img
        src="{{ asset('images/makanan 1.jpg') }}"
        alt="Nasi Goreng"
        class="rounded-xl w-full h-40 object-cover hover:opacity-80 transition"
      />
       <!-- Lokasi persis sejajar ikon dan teks -->
      <div
        class="absolute right-2 bottom-2 flex items-center gap-1 bg-white/80 backdrop-blur-md px-2 py-1 rounded-full shadow"
      >
        <svg
          width="16"
          height="18"
          viewBox="0 0 16 18"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M8 0C10.1217 0 12.1566 0.842857 13.6569 2.34315C15.1571 3.84345 16 5.87829 16 8.00003C16 10.7325 14.5102 12.9689 12.9404 14.5734C12.1562 15.3663 11.3004 16.0852 10.384 16.7209L10.0053 16.9787L9.82756 17.0969L9.49244 17.3103L9.19378 17.4925L8.824 17.7076C8.57301 17.8509 8.289 17.9262 8 17.9262C7.711 17.9262 7.42699 17.8509 7.176 17.7076L6.80622 17.4925L6.344 17.2081L6.17333 17.0969L5.80889 16.8543C4.82029 16.1854 3.89947 15.4215 3.05956 14.5734C1.48978 12.968 0 10.7325 0 8.00003C0 5.87829 0.842855 3.84345 2.34315 2.34315C3.84344 0.842857 5.87827 0 8 0ZM8 5.33335C7.64981 5.33335 7.30305 5.40233 6.97951 5.53634C6.65598 5.67035 6.362 5.86678 6.11438 6.1144C5.86676 6.36203 5.67033 6.656 5.53632 6.97953C5.40231 7.30307 5.33333 7.64983 5.33333 8.00003C5.33333 8.35022 5.40231 8.69698 5.53632 9.02052C5.67033 9.34406 5.86676 9.63803 6.11438 9.88565C6.362 10.1333 6.65598 10.3297 6.97951 10.4637C7.30305 10.5977 7.64981 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3858 9.88562 9.88565C10.3857 9.38555 10.6667 8.70727 10.6667 8.00003C10.6667 7.29278 10.3857 6.6145 9.88562 6.1144C9.38552 5.6143 8.70724 5.33335 8 5.33335Z"
            fill="#35CD81"
          />
        </svg>
        <span class="text-xs text-green-500 whitespace-nowrap">Madinah</span>
      </div>
    </a>
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
      <button
        class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2 active:bg-white active:text-green-500"
      >
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

    <!-- Card 2 -->
<div class="bg-white rounded-2xl shadow-md p-4">
  <div class="mb-4 relative">
    <img
      src="images/makanan 2.jpg"
      alt="Sate Madura"
      class="rounded-xl w-full h-40 object-cover"
    />
    <!-- Ikon lokasi -->
    <div
      class="absolute right-2 bottom-2 flex items-center gap-1 bg-white/80 backdrop-blur-md px-2 py-1 rounded-full shadow"
    >
      <svg
        width="16"
        height="18"
        viewBox="0 0 16 18"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M8 0C10.1217 0 12.1566 0.842857 13.6569 2.34315C15.1571 3.84345 16 5.87829 16 8.00003C16 10.7325 14.5102 12.9689 12.9404 14.5734C12.1562 15.3663 11.3004 16.0852 10.384 16.7209L10.0053 16.9787L9.82756 17.0969L9.49244 17.3103L9.19378 17.4925L8.824 17.7076C8.57301 17.8509 8.289 17.9262 8 17.9262C7.711 17.9262 7.42699 17.8509 7.176 17.7076L6.80622 17.4925L6.344 17.2081L6.17333 17.0969L5.80889 16.8543C4.82029 16.1854 3.89947 15.4215 3.05956 14.5734C1.48978 12.968 0 10.7325 0 8.00003C0 5.87829 0.842855 3.84345 2.34315 2.34315C3.84344 0.842857 5.87827 0 8 0ZM8 5.33335C7.64981 5.33335 7.30305 5.40233 6.97951 5.53634C6.65598 5.67035 6.362 5.86678 6.11438 6.1144C5.86676 6.36203 5.67033 6.656 5.53632 6.97953C5.40231 7.30307 5.33333 7.64983 5.33333 8.00003C5.33333 8.35022 5.40231 8.69698 5.53632 9.02052C5.67033 9.34406 5.86676 9.63803 6.11438 9.88565C6.362 10.1333 6.65598 10.3297 6.97951 10.4637C7.30305 10.5977 7.64981 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3858 9.88562 9.88565C10.3857 9.38555 10.6667 8.70727 10.6667 8.00003C10.6667 7.29278 10.3857 6.6145 9.88562 6.1144C9.38552 5.6143 8.70724 5.33335 8 5.33335Z"
          fill="#35CD81"
        />
      </svg>
      <span class="text-xs text-gray-700 whitespace-nowrap">Madinah</span>
    </div>
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
      <button
        class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2 active:bg-white active:text-green-500"
      >
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
  <div class="mb-4 relative">
    <img
      src="images/makanan 3.jpg"
      alt="Nasi Uduk Jawa"
      class="rounded-xl w-full h-40 object-cover"
    />
    <!-- Ikon lokasi -->
    <div
      class="absolute right-2 bottom-2 flex items-center gap-1 bg-white/80 backdrop-blur-md px-2 py-1 rounded-full shadow"
    >
      <svg
        width="16"
        height="18"
        viewBox="0 0 16 18"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M8 0C10.1217 0 12.1566 0.842857 13.6569 2.34315C15.1571 3.84345 16 5.87829 16 8.00003C16 10.7325 14.5102 12.9689 12.9404 14.5734C12.1562 15.3663 11.3004 16.0852 10.384 16.7209L10.0053 16.9787L9.82756 17.0969L9.49244 17.3103L9.19378 17.4925L8.824 17.7076C8.57301 17.8509 8.289 17.9262 8 17.9262C7.711 17.9262 7.42699 17.8509 7.176 17.7076L6.80622 17.4925L6.344 17.2081L6.17333 17.0969L5.80889 16.8543C4.82029 16.1854 3.89947 15.4215 3.05956 14.5734C1.48978 12.968 0 10.7325 0 8.00003C0 5.87829 0.842855 3.84345 2.34315 2.34315C3.84344 0.842857 5.87827 0 8 0ZM8 5.33335C7.64981 5.33335 7.30305 5.40233 6.97951 5.53634C6.65598 5.67035 6.362 5.86678 6.11438 6.1144C5.86676 6.36203 5.67033 6.656 5.53632 6.97953C5.40231 7.30307 5.33333 7.64983 5.33333 8.00003C5.33333 8.35022 5.40231 8.69698 5.53632 9.02052C5.67033 9.34406 5.86676 9.63803 6.11438 9.88565C6.362 10.1333 6.65598 10.3297 6.97951 10.4637C7.30305 10.5977 7.64981 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3858 9.88562 9.88565C10.3857 9.38555 10.6667 8.70727 10.6667 8.00003C10.6667 7.29278 10.3857 6.6145 9.88562 6.1144C9.38552 5.6143 8.70724 5.33335 8 5.33335Z"
          fill="#35CD81"
        />
      </svg>
      <span class="text-xs text-gray-700 whitespace-nowrap">Jeddah</span>
    </div>
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
      <button
        class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2 active:bg-white active:text-green-500"
      >
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
  <div class="mb-4 relative">
    <img
      src="images/makanan 4.jpg"
      alt="Sayur Kangkung"
      class="rounded-xl w-full h-40 object-cover"
    />
    <!-- Ikon lokasi -->
    <div
      class="absolute right-2 bottom-2 flex items-center gap-1 bg-white/80 backdrop-blur-md px-2 py-1 rounded-full shadow"
    >
      <svg
        width="16"
        height="18"
        viewBox="0 0 16 18"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M8 0C10.1217 0 12.1566 0.842857 13.6569 2.34315C15.1571 3.84345 16 5.87829 16 8.00003C16 10.7325 14.5102 12.9689 12.9404 14.5734C12.1562 15.3663 11.3004 16.0852 10.384 16.7209L10.0053 16.9787L9.82756 17.0969L9.49244 17.3103L9.19378 17.4925L8.824 17.7076C8.57301 17.8509 8.289 17.9262 8 17.9262C7.711 17.9262 7.42699 17.8509 7.176 17.7076L6.80622 17.4925L6.344 17.2081L6.17333 17.0969L5.80889 16.8543C4.82029 16.1854 3.89947 15.4215 3.05956 14.5734C1.48978 12.968 0 10.7325 0 8.00003C0 5.87829 0.842855 3.84345 2.34315 2.34315C3.84344 0.842857 5.87827 0 8 0ZM8 5.33335C7.64981 5.33335 7.30305 5.40233 6.97951 5.53634C6.65598 5.67035 6.362 5.86678 6.11438 6.1144C5.86676 6.36203 5.67033 6.656 5.53632 6.97953C5.40231 7.30307 5.33333 7.64983 5.33333 8.00003C5.33333 8.35022 5.40231 8.69698 5.53632 9.02052C5.67033 9.34406 5.86676 9.63803 6.11438 9.88565C6.362 10.1333 6.65598 10.3297 6.97951 10.4637C7.30305 10.5977 7.64981 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3858 9.88562 9.88565C10.3857 9.38555 10.6667 8.70727 10.6667 8.00003C10.6667 7.29278 10.3857 6.6145 9.88562 6.1144C9.38552 5.6143 8.70724 5.33335 8 5.33335Z"
          fill="#35CD81"
        />
      </svg>
      <span class="text-xs text-gray-700 whitespace-nowrap">Mekkah</span>
    </div>
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
      <button
        class="bg-green-400 text-white font-bold px-4 py-2 rounded-md hover:bg-green-600 transition w-full mr-2 active:bg-white active:text-green-500"
      >
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
@endsection

