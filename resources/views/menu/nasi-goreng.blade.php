@extends('layouts.app')

@section('title', 'Nasi Goreng - Gofood')

@section('content')

<!-- PEMBUNGKUS UTAMA PUTIH -->
<div class="max-w-6xl mx-auto p-4 md:p-6 bg-white rounded-lg shadow">
  <div class="grid grid-cols-1 gap-6 md:grid-cols-3 md:gap-8">

    <!-- SIDEBAR KIRI: Detail Makanan -->
    <aside class="space-y-6 md:col-span-1">

      <!-- Breadcrumb -->
      <nav class="text-sm mb-4" aria-label="Breadcrumb">
        <ol class="list-reset flex flex-wrap text-gray-600">
          <li>
            <a href="{{ route('Customer') }}" class="hover:text-green-600 transition font-medium">Beranda</a>
          </li>
          <li><span class="mx-2">›</span></li>
          <li class="text-gray-500">Makanan</li>
          <li><span class="mx-2">›</span></li>
          <li class="text-gray-700 font-semibold">Nasi Goreng</li>
        </ol>
      </nav>

      <!-- Gambar Utama -->
      <img src="{{ asset('images/makanan 1.jpg') }}" alt="Nasi Goreng" class="rounded-xl w-full h-64 object-cover mb-4">

      <!-- Thumbnails -->
      <div class="flex space-x-2 overflow-x-auto pb-2">
        @for ($i = 0; $i < 3; $i++)
          <img src="{{ asset('images/makanan 1.jpg') }}" class="w-16 h-16 object-cover rounded border flex-shrink-0">
        @endfor
      </div>

      <!-- Form Order -->
<div class="bg-green-50 p-4 rounded-lg border space-y-4">
  <h3 class="text-lg font-bold">Menu, Jumlah, dan Catatan</h3>

  <!-- Menu, Jumlah, dan Catatan -->
  <div class="flex items-start space-x-4">
    <!-- Gambar -->
    <img src="{{ asset('images/makanan 1.jpg') }}" class="w-20 h-20 object-cover rounded border" alt="Nasi Goreng Original">

    <!-- Info & Catatan -->
    <div class="flex-1 space-y-2">
      <p class="font-semibold">Sate Kambing</p>

      <div class="flex items-center space-x-2">
        <span class="text-base font-semibold">Jumlah</span>
        <button class="bg-gray-200 px-3 py-2 rounded text-lg font-bold hover:bg-gray-300">-</button>
        <span class="text-base">1</span>
        <button class="bg-gray-200 px-3 py-2 rounded text-lg font-bold hover:bg-gray-300">+</button>
        <span class="text-xs text-gray-500 ml-2">Sisa 10</span>
      </div>

      <!-- Catatan -->
      <div>
        <p class="font-semibold mb-1">Catatan:</p>
        <textarea class="w-full border rounded p-2 text-sm" rows="2" placeholder="Tambahkan catatan..."></textarea>
      </div>
    </div>
  </div>

        <div class="grid grid-cols-1 gap-2 sm:flex sm:space-x-2">
          <a href="{{ route('pembayaran') }}">
          <button class="bg-white text-green-500 font-bold px-4 py-2 rounded-md border border-green-500 w-full hover:bg-green-500 hover:text-white">
              Pesan Sekarang
          </button>
         </a>
          <button class="flex items-center gap-2 bg-white text-green-500 text-base font-semibold px-4 py-2 rounded-md border border-green-500 hover:bg-green-500 hover:text-white transition duration-300">
      <!-- Ikon Keranjang -->
      <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
        <path d="M38.5277 19.5L38.8138 17.84C39.0005 16.754 39.0938 16.212 38.7944 15.856C38.4959 15.5 37.9461 15.5 36.8477 15.5H21.6394C20.5409 15.5 19.9912 15.5 19.6927 15.856C19.3932 16.212 19.4876 16.754 19.6732 17.84L20.9081 25.02C21.3174 27.4 21.5215 28.589 22.3574 29.295C23.1922 30 24.3963 30 26.8046 30H29.2435M31.2948 26H39.5M35.3974 30V22M34.8846 15.5C34.8846 14.0413 34.2903 12.6424 33.2324 11.6109C32.1745 10.5795 30.7396 10 29.2435 10C27.7474 10 26.3126 10.5795 25.2547 11.6109C24.1968 12.6424 23.6025 14.0413 23.6025 15.5"
          stroke="#35CD81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <span>Beli Sekarang</span>
    </button>
    <div x-data="{ loved: false }">
  <button
    @click="loved = !loved"
    class="bg-white px-4 py-5 rounded-md border border-green-500 hover:bg-green-100 transition"
  >
    <!-- Jika loved true, tampilkan SVG love hijau -->
    <template x-if="loved">
      <svg width="24" height="24" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M10.3318 2C5.73029 2 2 5.73031 2 10.3318C2 18.6637 11.8467 26.238 17.1488 28C22.4509 26.238 32.2976 18.6637 32.2976 10.3318C32.2976 5.73031 28.5672 2 23.9657 2C21.1478 2 18.6566 3.39891 17.1488 5.54012C15.6409 3.39891 13.1497 2 10.3318 2Z"
          fill="#35CD81"
          stroke="#35CD81"
          stroke-width="3"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </template>

    <!-- Jika loved false, tampilkan love putih dengan garis hijau -->
    <template x-if="!loved">
      <svg width="24" height="24" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M10.3318 2C5.73029 2 2 5.73031 2 10.3318C2 18.6637 11.8467 26.238 17.1488 28C22.4509 26.238 32.2976 18.6637 32.2976 10.3318C32.2976 5.73031 28.5672 2 23.9657 2C21.1478 2 18.6566 3.39891 17.1488 5.54012C15.6409 3.39891 13.1497 2 10.3318 2Z"
          fill="#FAFAFA"
          stroke="#35CD81"
          stroke-width="3"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </template>
  </button>
