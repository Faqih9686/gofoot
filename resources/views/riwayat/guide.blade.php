@extends('layouts.app')

@section('content')
<div class="md:grid md:grid-cols-4 gap-6">
  <!-- Sidebar -->
  <aside class="md:col-span-1">
    @include('partials.sidebar-riwayat')
  </aside>

  
  <!-- Card List -->
  <div class="space-y-4 md:col-span-3">
    
<!-- Card 3 -->
<div class="flex flex-col md:flex-row justify-between border rounded-lg p-4">
  <!-- Kiri: Gambar & Info -->
  <div>
    <!-- Header atas gambar -->
    <div class="flex justify-between items-center mb-2">
      <div class="flex items-center space-x-1">
        <img src="{{ asset('images/user.png') }}" alt="icon" class="w-4 h-4">
        <span class="font-semibold">waroeng</span>
      </div>
      <div class="text-xs text-gray-500 relative left-[-100px]">Resi 0909090909090909</div>
    </div>
    <!-- Konten bawah -->
    <div class="flex items-start space-x-4">
      <!-- Gambar dengan rating di dalamnya -->
      <div class="relative w-20 h-20">
        <img src="{{ asset('images/Avansa.png') }}" alt="Nasi Goreng" class="w-full h-full rounded object-cover">
        <!-- Ikon rating -->
        <div class="absolute bottom-1 right-1 flex items-center gap-1 bg-white/80 backdrop-blur px-1.5 py-0.5 rounded-full shadow">
          <svg
            width="12"
            height="12"
            viewBox="0 0 24 24"
            fill="#FACC15"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M12 .587l3.668 7.431L24 9.748l-6 5.843 1.417 8.271L12 19.896l-7.417 3.966L6 15.591 0 9.748l8.332-1.73z"/>
          </svg>
          <span class="text-[10px] text-gray-700">4.9</span>
        </div>
      </div>

      <!-- Info Detail -->
      <div class="flex flex-col space-y-1">
        <div class="font-semibold">Toyota Avansa + Sopir</div>
        <div class="flex items-center space-x-3">
          <p class="text-green-600 font-bold text-md">Rp 800.000 / Hari</p>
          <div class="flex items-center space-x-1 text-gray-400 text-sm">
            <i class="bi bi-person-fill"></i>
            <span class="font-medium text-gray-500">11</span>
          </div>
          <div class="h-4 w-px bg-gray-300"></div>
          <div class="flex items-center space-x-1 text-gray-400">
  <i class="bi bi-bus-front-fill"></i>
  <span>Min H-7</span>
</div>
        </div>
        <div class="flex items-center space-x-2 text-xs">
          <span>Jumlah Hari:</span>
          <span class="border px-2 rounded">2</span>
        </div>
        <div class="flex items-center space-x-1 text-xs">
          <span class="text-sm text-gray-600 font-semibold">Catatan:</span>
          <input type="text" class="border rounded px-2 py-1 w-32" value="Gk pake Bakso" disabled>
        </div>
      </div>
    </div>
  </div>

  <!-- Kanan: Status & Aksi -->
  <div class="flex flex-col items-end mt-4 md:mt-0 space-y-1">
    <span class="text-xs text-gray-500">Hari ini</span>
    <span class="relative top-4 text-sm font-bold">Total harga</span>
    <span class="relative top-2 text-sm font-bold text-green-600">Rp 80.000</span>
    <span class="relative -top-8 bg-green-200 text-green-600 text-xs font-semibold px-3 py-1 rounded-full mr-56">Selesai</span>
    <button class="relative top-6 text-xs text-green-600 mr-56">Lihat Detail</button>
    <button class="text-xs bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-600 transition active:bg-white active:text-green-500">Pesan Lagi</button>
  </div>
</div>

<!-- Card 2 -->
<div class="flex flex-col md:flex-row justify-between border rounded-lg p-4">
  <!-- Kiri: Gambar & Info -->
  <div>
    <!-- Header atas gambar -->
    <div class="flex justify-between items-center mb-2">
      <div class="flex items-center space-x-1">
        <img src="{{ asset('images/user.png') }}" alt="icon" class="w-4 h-4">
        <span class="font-semibold">waroeng</span>
      </div>
      <div class="text-xs text-gray-500 relative left-[-100px]">Resi 0909090909090909</div>
    </div>
    <!-- Konten bawah -->
    <div class="flex items-start space-x-4">
      <!-- Gambar dengan rating di dalamnya -->
      <div class="relative w-20 h-20">
        <img src="{{ asset('images/hyundai.jpg') }}" alt="Nasi Goreng" class="w-full h-full rounded object-cover">
        <!-- Ikon rating -->
        <div class="absolute bottom-1 right-1 flex items-center gap-1 bg-white/80 backdrop-blur px-1.5 py-0.5 rounded-full shadow">
          <svg
            width="12"
            height="12"
            viewBox="0 0 24 24"
            fill="#FACC15"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M12 .587l3.668 7.431L24 9.748l-6 5.843 1.417 8.271L12 19.896l-7.417 3.966L6 15.591 0 9.748l8.332-1.73z"/>
          </svg>
          <span class="text-[10px] text-gray-700">4.9</span>
        </div>
      </div>

      <!-- Info Detail -->
      <div class="flex flex-col space-y-1">
        <div class="font-semibold">Hyundai H1 + Sopir</div>
        <div class="flex items-center space-x-3">
          <p class="text-green-600 font-bold text-md">Rp 800.000 / Hari</p>
          <div class="flex items-center space-x-1 text-gray-400 text-sm">
            <i class="bi bi-person-fill"></i>
            <span class="font-medium text-gray-500">11</span>
          </div>
          <div class="h-4 w-px bg-gray-300"></div>
          <div class="flex items-center space-x-1 text-gray-400">
  <i class="bi bi-bus-front-fill"></i>
  <span>Min H-7</span>
