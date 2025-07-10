@extends('layouts.app')

@section('title', 'Pembayaran - GoFood')

@section('content')
<div class="max-w-7xl mx-auto bg-green-50 rounded-xl shadow p-4 sm:p-6 mt-6 flex flex-col lg:flex-row gap-6">
  <!-- Bagian KIRI -->
  <div class="w-full lg:w-2/3 space-y-6">
    <!-- Breadcrumb -->
    <nav class="text-sm mb-4" aria-label="Breadcrumb">
      <ol class="list-reset flex flex-wrap text-gray-600">
        <li><a href="{{ route('Customer') }}" class="hover:text-green-600 transition font-medium">Beranda</a></li>
        <li><span class="mx-2">›</span></li>
        <li class="text-gray-500">Makanan</li>
        <li><span class="mx-2">›</span></li>
        <li class="text-gray-500 font-semibold">Nasi Goreng</li>
        <li><span class="mx-2">›</span></li>
        <li class="text-gray-700 font-semibold">Pembayaran</li>
      </ol>
    </nav>

    <!-- Detail Makanan -->
<div class="flex flex-col sm:flex-row gap-4">
  <img src="{{ asset('images/makanan 1.jpg') }}" alt="Nasi Goreng" class="w-full sm:w-32 h-32 rounded-xl object-cover">

  <div class="flex-1 space-y-1">
    <h2 class="text-lg sm:text-xl font-bold">
      Nasi Goreng, Ampun pakde gurih-gurih mantap banget
    </h2>

    <!-- Lokasi dan Rating -->
    <p class="text-sm text-gray-600 flex flex-col items-start gap-1">
      <!-- Lokasi --><!-- Lokasi dengan ikon SVG -->
<span class="inline-flex items-center gap-1 text-green-600 font-medium text-sm">
  <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M8 0C10.12 0 12.16 0.84 13.66 2.34C15.16 3.84 16 5.88 16 8C16 10.73 14.51 12.97 12.94 14.57C12.16 15.37 11.3 16.09 10.38 16.72L10 16.98L9.83 17.1L9.49 17.31L9.19 17.49L8.82 17.71C8.57 17.85 8.29 17.93 8 17.93C7.71 17.93 7.43 17.85 7.18 17.71L6.81 17.49L6.34 17.21L6.17 17.1L5.81 16.85C4.82 16.19 3.9 15.42 3.06 14.57C1.49 12.97 0 10.73 0 8C0 5.88 0.84 3.84 2.34 2.34C3.84 0.84 5.88 0 8 0ZM8 5.33C7.65 5.33 7.3 5.4 6.98 5.54C6.66 5.67 6.36 5.87 6.11 6.11C5.87 6.36 5.67 6.66 5.54 6.98C5.4 7.3 5.33 7.65 5.33 8C5.33 8.35 5.4 8.7 5.54 9.02C5.67 9.34 5.87 9.64 6.11 9.89C6.36 10.13 6.66 10.33 6.98 10.46C7.3 10.6 7.65 10.67 8 10.67C8.71 10.67 9.39 10.39 9.89 9.89C10.39 9.39 10.67 8.71 10.67 8C10.67 7.29 10.39 6.61 9.89 6.11C9.39 5.61 8.71 5.33 8 5.33Z"
      fill="#35CD81"
    />
  </svg>
  Madinah
</span>

      <!-- Rating dengan SVG dan teks -->
      <span class="flex items-center gap-2">
        <span class="w-28 h-auto inline-block">
          <!-- SVG Bintang -->
          <svg width="109" height="24" viewBox="0 0 109 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_234_2370)">
              <path d="M99.8828 8.39844L105.469 9.21875C105.938 9.29688 106.328 9.60938 106.484 10.0781C106.641 10.5078 106.523 11.0156 106.172 11.3281L102.109 15.3516L103.086 21.0547C103.164 21.5234 102.969 21.9922 102.578 22.2656C102.188 22.5781 101.68 22.5781 101.25 22.3828L96.25 19.6875L91.2109 22.3828C90.8203 22.5781 90.2734 22.5781 89.9219 22.2656C89.5312 21.9922 89.3359 21.5234 89.4141 21.0547L90.3516 15.3516L86.2891 11.3281C85.9375 11.0156 85.8203 10.5078 85.9766 10.0781C86.1328 9.60938 86.5234 9.29688 86.9922 9.21875L92.6172 8.39844L95.1172 3.20312C95.3125 2.77344 95.7422 2.5 96.25 2.5C96.7188 2.5 97.1484 2.77344 97.3438 3.20312L99.8828 8.39844Z" fill="#DBDBDB"/>
