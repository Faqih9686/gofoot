@extends('layouts.app')

@section('title', 'Status Pembayaran')

@section('content')
<div class="p-4">

  <!-- Breadcrumb -->
    <nav class="text-sm mb-4" aria-label="Breadcrumb">
      <ol class="list-reset flex flex-wrap text-gray-600">
        <li><a href="{{ route('Customer') }}" class="hover:text-green-600 transition font-medium">Beranda</a></li>
        <li><span class="mx-2">›</span></li>
        <li class="text-gray-500">Makanan</li>
        <li><span class="mx-2">›</span></li>
        <li class="text-gray-500 font-semibold">Nasi Goreng</li>
        <li><span class="mx-2">›</span></li>
        <li class="text-gray-500 font-semibold">Pembayaran</li>
        <li><span class="mx-2">›</span></li>
        <li class="text-gray-700 font-semibold">status</li>
      </ol>
    </nav>

  <!-- Kartu Status Pembayaran -->
  <div class="bg-white rounded-xl shadow p-6 max-w-4xl mx-auto">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-bold">Status pembayaran</h2>
      <span class="bg-yellow-100 text-yellow-700 px-4 py-1 rounded-full text-lg font-medium mr-40">Proses</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">

      <!-- Detail Transaksi -->
      <div class="space-y-2 text-sm text-gray-800">

        <!-- Header Transaksi -->
        <div class="space-y-1">
          <div class="flex justify-between text-lg">
             <strong>Bayar sebelum:</strong>
             <strong>12.10 ,05 Juli 2025</strong>
          </div>
          <div class="flex justify-between">
            <span>Metode Pembayaran :</span>
            <span>Qris</span>
          </div>
          <div class="flex justify-between">
            <span>No Transaksi :</span>
            <span>#0809838902933</span>
          </div>
        </div>

        <!-- Garis -->
        <div class="border-t border-black my-2"></div>

        <!-- Detail Item -->
        <div class="flex justify-between">
          <span>Nasi goreng (Original)</span>
          <span>Rp 20.000</span>
        </div>

        <div class="border-t border-black my-2"></div>

        <!-- Rincian Harga -->
        <div class="flex justify-between">
          <span>Subtotal Harga</span>
          <span>Rp 20.000</span>
        </div>
        <div class="flex justify-between">
          <span>Vocher/Diskon</span>
          <span>Rp -0</span>
        </div>
        <div class="flex justify-between">
          <span>Total Ongkos Kirim</span>
          <span>Rp 5.000</span>
        </div>
        <div class="flex justify-between">
          <span>Vocher/Diskon Ongkos Kirim</span>
          <span>Rp 5.000</span>
        </div>
        <div class="flex justify-between">
          <span>Biaya Jasa Aplikasi</span>
          <span>Rp 2.000</span>
        </div>

        <div class="border-t border-black my-2"></div>

        <!-- Total Pembayaran -->
        <div class="flex justify-between font-semibold text-base">
          <span>Total Pembayaran</span>
          <span>Rp 22.000</span>
        </div>
      </div>

      <!-- QR Code -->
      <div class="flex flex-col items-center justify-center text-center">
        <img src="{{ asset('images/qr.png') }}" alt="QRIS" class="w-60 h-60 object-contain" />
        <div class="mt-4 text-gray-600 font-semibold flex items-center justify-center">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-5 h-5 mr-2"> waroeng
        </div>
      </div>

    </div>
  </div>

</div>
@endsection