</div>
        </div>

      <!-- Deskripsi -->
      <div class="p-6 bg-green-100 rounded-xl shadow space-y-2">
        <h3 class="text-lg font-bold">Deskripsi:</h3>
        <p class="text-sm text-gray-700">
          Nasi goreng khas rumahan dengan cita rasa autentik Indonesia yang menggugah selera. Dibuat dari bahan pilihan, menggunakan bumbu rempah asli yang digoreng sempurna hingga harum dan menggoda. Tersedia dalam beberapa varian menu sesuai selera:
        </p>
        <ul class="list-none text-sm mt-2 ml-2 space-y-2">
          <li class="flex items-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 8h16M4 8a4 4 0 004-4h8a4 4 0 004 4M4 8v6a4 4 0 004 4h8a4 4 0 004-4V8" />
            </svg>
            <div><strong>Original:</strong> Nasi goreng sederhana, gurih, dan nikmat</div>
          </li>
          <li class="flex items-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 mt-1" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.25 2.75a.75.75 0 0 0-1.5 0V4h-7.5V2.75a.75.75 0 0 0-1.5 0V4H4.75A2.75 2.75 0 0 0 2 6.75v12.5A2.75 2.75 0 0 0 4.75 22h14.5A2.75 2.75 0 0 0 22 19.25V6.75A2.75 2.75 0 0 0 19.25 4H17.25V2.75Zm0 3.25H6.75V6h10.5V6Z"/>
            </svg>
            <div><strong>Sosis:</strong> Dilengkapi potongan sosis ayam juicy</div>
          </li>
          <li class="flex items-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 2v20m0-9a3 3 0 100-6 3 3 0 000 6zm0 0a3 3 0 110 6 3 3 0 010-6z" />
            </svg>
            <div><strong>Bakso:</strong> Dibalut dengan irisan bakso lokal spesial</div>
          </li>
          <li class="flex items-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 22c4.418 0 8-3.582 8-8 0-4.418-3.582-12-8-12S4 9.582 4 14c0 4.418 3.582 8 8 8z" />
            </svg>
            <div><strong>Spesial:</strong> Komplit dengan telur, sosis, dan bakso</div>
          </li>
        </ul>
        <p class="text-sm text-gray-700 mt-2">
          Cocok dinikmati kapan saja, terutama saat lapar menyerang di tengah malam! Tersedia khusus untuk wilayah Mekah dan Madinah, siap antar langsung ke penginapan Anda.
        </p>
      </div>

    </aside>

     <!-- SIDEBAR KANAN: Penilaian & Ulasan -->
    <div class="md:col-span-2 space-y-6">

      <!-- Info Judul dan Rating -->
      <div class="space-y-2">
        <h2 class="text-2xl font-bold mt-8">
          Nasi Goreng, Ampun pakde gurih-gurih manta banget
        </h2>
        <div class="text-gray-500 flex items-center gap-2">
          <i class="fas fa-map-marker-alt text-sm"></i> Mekah • 1,5 km (20 Ulasan)
        </div>
        <div class="flex items-center gap-2">
          <div class="text-yellow-400 text-xl">★★★★☆</div>
          <span class="text-gray-600">(4/5)</span>
        </div>
        <div class="text-green-600 font-bold text-lg">Rp 20.000</div>
      </div>

      <!-- menu makanan -->
      <div class="flex space-x-2 overflow-x-auto max-w-full py-2 custom-scrollbar">
  <!-- Original -->
  <div class="flex-shrink-0 bg-white border rounded-xl p-2 flex gap-3 items-center shadow hover:border-green-500 transition cursor-pointer min-w-[180px]">
    <img src="{{ asset('images/makanan 1.jpg') }}" class="w-16 h-16 object-cover rounded" alt="Nasi Goreng Original">
    <p class="text-sm font-semibold">Nasi Goreng Original</p>
  </div>

  <!-- Sosis -->
  <div class="flex-shrink-0 bg-white border rounded-xl p-2 flex gap-3 items-center shadow hover:border-green-500 transition cursor-pointer min-w-[180px]">
    <img src="{{ asset('images/sosis.jpg') }}" class="w-16 h-16 object-cover rounded" alt="Nasi Goreng Sosis">
    <p class="text-sm font-semibold">Nasi Goreng Sosis</p>
  </div>

  <!-- Bakso -->
  <div class="flex-shrink-0 bg-white border rounded-xl p-2 flex gap-3 items-center shadow hover:border-green-500 transition cursor-pointer min-w-[180px]">
    <img src="{{ asset('images/bakso.jpg') }}" class="w-16 h-16 object-cover rounded" alt="Nasi Goreng Bakso">
    <p class="text-sm font-semibold">Nasi Goreng Bakso</p>
  </div>

  <!-- Spesial -->
  <div class="flex-shrink-0 bg-white border rounded-xl p-2 flex gap-3 items-center shadow hover:border-green-500 transition cursor-pointer min-w-[180px]">
    <img src="{{ asset('images/spesial.jpg') }}" class="w-16 h-16 object-cover rounded" alt="Nasi Goreng Spesial">
    <p class="text-sm font-semibold">Nasi Goreng Spesial</p>
  </div>

  <!-- Tambah varian lain kalau mau -->
  <div class="flex-shrink-0 bg-white border rounded-xl p-2 flex gap-3 items-center shadow hover:border-green-500 transition cursor-pointer min-w-[180px]">
    <img src="{{ asset('images/ayam.jpg') }}" class="w-16 h-16 object-cover rounded" alt="Nasi Goreng Pedas">
    <p class="text-sm font-semibold">Nasi Goreng Pedas</p>
  </div>