</g>
<g filter="url(#filter1_d_234_2370)">
<path d="M15.8828 8.39844L21.4688 9.21875C21.9375 9.29688 22.3281 9.60938 22.4844 10.0781C22.6406 10.5078 22.5234 11.0156 22.1719 11.3281L18.1094 15.3516L19.0859 21.0547C19.1641 21.5234 18.9688 21.9922 18.5781 22.2656C18.1875 22.5781 17.6797 22.5781 17.25 22.3828L12.25 19.6875L7.21094 22.3828C6.82031 22.5781 6.27344 22.5781 5.92188 22.2656C5.53125 21.9922 5.33594 21.5234 5.41406 21.0547L6.35156 15.3516L2.28906 11.3281C1.9375 11.0156 1.82031 10.5078 1.97656 10.0781C2.13281 9.60938 2.52344 9.29688 2.99219 9.21875L8.61719 8.39844L11.1172 3.20312C11.3125 2.77344 11.7422 2.5 12.25 2.5C12.7188 2.5 13.1484 2.77344 13.3438 3.20312L15.8828 8.39844Z" fill="#FBFF12"/>
</g>
<g filter="url(#filter2_d_234_2370)">
<path d="M71.8828 8.39844L77.4688 9.21875C77.9375 9.29688 78.3281 9.60938 78.4844 10.0781C78.6406 10.5078 78.5234 11.0156 78.1719 11.3281L74.1094 15.3516L75.0859 21.0547C75.1641 21.5234 74.9688 21.9922 74.5781 22.2656C74.1875 22.5781 73.6797 22.5781 73.25 22.3828L68.25 19.6875L63.2109 22.3828C62.8203 22.5781 62.2734 22.5781 61.9219 22.2656C61.5312 21.9922 61.3359 21.5234 61.4141 21.0547L62.3516 15.3516L58.2891 11.3281C57.9375 11.0156 57.8203 10.5078 57.9766 10.0781C58.1328 9.60938 58.5234 9.29688 58.9922 9.21875L64.6172 8.39844L67.1172 3.20312C67.3125 2.77344 67.7422 2.5 68.25 2.5C68.7188 2.5 69.1484 2.77344 69.3438 3.20312L71.8828 8.39844Z" fill="#FBFF12"/>
</g>
<g filter="url(#filter3_d_234_2370)">
<path d="M43.8828 8.39844L49.4688 9.21875C49.9375 9.29688 50.3281 9.60938 50.4844 10.0781C50.6406 10.5078 50.5234 11.0156 50.1719 11.3281L46.1094 15.3516L47.0859 21.0547C47.1641 21.5234 46.9688 21.9922 46.5781 22.2656C46.1875 22.5781 45.6797 22.5781 45.25 22.3828L40.25 19.6875L35.2109 22.3828C34.8203 22.5781 34.2734 22.5781 33.9219 22.2656C33.5312 21.9922 33.3359 21.5234 33.4141 21.0547L34.3516 15.3516L30.2891 11.3281C29.9375 11.0156 29.8203 10.5078 29.9766 10.0781C30.1328 9.60938 30.5234 9.29688 30.9922 9.21875L36.6172 8.39844L39.1172 3.20312C39.3125 2.77344 39.7422 2.5 40.25 2.5C40.7188 2.5 41.1484 2.77344 41.3438 3.20312L43.8828 8.39844Z" fill="#FBFF12"/>
</g>
<defs>
<filter id="filter0_d_234_2370" x="84.0203" y="0.7" width="24.4203" height="23.6781" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset/>
<feGaussianBlur stdDeviation="0.9"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_234_2370"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_234_2370" result="shape"/>
</filter>
<filter id="filter1_d_234_2370" x="0.0203125" y="0.7" width="24.4203" height="23.6781" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset/>
<feGaussianBlur stdDeviation="0.9"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_234_2370"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_234_2370" result="shape"/>
</filter>
<filter id="filter2_d_234_2370" x="56.0203" y="0.7" width="24.4203" height="23.6781" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset/>
<feGaussianBlur stdDeviation="0.9"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_234_2370"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_234_2370" result="shape"/>
</filter>
<filter id="filter3_d_234_2370" x="28.0203" y="0.7" width="24.4203" height="23.6781" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset/>
<feGaussianBlur stdDeviation="0.9"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_234_2370"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_234_2370" result="shape"/>
</filter>
</defs>
          </svg>
        </span>
        <span class="text-xs text-gray-500">(4/5)</span>
      </span>
    </p>

    <!-- Harga -->
    <p class="text-green-600 font-bold text-lg">Rp 20.000</p>

    <!-- Jumlah -->
    <div class="flex items-center flex-wrap gap-2 mt-2">
      <span class="text-sm">Jumlah :</span>
      <button class="border px-2 py-0.5 rounded">-</button>
      <span>1</span>
      <button class="border px-2 py-0.5 rounded">+</button>
      <span class="text-sm text-gray-500">sisa : 10</span>
    </div>

    <!-- Catatan -->
    <div class="mt-2">
      <p class="text-sm font-medium">Catatan :</p>
      <p class="text-sm text-gray-600 bg-white rounded px-3 py-1 border w-fit">
        tidak pedas, telor dipisah, sama tambahan krupuk
      </p>
    </div>
  </div>
