<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satoshi:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>
<body class="">
    <!-- Header atau Navbar -->
    <header class="bg-white">
      {{-- <div class="container mx-auto p-4 sm:p-2 w-full flex justify-between items-center">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse pl-14">
          <img src="{{ asset('image/logo-1 1.png') }}" class="h-8" alt="Logo" />
        </a>
        <nav class="justify-end items-center space-x-4 hidden md:flex w-11/12">
          <a href="{{ route('about') }}" class="hover:text-gray-200 p-2 rounded leading-[28px] text-center text-[18px] font-[700] font-satoshi">About</a>
          <a href="{{ route('matchmaking') }}" class="hover:text-gray-200 p-2 rounded leading-[28px] text-center text-[18px] font-[700] font-satoshi">Matchmaking</a>
          <a href="{{ route('insight') }}" class="hover:text-gray-200 p-2 rounded leading-[28px] text-center text-[18px] font-[700] font-satoshi">Insights</a>
          <a href="{{ route('event') }}" class="hover:text-gray-200 p-2 rounded leading-[28px] text-center text-[18px] font-[700] font-satoshi">Events</a>
          <a href="{{ route('player') }}" class="hover:text-gray-200 p-2 rounded leading-[28px] text-center text-[18px] font-[700] font-satoshi">Players</a>
          <button id="languageButton" class="flex items-center space-x-2 hover:bg-gray-100 text-black w-24 rounded-[60px] px-[8px] py-[8px] pr-[16px] ml-4 border-[1px] border-black">
            <img src="{{ asset('image/Flag.png') }}" class="h-8" alt="Flag" />
            <span class="text-lg font-semibold leading-7">EN</span>
          </button>
        </nav>
        <!-- Hamburger Menu for Mobile -->
        <div class="md:hidden flex items-center">
          <button id="hamburgerButton" class="text-gray-500 hover:text-gray-800 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div> --}}
      <div class="flex flex-row gap-11 flex-wrap text-gray-500">
        <a href="{{ route('index')}}" class="hover:text-red-800">Home</a>
        <a href="{{ route('about')}}" class="hover:text-red-800">About</a>
        <a href="{{ route('galery')}}" class="hover:text-red-800">Galery</a>
        <a href="{{ route('contact')}}" class="hover:text-red-800">Contact</a>
        <a href="{{ route('artikel')}}" class="hover:text-red-800">Artikel</a>
        <a href="{{ route('layanan')}}" class="hover:text-red-800">Service</a>
        <a href="{{ route('login')}}" class="hover:text-red-800">Login</a>
        <a href="#" class="hover:text-red-800">Profil</a>
        {{-- <a href="{{ route('dashboard')}}" class="hover:text-red-800">Admin</a> --}}
        <a href="{{ route('homeAdmin')}}" class="hover:text-red-800">Mimin</a>
      </div>

    </header>


    <!-- Konten spesifik halaman -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <footer>
      <div class="container mx-auto mt-14 flex flex-row justify-between items-start gap-4 my-20">
        <div class="flex flex-col items-start">
          <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-36" alt="Gambar Galeri">
          <h4 class="text-blue-400 font-medium text-2xl mt-2">Spesialis motor injeksi produksi Jepang</h4>
          <span class="font-medium text-gray-600 text-xl mt-1">Jl. Raya Kedungasem No. 19 A, Rungkut, Surabaya</span>
        </div>
    
        <div class="flex flex-col items-start">
          <h4 class="text-gray-400 text-xl font-semibold mb-2">LAYANAN</h4>
          <span class="mb-1 text-lg">&gt; Tune up dan Ganti Oli</span>
          <span class="mb-1 text-lg">&gt; Mesin dan Transmisi</span>
          <span class="mb-1 text-lg">&gt; Ban dan Velg</span>
          <span class="mb-1 text-lg">&gt; Sistem Rem</span>
          <span class="mb-1 text-lg">&gt; Sistem Kelistrikan</span>
        </div>
    
        <div class="flex flex-col items-start">
          <h4 class="text-gray-400 text-xl font-semibold mb-2">TIPS MOTOR DARI ...</h4>
          <span class="mb-1 text-lg">&gt; Tips Mesin</span>
          <span class="mb-1 text-lg">&gt; Tips Kelistrikan</span>
          <span class="mb-1 text-lg">&gt; Tips servis dan Perawatan Rutin</span>
          <span class="mb-1 text-lg">&gt; Tips Perawatan Rantai dan Belt</span>
          <span class="mb-1 text-lg">&gt; Tips Cek Sistem Rem</span>
          <span class="mb-1 text-lg">&gt; Tips Menggunakan Bahan Bakar Yang Tepat</span>
        </div>
    
        <div class="flex flex-col items-start">
          <h4 class="text-gray-400 text-xl font-semibold mb-2">FOLLOW ...</h4>
          <div class="flex flex-row gap-2">
            <a href="https://www.instagram.com/username_anda" target="_blank">
              <i class="fa-brands fa-instagram text-3xl text-gray-700"></i>
            </a>
            <a href="https://www.youtube.com/channel/your_channel" target="_blank">
              <i class="fa-brands fa-youtube text-3xl text-gray-700"></i>
            </a>
            <a href="https://www.facebook.com/yourprofile" target="_blank">
              <i class="fa-brands fa-facebook text-3xl text-gray-700"></i>
            </a>
            <a href="https://wa.me/yourwhatsappphone" target="_blank">
              <i class="fa-brands fa-whatsapp text-3xl text-gray-700"></i>
            </a>
          </div>
        </div>        
        <button id="backToTop" class="fixed bottom-5 right-5 bg-gray-500 text-white p-3 rounded-lg shadow-lg hover:bg-gray-800">
          <i class="fa-solid fa-arrow-up"></i>
        </button>        
      </div>
      <div class="bg-gray-200 text-center flex flex-col">
        <span class="text-gray-500">Copyright © 2020 Bengkel Motor BOP</span>
        <span class="text-gray-500">Website by Circle Digital Media</span>
      </div>
    </footer>
    
    



<script>
  const backToTopButton = document.getElementById("backToTop");
    
  backToTopButton.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});
</script>

<script>
  document.getElementById("booking-button").addEventListener("click", function () {
      alert("Silakan register terlebih dahulu, lalu login untuk melanjutkan booking.\nKlik OK untuk menuju halaman pendaftaran.");
      window.location.href = "/register"; 
  });
</script>



    
@yield('scripts')
</body>
</html>
