<!-- Navbar -->
  <header class="bg-green-300 p-4 flex items-center justify-between">
    <div class="flex items-center space-x-2">
      <div class="w-8 h-8 bg-green-400 text-white flex items-center justify-center rounded-full font-bold">L</div>
      <span class="text-xl font-semibold text-white">Gofood</span>
    </div>

    <!-- Search -->
    <div class="relative w-[500px] mx-auto">
      <i class="bi bi-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
      <input
        type="text"
        placeholder="Cari..."
        class="w-full h-[43px] pl-10 pr-32 border border-green-400 rounded-full focus:outline-none"
      />
      <button
        class="absolute top-1/2 right-2 -translate-y-1/2 h-[35px] px-6 bg-green-500 text-white font-semibold rounded-full hover:bg-green-600 active:bg-white active:text-green-500 transition"
      >
        Cari
      </button>
    </div>

   <div class="flex items-center space-x-4 text-white">
  <!-- Tombol Keranjang -->
  <div class="relative">
    <button class="p-2 bg-green-300 rounded-full">
      <!-- Ikon Keranjang -->
      <svg width="24" height="24" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M29.5901 16.25L30.0051 13.76C30.2757 12.131 30.4111 11.318 29.9768 10.784C29.544 10.25 28.7469 10.25 27.1541 10.25H5.10214C3.50937 10.25 2.71224 10.25 2.27946 10.784C1.84521 11.318 1.98203 12.131 2.25121 13.76L4.04178 24.53C4.63517 28.1 4.93112 29.8835 6.14317 30.9425C7.35374 32 9.0997 32 12.5916 32H16.1281M19.1025 26H31M25.0513 32V20M24.3077 10.25C24.3077 8.06196 23.4459 5.96354 21.9119 4.41637C20.378 2.86919 18.2975 2 16.1281 2C13.9588 2 11.8783 2.86919 10.3443 4.41637C8.81039 5.96354 7.94862 8.06196 7.94862 10.25"
          stroke="white"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </button>
  </div>

  <!-- Ikon Chat di tengah -->
  <div class="relative">
    <button class="p-2 bg-green-300 rounded-full">
      <!-- SVG Ikon Chat -->
      <svg width="24" height="24" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18.092 29.2225C19.3296 29.1379 20.5569 28.9402 21.7585 28.632C23.2426 29.0781 24.8091 29.1791 26.3382 28.9272C26.3992 28.9198 26.4605 28.9152 26.522 28.9135C27.0676 28.9135 27.7833 29.2264 28.8275 29.8854V28.8021C28.8279 28.6133 28.879 28.4282 28.9753 28.2658C29.0716 28.1035 29.2096 27.97 29.375 27.8791C29.83 27.6223 30.2504 27.3335 30.6363 27.0128C32.1577 25.7418 33.0161 24.0444 33.0161 22.2493C33.0161 21.6568 32.9222 21.0662 32.7365 20.5031C33.198 19.6544 33.5656 18.7686 33.8394 17.8456C34.7193 19.146 35.1925 20.681 35.1984 22.2493C35.1984 24.6897 34.0486 26.9659 32.056 28.63C31.7222 28.9077 31.3735 29.1632 31.0098 29.3965V31.9347C31.0098 32.8069 29.989 33.3094 29.2694 32.7893C28.5876 32.2876 27.8829 31.8177 27.1575 31.3813C26.948 31.2605 26.7312 31.1527 26.5083 31.0587C25.903 31.1483 25.2919 31.1934 24.68 31.1936C22.1965 31.1936 19.9008 30.4564 18.092 29.2225ZM4.94929 24.1481C1.81272 21.5219 0 17.9414 0 14.1048C0 6.26727 7.49335 0 16.643 0C25.7946 0 33.2899 6.26532 33.2899 14.1048C33.2899 21.9423 25.7946 28.2076 16.643 28.2076C15.6144 28.2076 14.6008 28.1294 13.6022 27.973C13.172 28.0727 11.4473 29.0837 8.96386 30.8729C8.06435 31.5221 6.78938 30.8964 6.78938 29.8033V25.4758C6.14529 25.0777 5.53097 24.6332 4.95124 24.1461M13.6629 25.3037C13.7385 25.3037 13.8147 25.3096 13.8916 25.3213C14.7912 25.47 15.7083 25.5449 16.643 25.5462C24.3729 25.5462 30.5581 20.374 30.5581 14.1028C30.5581 7.8336 24.3729 2.66139 16.6449 2.66139C8.91693 2.66139 2.72788 7.83751 2.72788 14.1048C2.72788 17.1358 4.17492 19.9907 6.72876 22.1281C7.37276 22.6652 8.07412 23.1475 8.83285 23.5751C9.03866 23.6893 9.21047 23.8561 9.33071 24.0585C9.45096 24.2609 9.51533 24.4915 9.51726 24.7269V27.2221C11.4825 25.9217 12.7751 25.3037 13.6629 25.3037Z" fill="white"/>
      </svg>
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
  </header>