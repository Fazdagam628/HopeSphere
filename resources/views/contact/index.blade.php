<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center bg-no-repeat m-0" style="background-image: url('/image/assets/BG 3.avif');" loading="lazy">
    <!-- Navbar Section -->
    <header class="flex items-center justify-between px-6 py-3 shadow-md bg-white drop-shadow-xl relative z-30">
        <!-- Logo Section -->
        <div class="flex items-center space-x-4">
            <img src="/image/logos/SMKN_11 1.avif" alt="Logo SMK" class="h-16 md:h-20" loading="lazy" />
            <img src="/image/logos/LogolightblueBlue 4000x4000.avif" alt="Logo" class="h-16 md:h-20"
                loading="lazy" />
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex items-center space-x-8 bg-gray-100 rounded-lg shadow-xl pr-4 md:pr-6 pl-4 md:pl-6">
            <a href="{{ route('home') }}"
                class="text-black text-lg md:text-xl font-medium hover:text-red-500 hover:font-semibold active:text-red-500 active:font-semibold transition-all">
                HOME
            </a>
            <a href="{{ route('about.index') }}"
                class="text-black text-lg md:text-xl font-medium hover:text-red-500 hover:font-semibold active:text-red-500 active:font-semibold transition-all">
                ABOUT
            </a>
            <a href="{{ route('contact.index') }}"
                class="btn bg-red-500 text-white text-base md:text-xl rounded-25 px-4 py-2 border-none scale-y-120 hover:bg-red-600 active:bg-red-600 transition-all">
                CONTACT
            </a>
        </nav>
        <!-- Hamburger Menu for Mobile -->
        <div class="dropdown dropdown-end md:hidden">
            <button class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul class="dropdown-content menu p-2 shadow bg-gray-200 rounded-box w-52">
                <li><a href="{{ route('home') }}" class="text-black hover:text-red-500">HOME</a></li>
                <li><a href="{{ route('about.index') }}" class="text-black hover:text-red-500">ABOUT</a></li>
                <li><a href="{{ route('contact.index') }}" class="text-black hover:text-red-500">CONTACT</a></li>
            </ul>
        </div>
    </header>
    <h3 class="text-black text-xl  md:text-2xl text-center font-semibold mt-10">Kontak Kami</h3>
    {{-- Container --}}
    <div class="flex flex-col md:flex-row items-center justify-center gap-6 px-4 md:px-16 m-10">
        {{-- Alamat --}}
        <div class="card bg-gray-200 shadow-xl rounded-lg flex flex-col items-center p-6 w-full md:w-1/3">
            <div class="text-4xl mb-4">
                <img src="/image/assets/Peta.avif" alt="Map" loading="lazy">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <h3 class="font-semibold text-xl mb-2">Alamat</h3>
            <p class="text-center text-gray-600">
                WCCC+WP8, Jl. Grafika Raya, Gedawang, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50266
            </p>
        </div>
        {{-- Telepon  --}}
        <div class="card bg-gray-200 shadow-xl rounded-lg flex flex-col items-center p-6 w-full md:w-1/3">
            <div class="text-4xl mb-4">
                <img src="/image/assets/HP.avif" alt="Smartphone" loading="lazy">
                <i class="fas fa-phone"></i>
            </div>
            <h3 class="font-semibold text-xl mb-2">Telepon</h3>
            <p class="text-center text-gray-600">
                +62 85953857394
            </p>
            <br>
        </div>
        {{-- Email  --}}
        <div class="card bg-gray-200 shadow-xl rounded-lg flex flex-col items-center p-6 w-full md:w-1/3">
            <div class="text-4xl mb-4">
                <img src="/image/assets/Email.avif" alt="Email" loading="lazy">
                <i class="fas fa-envelope"></i>
            </div>
            <h3 class="font-semibold text-xl mb-2">Email</h3>
            <p class="text-center text-gray-600">
                KimUDIN@gmail.com
            </p>
            <br>
        </div>
    </div>
    <h3 class="text-black text-xl  md:text-2xl text-center font-semibold mt-10">Lokasi</h3>
    <!-- Map Container -->
    <div class="flex justify-center items-center my-10 mx-4">
        <div class="rounded-lg shadow-2xl overflow-hidden max-w-5xl w-full bg-white border-2 border-gray-200">
            <!-- Map Heading -->
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white text-center py-4">
                <h4 class="text-lg md:text-xl font-bold">SMK Negeri 11 Semarang</h4>
                <p class="text-sm md:text-base">Jl. Grafika Raya, Gedawang, Banyumanik, Kota Semarang</p>
            </div>
            <!-- Embedded Map -->
            <iframe class="w-full h-96 md:h-[500px]"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.4156527347686!2d110.41924147454317!3d-7.077715169374335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70893590f8415b%3A0xe576f55c68c1c5a0!2sSMK%20Negeri%2011%20Semarang!5e0!3m2!1sid!2sid!4v1736178948136!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <!-- Footer Info -->
            <div class="bg-gray-100 py-4 text-center text-sm md:text-base font-medium text-gray-600">
                Klik pada peta untuk melihat detail lokasi lebih lengkap di Google Maps.
            </div>
        </div>
    </div>
    <footer class="footer footer-center bg-white text-black p-4 drop-shadow-xl">
        <aside>
            <p>Copyright &copy; 2025 - All right reserved</p>
        </aside>
    </footer>
</body>

</html>
