<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
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

        <!-- Navigation Menu -->
        <nav class="hidden md:flex items-center space-x-8 bg-gray-100 rounded-lg shadow-xl pr-4 md:pr-6 pl-4 md:pl-6">
            <a href="{{ route('home.index') }}"
                class="text-black text-lg md:text-xl font-medium hover:text-red-500 hover:font-semibold active:text-red-500 active:font-semibold transition-all">
                HOME
            </a>
            <a href="{{ route('about.index') }}"
                class="btn bg-red-500 text-white text-base md:text-xl rounded-25 px-4 py-2 border-none scale-y-120 hover:bg-red-600 active:bg-red-600 transition-all">
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
    <section>
        <h3 class="text-black text-lg md:text-xl text-center font-semibold mt-10">Tentang Kami</h3>
        <h2 class="text-red-600 text-lg md:text-7xl text-center font-bold mt-10">Latar Belakang</h2>
        <div class="my-20 mx-10 px-5 py-5 bg-gray-200 rounded-lg">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia volutpat ante at finibus.
                Integer eu urna nibh. Fusce a eros facilisis, eleifend sem et, feugiat nisl. Aliquam rutrum pulvinar
                tellus vel consectetur. Sed a semper nisl. Nunc in ex iaculis nisi convallis ultricies. Donec interdum,
                orci non facilisis rhoncus, lectus velit sagittis nulla, imperdiet tempor ipsum neque vitae quam.
                Praesent lobortis in tortor et accumsan.
                Donec neque ex, pellentesque sit amet odio at, tincidunt suscipit urna. Ut id varius mauris, at blandit
                felis. Integer egestas sem id massa blandit commodo. Sed sit amet rhoncus nibh. Curabitur eu dui nunc.
                Duis metus ante, tincidunt eget risus ac, dapibus blandit erat. Curabitur rutrum vitae velit in
                ultrices. Nulla auctor risus eget augue euismod facilisis.</p>
        </div>
    </section>
    <section>
        <h2 class="text-red-600 text-lg md:text-7xl text-center font-bold m-10">Kegiatan</h2>
        <div class="flex justify-center my-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-24">
                <div class="relative group w-106 h-76 bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
                    <!-- Image 1-->
                    <img src="/image/assets/Rectangle 22.svg" alt="Image" class="w-full h-full object-cover">

                    <!-- Description Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent opacity-80 h-1/3 flex flex-col justify-between p-4">
                        <!-- Teks di atas -->
                        <p class="text-white font-semibold text-sm">Header Description</p>
                        <!-- Teks di bawah -->
                        <p class="text-white font-medium text-sm">Serah Terima Jabatan PMR Wira karuna SMKN 11 Angkatan
                            34</p>
                    </div>

                    <!-- Detailed Description -->
                    <div
                        class="absolute inset-0 bg-black backdrop-blur-lg text-black text-sm p-auto transform translate-y-full bg-opacity-40 group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                        <p class="font-medium text-justify text-white p-5">
                            This is a detailed description that appears when you hover over the image and it covers the
                            entire image.
                        </p>
                    </div>
                </div>
                <div class="relative group w-106 h-76 bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
                    <!-- Image 2-->
                    <img src="/image/assets/Rectangle 22.svg" alt="Image" class="w-full h-full object-cover">

                    <!-- Description Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent opacity-80 h-1/3 flex flex-col justify-between p-4">
                        <!-- Teks di atas -->
                        <p class="text-white font-semibold text-sm">Header Description</p>
                        <!-- Teks di bawah -->
                        <p class="text-white font-medium text-sm">Pelatihan PMI di Waduk Jatibarang</p>
                    </div>

                    <!-- Detailed Description -->
                    <div
                        class="absolute inset-0 bg-black backdrop-blur-lg text-black text-sm p-auto transform translate-y-full bg-opacity-40 group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                        <p class="font-medium text-justify text-white p-5">
                            This is a detailed description that appears when you hover over the image and it covers the
                            entire image.
                        </p>
                    </div>
                </div>
                <div class="relative group w-106 h-76 bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
                    <!-- Image 3-->
                    <img src="/image/assets/Rectangle 22.svg" alt="Image" class="w-full h-full object-cover">

                    <!-- Description Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent opacity-80 h-1/3 flex flex-col justify-between p-4">
                        <!-- Teks di atas -->
                        <p class="text-white font-semibold text-sm">Header Description</p>
                        <!-- Teks di bawah -->
                        <p class="text-white font-medium text-sm">Edukasi Stunting Bersama Poltekes Semarang</p>
                    </div>

                    <!-- Detailed Description -->
                    <div
                        class="absolute inset-0 bg-black backdrop-blur-lg text-black text-sm p-auto transform translate-y-full bg-opacity-40 group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                        <p class="font-medium text-justify text-white p-5">
                            This is a detailed description that appears when you hover over the image and it covers the
                            entire image.
                        </p>
                    </div>
                </div>
                <div class="relative group w-106 h-76 bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
                    <!-- Image 4-->
                    <img src="/image/assets/Rectangle 22.svg" alt="Image" class="w-full h-full object-cover">

                    <!-- Description Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent opacity-80 h-1/3 flex flex-col justify-between p-4">
                        <!-- Teks di atas -->
                        <p class="text-white font-semibold text-sm">Header Description</p>
                        <!-- Teks di bawah -->
                        <p class="text-white font-medium text-sm">Pelatihan Gabungan Dengan Pecinta Alam</p>
                    </div>

                    <!-- Detailed Description -->
                    <div
                        class="absolute inset-0 bg-black backdrop-blur-lg text-black text-sm p-auto transform translate-y-full bg-opacity-40 group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                        <p class="font-medium text-justify text-white p-5">
                            This is a detailed description that appears when you hover over the image and it covers the
                            entire image.
                        </p>
                    </div>
                </div>
                <div class="relative group w-106 h-76 bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
                    <!-- Image 5-->
                    <img src="/image/assets/Rectangle 22.svg" alt="Image" class="w-full h-full object-cover">

                    <!-- Description Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent opacity-80 h-1/3 flex flex-col justify-between p-4">
                        <!-- Teks di atas -->
                        <p class="text-white font-semibold text-sm">Header Description</p>
                        <!-- Teks di bawah -->
                        <p class="text-white font-medium text-sm">Pelatihan Angkatan Baru</p>
                    </div>

                    <!-- Detailed Description -->
                    <div
                        class="absolute inset-0 bg-black backdrop-blur-lg text-black text-sm p-auto transform translate-y-full bg-opacity-40 group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                        <p class="font-medium text-justify text-white p-5">
                            This is a detailed description that appears when you hover over the image and it covers the
                            entire image.
                        </p>
                    </div>
                </div>
                <div class="relative group w-106 h-76 bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
                    <!-- Image 6-->
                    <img src="/image/assets/Rectangle 22.svg" alt="Image" class="w-full h-full object-cover">

                    <!-- Description Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent opacity-80 h-1/3 flex flex-col justify-between p-4">
                        <!-- Teks di atas -->
                        <p class="text-white font-semibold text-sm">Header Description</p>
                        <!-- Teks di bawah -->
                        <p class="text-white font-medium text-sm">Aktif Mengikuti Forum Diskusi</p>
                    </div>

                    <!-- Detailed Description -->
                    <div
                        class="absolute inset-0 bg-black backdrop-blur-lg text-black text-sm p-auto transform translate-y-full bg-opacity-40 group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                        <p class="font-medium text-justify text-white p-5">
                            This is a detailed description that appears when you hover over the image and it covers the
                            entire image.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer class="footer footer-center bg-white text-black p-4 drop-shadow-xl">
        <aside>
            <p>Copyright &copy; 2025 - All right reserved</p>
        </aside>
    </footer>
</body>

</html>