</div>


    <!-- Rincian Pembayaran -->
    <div class="bg-white rounded-xl shadow px-4 py-4">
      <h3 class="font-semibold text-lg mb-3">Rincian Pembayaran</h3>
      <div class="border-t border-black my-2"></div>
      <div class="text-sm space-y-2">
        <div class="flex justify-between"><span>Metode Pembayaran</span><span class="font-semibold">Qris</span></div>
        <div class="flex justify-between"><span>Subtotal Harga</span><span>Rp 20.000</span></div>
        <div class="flex justify-between"><span>Voucher/Diskon</span><span>Rp -0</span></div>
        <div class="flex justify-between"><span>Total Ongkos Kirim</span><span>Rp 5.000</span></div>
        <div class="flex justify-between"><span>Voucher/Diskon Ongkos Kirim</span><span>Rp 5.000</span></div>
        <div class="flex justify-between"><span>Biaya Jasa Aplikasi</span><span>Rp 2.000</span></div>
        <div class="border-t border-black my-2"></div>
        <div class="flex justify-between font-bold mt-2 text-base"><span>Total Harga</span><span>Rp 22.000</span></div>
      </div>

      <!-- Tombol Aksi digabung -->
<div class="flex flex-col sm:flex-row gap-3 mt-4">
  <button
    class="flex-1 flex items-center justify-center gap-2 bg-[#92E3A9] text-gray-800 py-2 rounded hover:bg-[#7DC994] transition text-sm sm:text-base"
  >
    <svg
      width="15"
      height="20"
      viewBox="0 0 15 20"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M4.25041 16H10.7495M5.33359 19H9.66633M4.25041 13C4.25149 11 3.7099 10.5 2.62563 9.5C1.54137 8.5 1.02794 7.487 1.00086 6C0.949948 2.95 3.16723 1 7.49996 1C11.8338 1 14.0521 2.95 13.9991 6C13.9742 7.487 13.4575 8.5 12.3743 9.5C11.2922 10.5 10.7506 11 10.7495 13"
        stroke="black"
        stroke-width="1.5"
        stroke-linecap="round"
        stroke-linejoin="round"
      />
    </svg>
    Silahkan cek kembali Detail pesanan
  </button>

  <a href="{{ route('pembayaran.status') }}" class="flex-1">
    <button
      class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600 text-sm sm:text-base transition duration-200 active:bg-white active:text-green-500"
    >
      Pesan Sekarang
    </button>
  </a>
</div>
    </div>
  </div>

  <!-- Bagian KANAN -->
