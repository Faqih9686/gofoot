@extends('layouts.app')

@section('title', 'Pengaturan')

@section('content')
<div 
    x-data="{ tab: 'profil' }" 
    class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6"
>
      
  <!-- Sidebar -->
<aside class="md:col-span-1">
  <div class="bg-white rounded-lg shadow p-4 space-y-2">
    <!-- Header Pengaturan dengan ikon panah -->
    <div class="flex items-center space-x-2 mb-4">
      <a href="{{ route('pengaturan') }}" class="text-green-600 hover:text-green-800">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
          <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
        </svg>
      </a>
      <h3 class="text-lg font-bold text-green-600">Pengaturan</h3>
    </div>
            <nav class="space-y-1 text-sm">
                <button @click="tab = 'profil'"
                    class="w-full flex items-center space-x-2 p-2 rounded hover:bg-green-50 transition"
                    :class="tab === 'profil' ? 'text-green-600 font-semibold' : 'text-gray-600'">
                <svg width="24" height="24" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 0C22.6522 0 25.1957 1.05357 27.0711 2.92893C28.9464 4.8043 30 7.34784 30 10C30 12.6522 28.9464 15.1957 27.0711 17.0711C25.1957 18.9464 22.6522 20 20 20C17.3478 20 14.8043 18.9464 12.9289 17.0711C11.0536 15.1957 10 12.6522 10 10C10 7.34784 11.0536 4.8043 12.9289 2.92893C14.8043 1.05357 17.3478 0 20 0ZM20 25C31.05 25 40 29.475 40 35V40H0V35C0 29.475 8.95 25 20 25Z" fill="#35CD81"/>
                </svg>
                <div class="flex flex-col items-start">
                <span>Profil Saya</span>
                <span class="text-xs text-gray-400">Nama, Email, No</span>
                </div>
                </button>
                <button @click="tab = 'keamanan'"
                    class="w-full flex items-center space-x-2 p-2 rounded hover:bg-green-50 transition"
                    :class="tab === 'keamanan' ? 'text-green-600 font-semibold' : 'text-gray-600'">
                    <svg width="24" height="24" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 8C8 3.58 11.58 0 16 0C20.42 0 24 3.58 24 8C24 12.42 20.42 16 16 16C11.58 16 8 12.42 8 8ZM20 28.4C20 26.48 21 24.68 22.4 23.48V23C22.4 22.22 22.54 21.48 22.76 20.76C20.7 20.28 18.42 20 16 20C7.16 20 0 23.58 0 28V32H20V28.4ZM40 28.6V35.6C40 36.8 38.8 38 37.4 38H26.4C25.2 38 24 36.8 24 35.4V28.4C24 27.2 25.2 26 26.4 26V23C26.4 20.2 29.2 18 32 18C34.8 18 37.6 20.2 37.6 23V26C38.8 26 40 27.2 40 28.6ZM35 23C35 21.4 33.6 20.4 32 20.4C30.4 20.4 29 21.4 29 23V26H35V23Z" fill="#35CD81"/>
                    </svg>
                    <span>Keamanan Akun</span>
                </button>
                <button @click="tab = 'riwayat'"
                    class="w-full flex items-center space-x-2 p-2 rounded hover:bg-green-50 transition"
                    :class="tab === 'riwayat' ? 'text-green-600 font-semibold' : 'text-gray-600'">
                    <svg width="24" height="24" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 40C15.3333 40 11.2037 38.5837 7.61111 35.7511C4.01852 32.9185 1.68519 29.2978 0.611111 24.8889C0.462963 24.3333 0.574074 23.8244 0.944444 23.3622C1.31481 22.9 1.81481 22.6311 2.44444 22.5555C3.03704 22.4815 3.57407 22.5926 4.05555 22.8889C4.53704 23.1852 4.87037 23.6296 5.05556 24.2222C5.94444 27.5555 7.77778 30.2778 10.5556 32.3889C13.3333 34.5 16.4815 35.5555 20 35.5555C24.3333 35.5555 28.0096 34.0467 31.0289 31.0289C34.0481 28.0111 35.557 24.3348 35.5556 20C35.5541 15.6652 34.0452 11.9896 31.0289 8.97333C28.0126 5.95704 24.3363 4.44741 20 4.44444C17.4444 4.44444 15.0556 5.03704 12.8333 6.22222C10.6111 7.40741 8.74074 9.03703 7.22222 11.1111H11.1111C11.7407 11.1111 12.2689 11.3244 12.6956 11.7511C13.1222 12.1778 13.3348 12.7052 13.3333 13.3333C13.3319 13.9615 13.1185 14.4896 12.6933 14.9178C12.2681 15.3459 11.7407 15.5585 11.1111 15.5556H2.22222C1.59259 15.5556 1.06519 15.3422 0.64 14.9156C0.214815 14.4889 0.00148148 13.9615 0 13.3333V4.44444C0 3.81481 0.213334 3.28741 0.64 2.86222C1.06667 2.43704 1.59407 2.2237 2.22222 2.22222C2.85037 2.22074 3.37852 2.43407 3.80667 2.86222C4.23481 3.29037 4.44741 3.81778 4.44444 4.44444V7.44444C6.33333 5.07407 8.63926 3.24074 11.3622 1.94444C14.0852 0.648148 16.9644 0 20 0C22.7778 0 25.38 0.528148 27.8067 1.58444C30.2333 2.64074 32.3444 4.06593 34.14 5.86C35.9356 7.65407 37.3615 9.76518 38.4178 12.1933C39.4741 14.6215 40.0015 17.2237 40 20C39.9985 22.7763 39.4711 25.3785 38.4178 27.8067C37.3644 30.2348 35.9385 32.3459 34.14 34.14C32.3415 35.9341 30.2304 37.36 27.8067 38.4178C25.383 39.4755 22.7807 40.003 20 40ZM22.2222 19.1111L27.7778 24.6667C28.1852 25.0741 28.3889 25.5926 28.3889 26.2222C28.3889 26.8518 28.1852 27.3704 27.7778 27.7778C27.3704 28.1852 26.8519 28.3889 26.2222 28.3889C25.5926 28.3889 25.0741 28.1852 24.6667 27.7778L18.4444 21.5555C18.2222 21.3333 18.0556 21.0837 17.9444 20.8067C17.8333 20.5296 17.7778 20.2422 17.7778 19.9444V11.1111C17.7778 10.4815 17.9911 9.95407 18.4178 9.52889C18.8444 9.1037 19.3718 8.89037 20 8.88889C20.6281 8.88741 21.1563 9.10074 21.5844 9.52889C22.0126 9.95704 22.2252 10.4844 22.2222 11.1111V19.1111Z" fill="#35CD81"/>
                    </svg>
                    <span>Riwayat Pemesanan</span>
                </button>
                <button @click="tab = 'alamat'"
        class="w-full flex items-start space-x-2 p-2 rounded hover:bg-green-50 transition"
        :class="tab === 'alamat' ? 'text-green-600 font-semibold' : 'text-gray-600'">
  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill="#35CD81" d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7Zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5Z"/>
  </svg>
  <div class="flex flex-col items-start">
    <span>Alamat</span>
  </div>
                </button>
                <button @click="tab = 'notifikasi'"
                        class="w-full flex items-start space-x-2 p-2 rounded hover:bg-green-50 transition"
                        :class="tab === 'notifikasi' ? 'text-green-600 font-semibold' : 'text-gray-600'">
                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill="#35CD81" d="M12 2a7 7 0 0 0-7 7v3.46c0 .53-.21 1.04-.59 1.41L3 16h18l-1.41-2.13a2 2 0 0 1-.59-1.41V9a7 7 0 0 0-7-7Zm0 20c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2Z"/>
                 </svg>
                 <div class="flex flex-col items-start">
                      <span>Pesan & Notifikasi</span>
                 </div>
                </button>
                <a href="{{ route('Customer') }}"
   class="w-full flex items-center space-x-2 p-2 rounded hover:bg-green-50 transition text-gray-600">
   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#35CD81" viewBox="0 0 24 24">
     <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
   </svg>
   <div class="flex flex-col items-start">
      <span>Keluar</span>
   </div>