</div>

      <!-- Penilaian dan Ulasan -->
      <div class="relative top-14 bg-white p-4 rounded-lg shadow border border-gray-200 flex flex-col gap-4">
        <h3 class="text-lg font-bold mb-4">Penilaian</h3>

        <div class="flex flex-wrap items-center gap-4">
          <!-- Skor Rating -->
          <div class="flex items-center border border-green-400 rounded-lg px-4 py-2">
            <span class="text-green-500 text-2xl mr-2">★</span>
            <div class="flex flex-col leading-tight">
              <span class="text-green-600 text-xl font-bold">4.0<span class="text-gray-400 text-sm">/5.0</span></span>
              <span class="text-gray-400 text-xs">20+ rating</span>
            </div>
          </div>

          <!-- Filter Tombol -->
          <div class="flex flex-wrap gap-2">
            <button class="border border-green-400 text-green-600 text-sm font-semibold px-4 py-1.5 rounded-full hover:bg-green-50 transition">Semua</button>
            <button class="border border-green-400 text-green-600 text-sm font-semibold px-4 py-1.5 rounded-full hover:bg-green-50 transition">Foto/Video</button>
          </div>

          <!-- Rating Bintang -->
          <div class="flex gap-2">
            @foreach([5,4,3,2,1] as $star)
              <button class="border border-green-400 text-green-600 text-sm px-3 py-1 rounded-full flex items-center gap-1 hover:bg-green-50 transition">
                ★ {{ $star }}
              </button>
            @endforeach
          </div>
        </div>

        <div class="border-t my-4"></div>

        <!-- Scrollable Ulasan -->
        <div 
          x-data="{
            ulasan: [
              { avatar: '/images/manto.png', nama: 'Andika P.', lokasi: 'Mekah', waktu: '2 hari lalu', rating: 4, isi: 'Rasanya mantap, bumbunya kerasa banget!' },
              { avatar: '/images/manto.png', nama: 'Andika P.', lokasi: 'Mekah', waktu: '2 hari lalu', rating: 5, isi: 'Enak parah! Bakal order lagi.' },
              { avatar: '/images/manto.png', nama: 'Andika P.', lokasi: 'Mekah', waktu: '2 hari lalu', rating: 3, isi: 'Lumayan, tapi agak kurang pedas.' },
              { avatar: '/images/manto.png', nama: 'Andika P.', lokasi: 'Mekah', waktu: '2 hari lalu', rating: 5, isi: 'Pelayanannya ramah banget.' },
              { avatar: '/images/manto.png', nama: 'Andika P.', lokasi: 'Mekah', waktu: '2 hari lalu', rating: 4, isi: 'Worth it sama harganya.' },
              { avatar: '/images/manto.png', nama: 'Andika P.', lokasi: 'Mekah', waktu: '2 hari lalu', rating: 2, isi: 'Kurang sesuai ekspektasi.' },
            ]
          }"
          class="relative"
        >
          <div class="overflow-y-auto max-h-[500px] pr-2 space-y-4 custom-scrollbar">
            <template x-for="(review, index) in ulasan" :key="index">
              <div class="border rounded-xl p-4 flex justify-between items-start" style="border-color: #35CD81;">
                <div class="flex gap-3">
                  <img :src="review.avatar" alt="user" class="w-12 h-12 rounded-full object-cover">
                  <div>
                    <p class="text-sm font-bold" x-text="review.nama"></p>
                    <p class="text-xs text-gray-400" x-text="review.lokasi + ' • ' + review.waktu"></p>
                    <div class="text-yellow-400 mt-1 text-sm">
                      <template x-for="i in review.rating">
                        <span>★</span>
                      </template>
                      <template x-for="i in 5 - review.rating">
                        <span class="text-gray-300">★</span>
                      </template>
                    </div>
                    <p class="text-sm text-gray-700 mt-1" x-text="review.isi"></p>
                  </div>
                </div>
                <div class="text-xl flex-shrink-0 text-green-400">
                  <svg width="20" height="19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 5V8M10 11V11.01M16 1C16.8 1 17.6 1.3 18.1 1.9C18.7 2.4 19 3.2 19 4V12C19 12.8 18.7 13.6 18.1 14.1C17.6 14.7 16.8 15 16 15H11L6 18V15H4C3.2 15 2.4 14.7 1.9 14.1C1.3 13.6 1 12.8 1 12V4C1 3.2 1.3 2.4 1.9 1.9C2.4 1.3 3.2 1 4 1H16Z" stroke="#35CD81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
            </template>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<!-- SECTION MENU LAINNYA -->
