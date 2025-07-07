@extends('layouts.app')

@section('content')
<div class="md:grid md:grid-cols-4 gap-6">
  <!-- Sidebar -->
  <aside class="md:col-span-1">
    @include('partials.sidebar-riwayat')
  </aside>

  
  <!-- Card List -->
  <div class="space-y-4 md:col-span-3">
    
<!-- Card 1 -->
<div class="flex flex-col md:flex-row justify-between border rounded-lg p-4">
  <!-- Kiri: Gambar & Info -->
  <div>
    <!-- Header atas gambar -->
    <div class="flex justify-between items-center mb-2">
      <div class="flex items-center space-x-1">
        <img src="{{ asset('images/user.png') }}" alt="icon" class="w-4 h-4">
        <span class="font-semibold">waroeng</span>
      </div>
      <div class="text-xs text-gray-500">Resi 0909090909090909</div>
    </div>
    <!-- Konten bawah -->
    <div class="flex items-start space-x-4">
      <!-- Gambar dengan lokasi di dalamnya -->
      <div class="relative w-20 h-20">
        <img src="{{ asset('images/makanan 1.jpg') }}" alt="Nasi Goreng" class="w-full h-full rounded object-cover">
        <!-- Ikon lokasi -->
        <div class="absolute bottom-1 right-1 flex items-center gap-1 bg-white/80 backdrop-blur px-1.5 py-0.5 rounded-full shadow">
          <svg
            width="12"
            height="14"
            viewBox="0 0 16 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M8 0C10.1217 0 12.1566 0.842857 13.6569 2.34315C15.1571 3.84345 16 5.87829 16 8.00003C16 10.7325 14.5102 12.9689 12.9404 14.5734C12.1562 15.3663 11.3004 16.0852 10.384 16.7209L10.0053 16.9787L9.82756 17.0969L9.49244 17.3103L9.19378 17.4925L8.824 17.7076C8.57301 17.8509 8.289 17.9262 8 17.9262C7.711 17.9262 7.42699 17.8509 7.176 17.7076L6.80622 17.4925L6.344 17.2081L6.17333 17.0969L5.80889 16.8543C4.82029 16.1854 3.89947 15.4215 3.05956 14.5734C1.48978 12.968 0 10.7325 0 8.00003C0 5.87829 0.842855 3.84345 2.34315 2.34315C3.84344 0.842857 5.87827 0 8 0ZM8 5.33335C7.64981 5.33335 7.30305 5.40233 6.97951 5.53634C6.65598 5.67035 6.362 5.86678 6.11438 6.1144C5.86676 6.36203 5.67033 6.656 5.53632 6.97953C5.40231 7.30307 5.33333 7.64983 5.33333 8.00003C5.33333 8.35022 5.40231 8.69698 5.53632 9.02052C5.67033 9.34406 5.86676 9.63803 6.11438 9.88565C6.362 10.1333 6.65598 10.3297 6.97951 10.4637C7.30305 10.5977 7.64981 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3858 9.88562 9.88565C10.3857 9.38555 10.6667 8.70727 10.6667 8.00003C10.6667 7.29278 10.3857 6.6145 9.88562 6.1144C9.38552 5.6143 8.70724 5.33335 8 5.33335Z"
              fill="#35CD81"
            />
          </svg>
          <span class="text-[10px] text-gray-700">Mekkah</span>
        </div>
      </div>

      <div class="space-y-1">
        <div class="font-semibold">Nasi Goreng</div>
        <div class="text-xs text-gray-500">⭐ 4.7 | Terjual 80</div>
        <div class="flex items-center space-x-2 text-xs mt-1">
          <span>Jumlah:</span>
          <span class="border px-2 rounded">2</span>
        </div>
        <div class="text-xs mt-1">
          <input type="text" class="border rounded px-2 py-1 w-32" value="Gk pake Bakso" disabled>
        </div>
      </div>
    </div>
  </div>

  <!-- Kanan: Status & Aksi -->
  <div class="flex flex-col items-end mt-4 md:mt-0 space-y-1">
    <span class="text-xs text-gray-500">2 Hari yang lalu</span>
    <span class="relative top-4 text-sm font-bold">Total harga</span>
    <span class="relative top-2 text-sm font-bold text-green-600">Rp 80.000</span>
    <span class="relative -top-6 bg-green-200 text-green-600 text-xs font-semibold px-3 py-1 rounded-full mr-56">Gagal</span>
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
      <div class="text-xs text-gray-500">Resi 0909090909090909</div>
    </div>
    <!-- Konten bawah -->
    <div class="flex items-start space-x-4">
      <!-- Gambar dengan lokasi di dalamnya -->
      <div class="relative w-20 h-20">
        <img src="{{ asset('images/makanan 1.jpg') }}" alt="Nasi Goreng" class="w-full h-full rounded object-cover">
        <!-- Ikon lokasi -->
        <div class="absolute bottom-1 right-1 flex items-center gap-1 bg-white/80 backdrop-blur px-1.5 py-0.5 rounded-full shadow">
          <svg
            width="12"
            height="14"
            viewBox="0 0 16 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M8 0C10.1217 0 12.1566 0.842857 13.6569 2.34315C15.1571 3.84345 16 5.87829 16 8.00003C16 10.7325 14.5102 12.9689 12.9404 14.5734C12.1562 15.3663 11.3004 16.0852 10.384 16.7209L10.0053 16.9787L9.82756 17.0969L9.49244 17.3103L9.19378 17.4925L8.824 17.7076C8.57301 17.8509 8.289 17.9262 8 17.9262C7.711 17.9262 7.42699 17.8509 7.176 17.7076L6.80622 17.4925L6.344 17.2081L6.17333 17.0969L5.80889 16.8543C4.82029 16.1854 3.89947 15.4215 3.05956 14.5734C1.48978 12.968 0 10.7325 0 8.00003C0 5.87829 0.842855 3.84345 2.34315 2.34315C3.84344 0.842857 5.87827 0 8 0ZM8 5.33335C7.64981 5.33335 7.30305 5.40233 6.97951 5.53634C6.65598 5.67035 6.362 5.86678 6.11438 6.1144C5.86676 6.36203 5.67033 6.656 5.53632 6.97953C5.40231 7.30307 5.33333 7.64983 5.33333 8.00003C5.33333 8.35022 5.40231 8.69698 5.53632 9.02052C5.67033 9.34406 5.86676 9.63803 6.11438 9.88565C6.362 10.1333 6.65598 10.3297 6.97951 10.4637C7.30305 10.5977 7.64981 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3858 9.88562 9.88565C10.3857 9.38555 10.6667 8.70727 10.6667 8.00003C10.6667 7.29278 10.3857 6.6145 9.88562 6.1144C9.38552 5.6143 8.70724 5.33335 8 5.33335Z"
              fill="#35CD81"
            />
          </svg>
          <span class="text-[10px] text-gray-700">Mekkah</span>
        </div>
      </div>

      <div class="space-y-1">
        <div class="font-semibold">Nasi Goreng Bakso</div>
        <div class="text-xs text-gray-500">⭐ 4.7 | Terjual 80</div>
        <div class="flex items-center space-x-2 text-xs mt-1">
          <span>Jumlah:</span>
          <span class="border px-2 rounded">2</span>
        </div>
        <div class="text-xs mt-1">
          <input type="text" class="border rounded px-2 py-1 w-32" value="Gk pake Bakso" disabled>
        </div>
      </div>
    </div>
  </div>

  <!-- Kanan: Status & Aksi -->
  <div class="flex flex-col items-end mt-4 md:mt-0 space-y-1">
    <span class="text-xs text-gray-500">2 Hari yang lalu </span>
    <span class="relative top-4 text-sm font-bold">Total harga</span>
    <span class="relative top-2 text-sm font-bold text-green-600">Rp 80.000</span>
    <span class="relative -top-6 bg-green-200 text-green-600 text-xs font-semibold px-3 py-1 rounded-full mr-56">Selesai</span>
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
      <div class="text-xs text-gray-500">Resi 0909090909090909</div>
    </div>
    <!-- Konten bawah -->
    <div class="flex items-start space-x-4">
      <!-- Gambar dengan lokasi di dalamnya -->
      <div class="relative w-20 h-20">
        <img src="{{ asset('images/makanan 1.jpg') }}" alt="Nasi Goreng" class="w-full h-full rounded object-cover">
        <!-- Ikon lokasi -->
        <div class="absolute bottom-1 right-1 flex items-center gap-1 bg-white/80 backdrop-blur px-1.5 py-0.5 rounded-full shadow">
          <svg
            width="12"
            height="14"
            viewBox="0 0 16 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M8 0C10.1217 0 12.1566 0.842857 13.6569 2.34315C15.1571 3.84345 16 5.87829 16 8.00003C16 10.7325 14.5102 12.9689 12.9404 14.5734C12.1562 15.3663 11.3004 16.0852 10.384 16.7209L10.0053 16.9787L9.82756 17.0969L9.49244 17.3103L9.19378 17.4925L8.824 17.7076C8.57301 17.8509 8.289 17.9262 8 17.9262C7.711 17.9262 7.42699 17.8509 7.176 17.7076L6.80622 17.4925L6.344 17.2081L6.17333 17.0969L5.80889 16.8543C4.82029 16.1854 3.89947 15.4215 3.05956 14.5734C1.48978 12.968 0 10.7325 0 8.00003C0 5.87829 0.842855 3.84345 2.34315 2.34315C3.84344 0.842857 5.87827 0 8 0ZM8 5.33335C7.64981 5.33335 7.30305 5.40233 6.97951 5.53634C6.65598 5.67035 6.362 5.86678 6.11438 6.1144C5.86676 6.36203 5.67033 6.656 5.53632 6.97953C5.40231 7.30307 5.33333 7.64983 5.33333 8.00003C5.33333 8.35022 5.40231 8.69698 5.53632 9.02052C5.67033 9.34406 5.86676 9.63803 6.11438 9.88565C6.362 10.1333 6.65598 10.3297 6.97951 10.4637C7.30305 10.5977 7.64981 10.6667 8 10.6667C8.70724 10.6667 9.38552 10.3858 9.88562 9.88565C10.3857 9.38555 10.6667 8.70727 10.6667 8.00003C10.6667 7.29278 10.3857 6.6145 9.88562 6.1144C9.38552 5.6143 8.70724 5.33335 8 5.33335Z"
              fill="#35CD81"
            />
          </svg>
          <span class="text-[10px] text-gray-700">Mekkah</span>
        </div>
      </div>

      <div class="space-y-1">
        <div class="font-semibold">Nasi Goreng Special</div>
        <div class="text-xs text-gray-500">⭐ 4.7 | Terjual 80</div>
        <div class="flex items-center space-x-2 text-xs mt-1">
          <span>Jumlah:</span>
          <span class="border px-2 rounded">2</span>
        </div>
        <div class="text-xs mt-1">
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