<div class="w-full lg:w-1/3 space-y-6">
  <!-- Metode Pembayaran -->
  <div>
    <h3 class="text-lg font-semibold mb-2">Metode pembayaran:</h3>
    <div class="flex flex-wrap gap-3">
      <!-- Tombol Cash -->
      <button class="flex items-center gap-2 border px-4 py-1 rounded transition hover:bg-green-100 active:scale-95">
        <!-- Background kecil untuk ikon -->
        <span class="bg-green-100 p-1 rounded-md flex items-center gap-1">
          <!-- Ikon Dompet -->
          <svg width="20" height="20" viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
            <path d="M28.0509 8.00001C27.9417 5.37922 27.5917 3.77202 26.4591 2.64083C24.8197 1.00003 22.1793 1.00003 16.9 1.00003H12.7C7.42059 1.00003 4.78019 1.00003 3.1408 2.64083C1.5014 4.28162 1.5 6.92062 1.5 12.2C1.5 17.4794 1.5 20.1198 3.1408 21.7592C4.78159 23.3986 7.42059 23.4 12.7 23.4H16.9C22.1793 23.4 24.8197 23.4 26.4591 21.7592C27.5917 20.628 27.9431 19.0208 28.0509 16.4" stroke="black" stroke-width="1.5"/>
          </svg>

          <!-- Ikon Tambahan -->
          <svg width="8" height="8" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-2 h-2 -ml-3">
            <path d="M9.86637 1.00009H6.22358C3.72459 1.00009 1.7002 2.88029 1.7002 5.20008C1.7002 7.51987 3.72599 9.40007 6.22218 9.40007H9.86637C9.98397 9.40007 10.0414 9.40007 10.0904 9.39727C10.8464 9.35107 11.4484 8.79247 11.4974 8.09107C11.5002 8.04627 11.5002 7.99167 11.5002 7.88387V2.51629C11.5002 2.40849 11.5002 2.35389 11.4974 2.30909C11.447 1.60769 10.8464 1.04909 10.0904 1.00289C10.0428 1.00009 9.98397 1.00009 9.86637 1.00009Z" stroke="black" stroke-width="1.5"/>
          </svg>
        </span>
        <span>Cash</span>
      </button>

      <!-- Tombol Transfer -->
      <button class="flex items-center gap-2 border px-4 py-1 rounded transition hover:bg-green-100 active:scale-95">
        <img src="{{ asset('images/uang.png') }}" alt="Transfer" class="w-5 h-5">
        Transfer
      </button>

      <!-- Tombol QRIS -->
      <button class="flex items-center gap-2 border px-4 py-1 rounded transition hover:bg-green-100 active:scale-95">
        <img src="{{ asset('images/Qris.png') }}" alt="Qris" class="w-5 h-5">
        Qris
      </button>
    </div>
  </div>

  <!-- Form Pilihan Pengiriman -->
<div x-data="{ metode: '', jasa: '', openMenu: false }" class="space-y-4 p-4 border rounded-lg bg-white shadow">

  <!-- Pilih Metode -->
  <h3 class="text-base font-semibold">Metode Pengiriman</h3>
  <div class="flex gap-3">
    <!-- Tombol Antar -->
    <button 
      @click="metode = 'antar'; openMenu = false" 
      :class="metode === 'antar' ? 'bg-green-100 text-green-600 font-semibold' : 'bg-white text-gray-600'"
      class="flex items-center gap-2 border px-4 py-2 rounded transition w-1/2 justify-center"
    >
      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
        <circle cx="12" cy="12" r="10" fill="white" stroke="currentColor" stroke-width="2"/>
        <circle x-show="metode === 'antar'" cx="12" cy="12" r="5" fill="currentColor"></circle>
      </svg>
      Antar
    </button>

    <!-- Tombol Ambil Sendiri -->
    <button 
      @click="metode = 'ambil'; jasa = ''; openMenu = false" 
      :class="metode === 'ambil' ? 'bg-green-100 text-green-600 font-semibold' : 'bg-white text-gray-600'"
      class="flex items-center gap-2 border px-4 py-2 rounded transition w-1/2 justify-center"
    >
      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
        <circle cx="12" cy="12" r="10" fill="white" stroke="currentColor" stroke-width="2"/>
        <circle x-show="metode === 'ambil'" cx="12" cy="12" r="5" fill="currentColor"></circle>
      </svg>
      Ambil Sendiri
    </button>
  </div>

  <!-- Pilih Jasa Antar -->
  <div>
    <label 
      class="block text-sm mb-1 font-semibold"
      :class="metode === 'antar' ? 'text-black' : 'text-gray-400'"
    >
      Pilih Jasa Antarnya
    </label>

    <!-- Kolom Input Jasa -->
    <div 
      @click="if (metode === 'antar') openMenu = !openMenu"
      class="border px-3 py-2 rounded cursor-pointer text-sm bg-gray-50 hover:bg-gray-100"
      :class="metode === 'antar' ? 'text-black font-medium' : 'text-gray-400'"
    >
      <template x-if="jasa === ''">
        <span class="text-gray-400">Klik untuk memilih jasa</span>
      </template>
      <template x-if="jasa !== ''">
        <span x-text="jasa"></span>
      </template>
    </div>

    <!-- Menu Jasa Antar -->
    <div 
      x-show="openMenu && metode === 'antar'" 
      x-transition 
      class="border rounded mt-2 bg-white shadow text-sm divide-y"
    >
      <div @click="jasa = 'A. Jasa Sibanter'; openMenu = false" class="px-4 py-2 hover:bg-green-50 cursor-pointer">
        A. Jasa Sibanter
      </div>
      <div @click="jasa = 'B. Jasa Sicepat'; openMenu = false" class="px-4 py-2 hover:bg-green-50 cursor-pointer">
        B. Jasa Sicepat
      </div>
      <div @click="jasa = 'C. Jasa Silambat'; openMenu = false" class="px-4 py-2 hover:bg-green-50 cursor-pointer">
        C. Jasa Silambat
      </div>
    </div>
  </div>