<section class="py-8 px-4 bg-green-300 rounded-2xl shadow-md mb-12">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-2xl font-bold text-white mb-6">Menu lainnya</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      
<!-- Card 1 -->
<div class="bg-white rounded-2xl p-4 shadow">
  <!-- Gambar dengan ikon lokasi di pojok kanan bawah -->
  <div class="relative">
    <img src="{{ asset('images/makanan 1.jpg') }}"
         alt="Nasi Goreng"
         class="rounded-xl mb-3 w-full h-40 object-cover">

    <!-- Lokasi di pojok kanan bawah gambar -->
    <div class="absolute right-2 bottom-2 flex items-center gap-1 bg-white/80 backdrop-blur-md px-2 py-1 rounded-full shadow">
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
  </div>

  <!-- Konten -->
  <h3 class="font-bold text-center">Nasi Goreng</h3>
  <p class="text-center text-green-600 font-semibold">Rp 20.000</p>
  <p class="text-center text-sm text-gray-500 mb-3">⭐ 4.7 | Terjual 80</p>

  <!-- Tombol -->
  <div class="flex justify-between gap-2">
    <button class="bg-[#35CD81] text-white font-bold px-4 py-2 rounded-md hover:bg-[#2BB66F] transition w-full mr-2 active:bg-white active:text-[#35CD81]"
