  
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
    