</a>
            </nav>
        </div>
    </aside>
    

   <main class="md:col-span-3 space-y-4">
  <!-- Profil -->
<div x-show="tab === 'profil'" class="bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-bold text-green-600 mb-4">Profil Saya</h3>

    <!-- Form Profil -->
    <div x-show="tab === 'profil'" x-transition>
        <div class="flex justify-center mb-6">
            <div class="relative">
                <img src="{{ asset('images/user.png') }}" class="w-24 h-24 rounded-full border border-gray-300 object-cover" alt="Foto Profil">
                <button type="button" class="absolute bottom-0 right-0 bg-green-500 text-white p-1 rounded-full hover:bg-green-600">
                    <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.8858 8.38226L35.618 13.1144M33.9281 4.21339L21.1264 17.0151C20.463 17.6741 20.0115 18.5163 19.8299 19.4337L18.6475 25.3528L24.5666 24.1681C25.4831 23.9848 26.3235 23.5355 26.9852 22.8738L39.7869 10.0722C40.1715 9.68746 40.4767 9.23077 40.6849 8.72814C40.8931 8.22552 41.0002 7.68681 41.0002 7.14277C41.0002 6.59874 40.8931 6.06003 40.6849 5.5574C40.4767 5.05478 40.1715 4.59808 39.7869 4.21339C39.4022 3.8287 38.9455 3.52354 38.4428 3.31535C37.9402 3.10716 37.4015 3 36.8575 3C36.3134 3 35.7747 3.10716 35.2721 3.31535C34.7695 3.52354 34.3128 3.8287 33.9281 4.21339Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M36.5298 29.8236V36.5296C36.5298 37.7153 36.0587 38.8524 35.2203 39.6908C34.3819 40.5292 33.2448 41.0002 32.0591 41.0002H7.47063C6.28495 41.0002 5.14782 40.5292 4.30942 39.6908C3.47101 38.8524 3 37.7153 3 36.5296V11.9411C3 10.7554 3.47101 9.61828 4.30942 8.77988C5.14782 7.94147 6.28495 7.47046 7.47063 7.47046H14.1766" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Nama</label>
                <input type="text" name="name" class="w-full border rounded p-2 text-sm" value="{{ old('name', auth()->user()->name) }}" placeholder="Nama Lengkap">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="email" class="w-full border rounded p-2 text-sm" value="{{ old('email', auth()->user()->email) }}" placeholder="Email">
            </div>

            <!-- No Telepon -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Nomor Telepon</label>
                <input type="text" name="phone" class="w-full border rounded p-2 text-sm" value="{{ old('phone', auth()->user()->phone) }}" placeholder="08xxxxxxxxxx">
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Jenis Kelamin</label>
                <select name="gender" class="w-full border rounded p-2 text-sm">
                    <option value="Laki-laki" {{ auth()->user()->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ auth()->user()->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <!-- Tanggal Lahir -->
            <div class="mb-6">
                <label class="block text-sm font-medium mb-1">Tanggal Lahir</label>
                <input type="date" name="birthdate" class="w-full border rounded p-2 text-sm" value="{{ old('birthdate', auth()->user()->birthdate) }}">
            </div>

            <!-- Tombol -->
            <div class="flex space-x-2">
                <button type="submit" class="bg-green-500 text-white font-semibold px-4 py-2 rounded hover:bg-green-600">
                    Simpan
                </button>
                <button type="button" onclick="window.location.reload()" class="bg-gray-200 text-gray-700 font-semibold px-4 py-2 rounded hover:bg-gray-300">
                    Batal
                </button>
            </div>
        </form>
    </div>
</div>

  <!-- Keamanan -->
<div
  x-show="tab === 'keamanan'"
  x-transition
  class="bg-white rounded-lg shadow p-6"
  x-data="{
    duaLangkah: {{ auth()->user()->dua_langkah ? 'true' : 'false' }},
    notifikasiLogin: {{ auth()->user()->notifikasi_login ? 'true' : 'false' }}
  }"
>
  <h3 class="text-lg font-bold text-green-600 mb-4">Keamanan Akun</h3>

  <form method="POST" action="{{ route('profile.security.update') }}">
    @csrf
    @method('PUT')

    <input type="hidden" name="dua_langkah" :value="duaLangkah">
    <input type="hidden" name="notifikasi_login" :value="notifikasiLogin">

    <div class="space-y-4">
      <!-- Ganti Password (tidak aktif di sini, hanya placeholder) -->
      <div>
        <label class="sr-only">Ganti Password</label>
        <input type="password" placeholder="Ganti password (belum aktif)"
               class="w-full border rounded px-3 py-2 text-sm bg-gray-100" disabled>
      </div>

      <!-- 2FA -->
      <div class="flex items-center justify-between">
        <label class="text-sm">Autentikasi dua langkah (2FA)</label>
        <button type="button"
                @click="duaLangkah = !duaLangkah"
                :class="duaLangkah ? 'bg-green-500' : 'bg-gray-300'"
                class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors duration-300">
          <span :class="duaLangkah ? 'translate-x-6' : 'translate-x-1'"
                class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform duration-300"></span>
        </button>
      </div>

      <!-- Notifikasi Login -->
      <div class="flex items-center justify-between">
        <label class="text-sm">Notifikasi login dari perangkat baru</label>
        <button type="button"
                @click="notifikasiLogin = !notifikasiLogin"
                :class="notifikasiLogin ? 'bg-green-500' : 'bg-gray-300'"
                class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors duration-300">
          <span :class="notifikasiLogin ? 'translate-x-6' : 'translate-x-1'"
                class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform duration-300"></span>
        </button>
      </div>

      <div>
        <button type="submit"
                class="mt-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
          Simpan Perubahan
        </button>
      </div>
    </div>
  </form>
</div>

  <!-- Riwayat -->
  <div x-show="tab === 'riwayat'" x-transition class="bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-bold text-green-600 mb-4">Riwayat Pemesanan</h3>
    <nav class="flex space-x-32 border-b mb-6 text-sm font-medium">
      <a href="/riwayat/akhir-akhir ini"
        class="{{ Request::is('riwayat/akhir-akhir ini') ? 'border-b-2 border-green-500 text-green-600' : 'border-b-2 border-transparent text-gray-600 hover:text-green-600' }}">
        Akhir-akhir ini
      </a>
      <a href="/riwayat/makanan"
        class="{{ Request::is('riwayat/makanan') ? 'border-b-2 border-green-500 text-green-600' : 'border-b-2 border-transparent text-gray-600 hover:text-green-600' }}">
        Pesanan Makanan
      </a>
      <a href="/riwayat/mobil"
        class="{{ Request::is('riwayat/mobil') ? 'border-b-2 border-green-500 text-green-600' : 'border-b-2 border-transparent text-gray-600 hover:text-green-600' }}">
        Sewa Mobil / Sopir
      </a>
      <a href="/riwayat/guide"
        class="{{ Request::is('riwayat/guide') ? 'border-b-2 border-green-500 text-green-600' : 'border-b-2 border-transparent text-gray-600 hover:text-green-600' }}">
        Guide
      </a>
    </nav>
  </div>

  <!-- Alamat -->
   @php
  $drivers = [
    [
      'name' => 'Agus Salim',
      'phone' => '080808080808',
      'image' => 'driver1.png',
      'role' => 'Driver Utama',
    ],
    [
      'name' => 'udin bin adun',
      'phone' => '081234567890',
      'image' => 'driver1.png',
      'role' => 'Driver Cadangan',
    ],
    [
      'name' => 'Citra Dewi',
      'phone' => '082345678901',
      'image' => 'driver1.png',
      'role' => 'Kurir',
    ],
  ];
@endphp

<div x-show="tab === 'alamat'" x-transition x-cloak class="bg-white rounded-lg shadow p-6 space-y-4">
  <h3 class="text-lg font-bold text-green-600 mb-2">Alamat</h3>
  <p class="text-sm text-green-600 mb-4 font-semibold">Pesanan Anda Dibawa oleh:</p>

  @foreach($drivers as $driver)
  <div class="border rounded-lg p-4 flex items-center justify-between">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/' . $driver['image']) }}" class="w-12 h-12 rounded-full object-cover" alt="{{ $driver['name'] }}">
      <div>
        <p class="text-xs text-green-600 font-semibold mb-1">{{ $driver['role'] }}</p>
        <p class="font-semibold text-sm">{{ $driver['name'] }}</p>
        <p class="text-sm text-gray-600">{{ $driver['phone'] }}</p>
        <p class="text-xs text-gray-400">Bagikan lokasi dengan WhatsApp</p>
      </div>
    </div>
    <div class="flex space-x-3">
      <a href="tel:{{ $driver['phone'] }}" class="text-green-500 hover:text-green-700">
        <!-- Ikon Telepon -->
        <svg width="24" height="24" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M33.9 36C29.7333 36 25.6167 35.092 21.55 33.276C17.4833 31.46 13.7833 28.8847 10.45 25.55C7.11667 22.2153 4.542 18.5153 2.726 14.45C0.91 10.3847 0.00133333 6.268 0 2.1C0 1.5 0.2 1 0.6 0.6C1 0.2 1.5 0 2.1 0H10.2C10.6667 0 11.0833 0.158666 11.45 0.476C11.8167 0.793333 12.0333 1.168 12.1 1.6L13.4 8.6C13.4667 9.13333 13.45 9.58333 13.35 9.95C13.25 10.3167 13.0667 10.6333 12.8 10.9L7.95 15.8C8.61667 17.0333 9.408 18.2247 10.324 19.374C11.24 20.5233 12.2487 21.632 13.35 22.7C14.3833 23.7333 15.4667 24.692 16.6 25.576C17.7333 26.46 18.9333 27.268 20.2 28L24.9 23.3C25.2 23 25.592 22.7753 26.076 22.626C26.56 22.4767 27.0347 22.4347 27.5 22.5L34.4 23.9C34.8667 24.0333 35.25 24.2753 35.55 24.626C35.85 24.9767 36 25.368 36 25.8V33.9C36 34.5 35.8 35 35.4 35.4C35 35.8 34.5 36 33.9 36Z" fill="#35CD81"/>
        </svg>
      </a>
      <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $driver['phone']) }}" class="text-green-500 hover:text-green-700">
        <!-- Ikon WhatsApp -->
        <svg width="24" height="24" viewBox="0 0 41 38" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20.8332 33.6502C22.2583 33.5527 23.6716 33.3251 25.0552 32.9701C26.7642 33.4838 28.568 33.6001 30.3288 33.3101C30.3991 33.3016 30.4697 33.2963 30.5405 33.2944C31.1687 33.2944 31.9929 33.6547 33.1953 34.4135V33.166C33.1958 32.9487 33.2546 32.7355 33.3655 32.5485C33.4764 32.3616 33.6353 32.2078 33.8258 32.1032C34.3497 31.8075 34.8338 31.475 35.2782 31.1057C37.03 29.642 38.0186 27.6875 38.0186 25.6204C38.0186 24.9381 37.9105 24.2581 37.6965 23.6096C38.228 22.6323 38.6513 21.6123 38.9665 20.5495C39.9798 22.0469 40.5247 23.8145 40.5315 25.6204C40.5315 28.4306 39.2075 31.0516 36.9129 32.9679C36.5286 33.2876 36.1271 33.5818 35.7083 33.8506V36.7733C35.7083 37.7776 34.5328 38.3563 33.7042 37.7573C32.9191 37.1796 32.1076 36.6386 31.2723 36.1361C31.031 35.9969 30.7813 35.8729 30.5247 35.7645C29.8277 35.8677 29.124 35.9197 28.4193 35.9199C25.5596 35.9199 22.9161 35.071 20.8332 33.6502ZM5.69918 27.8069C2.08737 24.7828 0 20.6598 0 16.2419C0 7.21686 8.62871 0 19.1646 0C29.7028 0 38.3338 7.21461 38.3338 16.2419C38.3338 25.2669 29.7028 32.4815 19.1646 32.4815C17.9802 32.4815 16.8131 32.3914 15.6632 32.2113C15.1678 32.3261 13.1817 33.4903 10.322 35.5506C9.28622 36.2982 7.81808 35.5776 7.81808 34.3189V29.3358C7.0764 28.8773 6.36899 28.3656 5.70143 27.8046Z" fill="#35CD81"/>
          <path d="M11.3985 19C12.0703 19 12.7146 18.7331 13.1897 18.2581C13.6648 17.783 13.9317 17.1387 13.9317 16.4668C13.9317 15.795 13.6648 15.1506 13.1897 14.6756C12.7146 14.2005 12.0703 13.9336 11.3985 13.9336Z" fill="#35CD81"/>
        </svg>
      </a>
    </div>
  </div>
  @endforeach