</div>

  <!-- Voucher / Diskon -->
<div x-data="{ showMenu: false, selected: '' }" class="relative">
  <h3 class="text-lg font-semibold mb-2">Voucher / Diskon:</h3>

  <!-- Input dan tombol -->
  <div class="flex">
    <input 
      type="text" 
      x-model="selected"
      @click="showMenu = !showMenu"
      readonly
      class="border px-3 py-2 rounded-l w-full text-sm cursor-pointer bg-white" 
      placeholder="Gunakan voucher/promo....."
    >
    <button 
      @click="showMenu = !showMenu"
      class="bg-gray-200 px-4 py-2 rounded-r"
    >&gt;</button>
  </div>

  <!-- Dropdown -->
  <div 
    x-show="showMenu" 
    x-transition 
    class="absolute z-10 mt-2 bg-white rounded-xl shadow w-full overflow-hidden"
  >
    <template x-for="(item, index) in ['A', 'B', 'C', 'D', 'E']" :key="index">
      <div 
        @click="selected = `${item} voucher/promo.....`; showMenu = false"
        class="flex items-center gap-2 px-4 py-3 text-gray-400 hover:bg-gray-100 hover:text-gray-700 cursor-pointer border-b last:border-b-0"
      >
        <span class="text-lg font-bold" x-text="item"></span>
        <span class="text-sm">voucher/promo.....</span>
      </div>
    </template>
  </div>
</div>

  <!-- Info Toko -->
  <div class="bg-white rounded-xl shadow px-4 py-3">
    <div class="flex items-center gap-3">
      <img src="{{ asset('images/logo.png') }}" alt="Toko" class="w-12 h-12 rounded-full object-cover">
      <div>
        <p class="text-sm font-semibold">🏪 waroeng</p>
        <!-- Lokasi dengan ikon SVG -->
<span class="inline-flex items-center gap-1 text-green-600 font-medium text-sm">
  <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M8 0C10.12 0 12.16 0.84 13.66 2.34C15.16 3.84 16 5.88 16 8C16 10.73 14.51 12.97 12.94 14.57C12.16 15.37 11.3 16.09 10.38 16.72L10 16.98L9.83 17.1L9.49 17.31L9.19 17.49L8.82 17.71C8.57 17.85 8.29 17.93 8 17.93C7.71 17.93 7.43 17.85 7.18 17.71L6.81 17.49L6.34 17.21L6.17 17.1L5.81 16.85C4.82 16.19 3.9 15.42 3.06 14.57C1.49 12.97 0 10.73 0 8C0 5.88 0.84 3.84 2.34 2.34C3.84 0.84 5.88 0 8 0ZM8 5.33C7.65 5.33 7.3 5.4 6.98 5.54C6.66 5.67 6.36 5.87 6.11 6.11C5.87 6.36 5.67 6.66 5.54 6.98C5.4 7.3 5.33 7.65 5.33 8C5.33 8.35 5.4 8.7 5.54 9.02C5.67 9.34 5.87 9.64 6.11 9.89C6.36 10.13 6.66 10.33 6.98 10.46C7.3 10.6 7.65 10.67 8 10.67C8.71 10.67 9.39 10.39 9.89 9.89C10.39 9.39 10.67 8.71 10.67 8C10.67 7.29 10.39 6.61 9.89 6.11C9.39 5.61 8.71 5.33 8 5.33Z"
      fill="#35CD81"
    />
  </svg>
  Madinah
</span>
        <p class="text-xs text-green-600">⭐ 4.9 &nbsp;|&nbsp; 1,2 rb</p>
      </div>
    </div>
    <button class="mt-3 w-full border border-green-500 text-green-600 py-1 rounded hover:bg-green-50 text-sm">
      Kunjungi Toko
    </button>
  </div>
</div>
@endsection