</div>
        </div>
        <div class="flex items-center space-x-2 text-xs">
          <span>Jumlah Hari:</span>
          <span class="border px-2 rounded">2</span>
        </div>
        <div class="flex items-center space-x-1 text-xs">
          <span class="text-sm text-gray-600 font-semibold">Catatan:</span>
          <input type="text" class="border rounded px-2 py-1 w-32" value="Gk pake Bakso" disabled>
        </div>
      </div>
    </div>
  </div>

  <!-- Kanan: Status & Aksi -->
  <div class="flex flex-col items-end mt-4 md:mt-0 space-y-1">
    <span class="text-xs text-gray-500">Hari ini</span>
    <span class="relative top-4 text-sm font-bold">Total harga</span>
    <span class="relative top-2 text-sm font-bold text-green-600">Rp 80.000</span>
    <span class="relative -top-6 bg-green-200 text-green-600 text-xs font-semibold px-3 py-1 rounded-full mr-56">Gagal</span>
    <button class="relative top-6 text-xs text-green-600 mr-56">Lihat Detail</button>
    <button class="text-xs bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-600 transition active:bg-white active:text-green-500">Pesan Lagi</button>
  </div>
</div>

    <!-- Card 3 -->
<div class="flex flex-col md:flex-row justify-between border rounded-lg p-4">
  <!-- Kiri: Gambar & Info -->
  <div>
    <!-- Header atas gambar -->
    <div class="flex justify-between items-center mb-2">
      <div class="flex items-center space-x-1">
        <img src="{{ asset('images/user.png') }}" alt="icon" class="w-4 h-4">
        <span class="font-semibold">waroeng</span>
      </div>
      <div class="text-xs text-gray-500 relative left-[-100px]">Resi 0909090909090909</div>
    </div>
    <!-- Konten bawah -->
    <div class="flex items-start space-x-4">
      <!-- Gambar dengan rating di dalamnya -->
      <div class="relative w-20 h-20">
        <img src="{{ asset('images/yaris.jpg') }}" alt="Nasi Goreng" class="w-full h-full rounded object-cover">
        <!-- Ikon rating -->
        <div class="absolute bottom-1 right-1 flex items-center gap-1 bg-white/80 backdrop-blur px-1.5 py-0.5 rounded-full shadow">
          <svg
            width="12"
            height="12"
            viewBox="0 0 24 24"
            fill="#FACC15"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M12 .587l3.668 7.431L24 9.748l-6 5.843 1.417 8.271L12 19.896l-7.417 3.966L6 15.591 0 9.748l8.332-1.73z"/>
          </svg>
          <span class="text-[10px] text-gray-700">4.9</span>
        </div>
      </div>

      <!-- Info Detail -->
      <div class="flex flex-col space-y-1">
        <div class="font-semibold">Toyota Yaris + Sopir</div>
        <div class="flex items-center space-x-3">
          <p class="text-green-600 font-bold text-md">Rp 800.000 / Hari</p>
          <div class="flex items-center space-x-1 text-gray-400 text-sm">
            <i class="bi bi-person-fill"></i>
            <span class="font-medium text-gray-500">11</span>
          </div>
          <div class="h-4 w-px bg-gray-300"></div>
          <div class="flex items-center space-x-1 text-gray-400">
            <i class="bi bi-bus-front-fill"></i>
          <span>Min H-7</span>
          </div>
        </div>
        <div class="flex items-center space-x-2 text-xs">
          <span>Jumlah Hari:</span>
          <span class="border px-2 rounded">2</span>
        </div>
        <div class="flex items-center space-x-1 text-xs">
          <span class="text-sm text-gray-600 font-semibold">Catatan:</span>
          <input type="text" class="border rounded px-2 py-1 w-32" value="Gk pake Bakso" disabled>
        </div>
      </div>
    </div>
  </div>

  <!-- Kanan: Status & Aksi -->
  <div class="flex flex-col items-end mt-4 md:mt-0 space-y-1">
    <span class="text-xs text-gray-500">Hari ini</span>
    <span class="relative top-4 text-sm font-bold">Total harga</span>
    <span class="relative top-2 text-sm font-bold text-green-600">Rp 80.000</span>
    <span class="relative -top-8 bg-yellow-200 text-green-600 text-xs font-semibold px-3 py-1 rounded-full mr-56">Proses</span>
    <button class="relative top-6 text-xs text-green-600 mr-56">Lihat Detail</button>
    <button class="text-xs bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-600 transition active:bg-white active:text-green-500">Pesan Lagi</button>
  </div>
</div>

  </div>
</div>
@endsection
