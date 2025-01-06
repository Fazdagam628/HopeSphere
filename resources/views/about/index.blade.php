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
        <h3 class="text-black text-xl  md:text-2xl text-center font-semibold mt-10">Tentang Kami</h3>
        <h2 class="text-red-600 text-3xl md:text-5xl text-center font-bold mt-10">Latar Belakang</h2>
        <div class="my-20 mx-10 px-5 py-5 bg-gray-200 rounded-lg shadow-xl">
            <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia
                volutpat ante at finibus.
                <br>
                Integer eu urna nibh.
                <br>
                Fusce a eros facilisis, eleifend sem et, feugiat nisl. Aliquam rutrum pulvinar
                tellus vel consectetur.
                <br>
                Sed a semper nisl.
                <br>
                Nunc in ex iaculis nisi convallis ultricies.
                <br>
                Donec interdum,
                orci non facilisis rhoncus, lectus velit sagittis nulla, imperdiet tempor ipsum neque vitae quam.
                Praesent lobortis in tortor et accumsan.
                <br>
                Donec neque ex, pellentesque sit amet odio at, tincidunt suscipit urna.
                <br>
                Ut id varius mauris, at blandit
                felis.
                <br>
                Integer egestas sem id massa blandit commodo.
                <br>
                Sed sit amet rhoncus nibh. Curabitur eu dui nunc.
                Duis metus ante, tincidunt eget risus ac, dapibus blandit erat.
                <br>
                Curabitur rutrum vitae velit in
                ultrices. Nulla auctor risus eget augue euismod facilisis.
            </p>
        </div>
    </section>
    <section>
        <h2 class="text-red-600 text-3xl md:text-5xl text-center font-bold m-10">Kegiatan</h2>
        <div class="flex justify-center my-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-24">
                <div class="relative group w-86 h-auto bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
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
                        <p class="font-semithin text-md md:text-xl text-justify text-white p-5">
                            Penyerahan jabatan PMR Wira Karuna SMKN 11 dari angkatan 33 kepada angkatan 34 menandai
                            momen penting dalam perjalanan organisasi. Acara ini menjadi simbol purna tugas bagi
                            angkatan 33 setelah menjalankan tugas dengan dedikasi dan tanggung jawab. Pada saat yang
                            sama, angkatan 34 resmi memulai peran mereka untuk melanjutkan pengabdian di bidang
                            kepalangmerahan. Penyerahan ini mencerminkan semangat angkatan 34 dalam
                            menjaga nama baik serta visi organisasi.
                        </p>
                    </div>
                </div>
                <div class="relative group w-86 h-auto bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
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
                        <p class="font-semithin text-md md:text-xl text-justify text-white p-5">
                            Pelatihan di Waduk Jatibarang menjadi ajang edukasi yang mencakup materi tentang bencana
                            alam dan penanganan patah tulang. Kegiatan ini diikuti oleh perwakilan dari berbagai
                            sekolah, menciptakan suasana kolaboratif dalam belajar.
                            Para peserta tidak hanya mendapatkan teori, tetapi juga praktik langsung untuk meningkatkan
                            kemampuan tanggap darurat mereka. Pelatihan ini bertujuan memperkuat kesadaran dan
                            keterampilan generasi muda dalam menghadapi situasi darurat secara sigap dan profesional.
                        </p>
                    </div>
                </div>
                <div class="relative group w-86 h-auto bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
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
                        <p class="font-semithin text-md md:text-xl text-justify text-white p-5">
                            Poltekkes Semarang mengadakan kunjungan ke SMKN 11 Semarang untuk memberikan edukasi tentang
                            stunting.
                            apKegiatan ini ditujukan kepada anggota PMR sebagai upaya meningkatkan pemahaman mereka
                            terkait masalah gizi dan kesehatan.
                            Dalam sesi ini, peserta mendapatkan pengetahuan mendalam mengenai penyebab, dampak, dan
                            pencegahan stunting.
                            Edukasi ini diharapkan dapat mendorong peran aktif generasi muda dalam meningkatkan
                            kesadaran kesehatan di lingkungan sekitar.
                        </p>
                    </div>
                </div>
                <div class="relative group w-86 h-auto bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
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
                        <p class="font-semithin text-md md:text-xl text-justify text-white p-5">
                            Latihan kolaborasi antara ekstrakurikuler PMR Wira Karuna dan Pecinta Alam SMKN 11 Semarang
                            menjadi ajang saling berbagi ilmu dan pengalaman.
                            Dalam kegiatan ini, masing-masing ekstrakurikuler memberikan materi yang mereka kuasai untuk
                            dipelajari bersama.
                            Pertukaran materi ini menciptakan suasana pembelajaran yang interaktif sekaligus mempererat
                            hubungan antaranggota.
                            Kolaborasi ini diharapkan dapat memperluas wawasan dan meningkatkan kemampuan peserta di
                            bidang masing-masing.
                        </p>
                    </div>
                </div>
                <div class="relative group w-86 h-auto bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
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
                        <p class="font-semithin text-md md:text-xl text-justify text-white p-5">
                            Pemberian materi kepada anggota baru dilakukan untuk mempersiapkan mereka dalam menjalankan
                            tugas di masa depan.
                            Materi yang diberikan mencakup Pertolongan Pertama (PP), penanganan bencana alam, patah
                            tulang, pengenalan obat-obatan, dan topik penting lainnya.
                            Kegiatan ini bertujuan membekali anggota baru dengan pengetahuan dasar yang esensial dalam
                            situasi darurat. Dengan pelatihan ini, diharapkan mereka mampu menjalankan tugas dengan
                            sigap dan penuh tanggung jawab.
                        </p>
                    </div>
                </div>
                <div class="relative group w-86 h-auto bg-gray-200 rounded-lg overflow-hidden shadow-lg cursor-pointer">
                    <!-- Image 6-->
                    <img src="/image/assets/Rectangle 22.svg" alt="Image" class="w-full h-full object-cover">

                    <!-- Description Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent opacity-80 h-1/3 flex flex-col justify-between p-4">
                        <!-- Teks di atas -->
                        <p class="text-white font-semibold text-sm">Header Description</p>
                        <!-- Teks di bawah -->
                        <p class="text-white font-medium text-sm">Aktif Mengikuti acara dari PMI</p>
                    </div>

                    <!-- Detailed Description -->
                    <div
                        class="absolute inset-0 bg-black backdrop-blur-lg text-black text-sm p-auto transform translate-y-full bg-opacity-40 group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                        <p class="font-semithin text-md md:text-xl text-justify text-white p-5">
                            Anggota PMR Wira Karuna SMKN 11 Semarang secara aktif berpartisipasi dalam rapat dan acara
                            yang diselenggarakan oleh PMI.
                            Kehadiran mereka mencerminkan komitmen untuk terus belajar dan mendalami peran mereka dalam
                            bidang kepalangmerahan.
                            Melalui kegiatan ini, anggota PMR mendapatkan wawasan baru serta pengalaman berharga untuk
                            mendukung pengabdian mereka di masyarakat.
                            Partisipasi aktif ini juga menjadi bukti sinergi yang baik antara organisasi
                            sekolah dan PMI.
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