</div>

  <!-- Notifikasi -->
<div x-show="tab === 'notifikasi'" x-transition class="space-y-8">
  <!-- Bagian Notifikasi -->
  <div class="bg-white rounded-lg shadow p-6">
    <h3 class="text-xl font-bold text-green-600 mb-4">Notifikasi</h3>
    <hr class="mb-4 border-gray-300" />
    <p class="text-sm text-gray-600 font-semibold mb-4">Promo hari ini</p>
    <div class="space-y-4">
      <!-- Notifikasi Item -->
      @foreach([1,2] as $i)
      <div class="flex items-start bg-white border rounded-lg p-4">
        <img src="{{ asset('images/promo 3.png') }}" alt="Promo" class="w-16 h-16 mr-4 object-contain" />
        <div>
          <p class="font-semibold text-green-600">judul</p>
          <p class="text-sm text-green-600">hahaysghash</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Bagian Pesan -->
  <div class="bg-white rounded-lg shadow p-6">
  <h3 class="text-xl font-bold text-green-600 mb-4">Pesan</h3>
  <hr class="mb-4 border-gray-300" />

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <!-- List Chat Kiri -->
    <div class="space-y-2">
      @foreach([1,2] as $i)
      <div class="flex items-center space-x-2 border rounded-lg p-2 cursor-pointer hover:bg-gray-50">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 object-contain" />
        <div>
          <p class="text-xs text-gray-600 font-semibold">waroeng</p>
          <p class="text-xs text-gray-400 truncate">Pesanan anda...</p>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Chat Box Kanan -->
    <div class="md:col-span-2 flex flex-col justify-between border rounded-lg p-4 space-y-4">
      <!-- Header Chat -->
      <div class="flex items-center space-x-2 pb-2 border-b">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 object-contain rounded-full" />
        <p class="text-sm text-gray-800 font-semibold">waroeng</p>
      </div>

      <!-- Isi Pesan -->
      <div class="flex">
        <div class="bg-green-500 text-white rounded-lg p-2 text-sm max-w-xs">
          Pesanan anda sedang disiapkan
        </div>
        <span class="text-xs text-gray-400 ml-2 self-end">12:11</span>
      </div>

      <!-- Input Pesan -->
      <div class="flex items-center border rounded-full px-2 py-1">
  <!-- Tombol + -->
  <button class="text-green-500 hover:text-green-700 px-2">
    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" />
    </svg>
  </button>

  <!-- Tombol Lokasi -->
  <button class="text-green-500 hover:text-green-700 px-2">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M5.05 3.05a7 7 0 119.9 9.9L10 18.9l-4.95-5.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
    </svg>
  </button>

  <!-- Input -->
  <input
    type="text"
    class="flex-1 px-2 py-1 focus:outline-none text-sm"
    placeholder="Ketik jawaban saya........"
  />

  <!-- Tombol Kirim -->
  <button class="text-green-500 hover:text-green-700 px-2">
    <svg width="24" height="24" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M22.9291 0.0400186C23.1528 -0.017834 23.3881 -0.0128772 23.6092 0.0543444C23.8303 0.121566 24.0285 0.248448 24.1821 0.421039C24.3358 0.59363 24.4388 0.805244 24.48 1.03261C24.5211 1.25998 24.4988 1.49429 24.4154 1.70979L16.877 21.1841C16.8024 21.377 16.6814 21.5485 16.5246 21.6834C16.3679 21.8183 16.1803 21.9124 15.9784 21.9574C15.7766 22.0024 15.5668 21.9969 15.3676 21.9413C15.1684 21.8858 14.986 21.7819 14.8366 21.6389L10.5874 17.5745L9.07593 19.0847C8.27685 19.8837 6.90988 19.3184 6.90988 18.1876V14.0565L0.38786 7.81845C0.226038 7.66363 0.108539 7.46838 0.0475259 7.2529C-0.0134871 7.03742 -0.0157959 6.80954 0.0408387 6.59287C0.0974733 6.3762 0.210993 6.1786 0.369644 6.02054C0.528295 5.86247 0.726312 5.74969 0.943192 5.69386L22.9291 0.0400186ZM20.273 5.44886L10.2243 13.75L15.2122 18.5218L20.273 5.44886ZM18.2904 3.82809L3.75755 7.5634L8.39621 11.9985L18.2904 3.82558V3.82809Z" fill="#35CD81"/>
    </svg>
  </button>
</div>
</main>
@endsection
