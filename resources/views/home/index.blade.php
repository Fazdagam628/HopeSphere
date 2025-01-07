<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center bg-no-repeat m-0" style="background-image: url('/image/assets/BG 3.png');">
    <!-- Navbar Section -->
    <header class="flex items-center justify-between px-6 py-3 shadow-md bg-white drop-shadow-xl relative z-30">

        <!-- Logo Section -->
        <div class="flex items-center space-x-4">
            <img src="/image/logos/SMKN_11 1.png" alt="Logo SMK" class="h-16 md:h-20" />
            <img src="/image/logos/LogolightblueBlue 4000x4000.png" alt="Logo" class="h-16 md:h-20" />
        </div>

        <!-- Navigation Menu for Desktop -->
        <nav class="hidden md:flex items-center space-x-8 bg-gray-100 rounded-lg shadow-xl pr-4 md:pr-6">
            <a href="{{ route('home.index') }}"
                class="btn bg-red-500 text-white text-base md:text-xl rounded-25 px-4 py-2 border-none scale-y-120 hover:bg-red-600 active:bg-red-600 transition-all">
                HOME
            </a>
            <a href="{{ route('about.index') }}"
                class="text-black text-lg md:text-xl font-medium hover:text-red-500 hover:font-semibold active:text-red-500 active:font-semibold transition-all">
                ABOUT
            </a>
            <a href="{{ route('contact.index') }}"
                class="text-black text-lg md:text-xl font-medium hover:text-red-500 hover:font-semibold active:text-red-500 active:font-semibold transition-all">
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
                <li><a href="{{ route('home.index') }}" class="text-black hover:text-red-500">HOME</a></li>
                <li><a href="{{ route('about.index') }}" class="text-black hover:text-red-500">ABOUT</a></li>
                <li><a href="{{ route('contact.index') }}" class="text-black hover:text-red-500">CONTACT</a></li>
            </ul>
        </div>

    </header>

    <div class="relative bg-no-repeat  bg-center h-screen"
        style="background-image: url('/image/assets/Background.png');">
        <!-- Overlay -->
        <div
            class="absolute top-0 left-0 right-0 h-[30%] bg-gradient-to-b from-red-500/70 to-red-700/70 backdrop-blur-md drop-shadow-xl">
            <div
                class="absolute inset-0 flex flex-col items-center justify-center text-white px-4 text-center drop-shadow-xl">
                <div class="bg-white/10 rounded-lg backdrop-blur-xl p-6 shadow-xl max-w-xl">
                    <h1 class="text-4xl font-bold mb-4">SELAMAT DATANG DI PMR</h1>
                    <h2 class="text-2xl font-medium">SMKN 11 SEMARANG</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="m-0 bg-white py-10 drop-shadow-xl"></div>
    <h2 class="text-5xl font-bold m-20 text-center text-red-700 ">Layanan Kita</h2>
    {{-- Container Layanan Utama --}}
    <div class="flex justify-center mb-20">
        {{-- Group 3 Container --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            {{-- Image 1 --}}
            <div class="card shadow-lg">
                <img src="\image\assets\Group 4.svg" alt="group 3 image 1" class="w-full h-auto object-cover">
            </div>
            {{-- Image 2 --}}
            <div class="card shadow-lg">
                <img src="\image\assets\Group 5.svg" alt="group 3 image 2" class="w-full h-auto object-cover">
            </div>
            {{-- Image 3 --}}
            <div class="card shadow-lg">
                <img src="\image\assets\Group 6.svg" alt="group 3 image 3" class="w-full h-auto object-cover">
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