>
      Pesan Sekarang
    </button>
    <button  class="bg-[#35CD81] text-white text-xl p-1 rounded shadow-md transition duration-200 hover:bg-[#2BB66F] active:bg-white active:text-[#35CD81] active:scale-95"
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


 <!-- Card 2 -->
<div class="bg-white rounded-2xl p-4 shadow">
  <!-- Gambar dengan ikon lokasi di pojok kanan bawah -->
  <div class="relative">
    <img src="{{ asset('images/makanan 2.jpg') }}"
         alt="Nasi Goreng"
         class="rounded-xl mb-3 w-full h-40 object-cover">

    <!-- Lokasi di pojok kanan bawah gambar -->
    <div class="absolute right-2 bottom-2 flex items-center gap-1 bg-white/80 backdrop-blur-md px-2 py-1 rounded-full shadow">
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
  </div>

  <!-- Konten -->
  <h3 class="font-bold text-center">Sate Madura</h3>
  <p class="text-center text-green-600 font-semibold">Rp 20.000</p>
  <p class="text-center text-sm text-gray-500 mb-3">⭐ 4.7 | Terjual 80</p>

  <!-- Tombol -->
  <div class="flex justify-between gap-2">
    <button class="bg-[#35CD81] text-white font-bold px-4 py-2 rounded-md hover:bg-[#2BB66F] transition w-full mr-2 active:bg-white active:text-[#35CD81]"
>
      Pesan Sekarang
    </button>
    <button  class="bg-[#35CD81] text-white text-xl p-1 rounded shadow-md transition duration-200 hover:bg-[#2BB66F] active:bg-white active:text-[#35CD81] active:scale-95"
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

      <!-- Card 3 -->
<div class="bg-white rounded-2xl p-4 shadow">
  <!-- Gambar dengan ikon lokasi di pojok kanan bawah -->
  <div class="relative">
    <img src="{{ asset('images/makanan 3.jpg') }}"
         alt="Nasi Goreng"
         class="rounded-xl mb-3 w-full h-40 object-cover">

    <!-- Lokasi di pojok kanan bawah gambar -->
    <div class="absolute right-2 bottom-2 flex items-center gap-1 bg-white/80 backdrop-blur-md px-2 py-1 rounded-full shadow">
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
  </div>

  <!-- Konten -->
  <h3 class="font-bold text-center">Nasi Uduk Jawa</h3>
  <p class="text-center text-green-600 font-semibold">Rp 20.000</p>
  <p class="text-center text-sm text-gray-500 mb-3">⭐ 4.7 | Terjual 80</p>

  <!-- Tombol -->
  <div class="flex justify-between gap-2">
    <button class="bg-[#35CD81] text-white font-bold px-4 py-2 rounded-md hover:bg-[#2BB66F] transition w-full mr-2 active:bg-white active:text-[#35CD81]"
>
      Pesan Sekarang
    </button>
    <button  class="bg-[#35CD81] text-white text-xl p-1 rounded shadow-md transition duration-200 hover:bg-[#2BB66F] active:bg-white active:text-[#35CD81] active:scale-95"
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

      <!-- Card 4 -->
<div class="bg-white rounded-2xl p-4 shadow">
  <!-- Gambar dengan ikon lokasi di pojok kanan bawah -->
  <div class="relative">
    <img src="{{ asset('images/makanan 4.jpg') }}"
         alt="Nasi Goreng"
         class="rounded-xl mb-3 w-full h-40 object-cover">

    <!-- Lokasi di pojok kanan bawah gambar -->
    <div class="absolute right-2 bottom-2 flex items-center gap-1 bg-white/80 backdrop-blur-md px-2 py-1 rounded-full shadow">
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
  </div>

  <!-- Konten -->
  <h3 class="font-bold text-center">Sayur Kangkung</h3>
  <p class="text-center text-green-600 font-semibold">Rp 20.000</p>
  <p class="text-center text-sm text-gray-500 mb-3">⭐ 4.7 | Terjual 80</p>

  <!-- Tombol -->
  <div class="flex justify-between gap-2">
    <button class="bg-[#35CD81] text-white font-bold px-4 py-2 rounded-md hover:bg-[#2BB66F] transition w-full mr-2 active:bg-white active:text-[#35CD81]"
>
      Pesan Sekarang
    </button>
    <button  class="bg-[#35CD81] text-white text-xl p-1 rounded shadow-md transition duration-200 hover:bg-[#2BB66F] active:bg-white active:text-[#35CD81] active:scale-95"
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
</section>
@endsection
