@extends('userview.index')

@push('styles')
    <link href="{{ asset('css/profil.css') }}" rel="stylesheet">
@endpush

@section('content')
<body class="body">
    <div>
        <h1 class="judul text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-center">Manajemen</h1>
    
        <div class="c-manajemen">
            <!-- Gambar 1 -->
            <div class="text-center flex flex-col items-center ">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/manajemen/m1.png') }}" alt="Deskripsi Gambar 1" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Viola Arsa Handhiny, A.Md.</p>
                    <p class="jabatan">Administrator</p>
                </div>
            </div>
            
            <!-- Gambar 2 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/manajemen/m2.png') }}" alt="Deskripsi Gambar 2" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Bayu Awifan Dwijaya, S.Si.</p>
                    <p class="jabatan">Manager</p>
                </div>
            </div>
    
            <!-- Gambar 3 -->
            <div class="text-center flex flex-col items-center ">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/manajemen/m3.png') }}" alt="Deskripsi Gambar 3" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Meliana Ivana Ramadhanti S.Pd.</p>
                    <p class="jabatan">Akademik</p>
                </div>
            </div>
    
            <!-- Gambar 4 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/manajemen/m4.png') }}" alt="Deskripsi Gambar 4" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Tino Kristianto</p>
                    <p class="jabatan">Logistik</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-10 xl:py-10">
        <h1 class="judul text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-center">Tenaga Tutor</h1>
    
        <div class="c-tentor">
            <!-- Gambar 1 -->
            <div class="text-center flex flex-col items-center ">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t1.png') }}" alt="Deskripsi Gambar 1" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Yuliani Hasmita, S.Si.</p>
                    <p class="jabatan">Tentor Bahasa Inggris</p>
                </div>
            </div>
            
            <!-- Gambar 2 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t2.png') }}" alt="Deskripsi Gambar 2" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    
                    <p class="nama">Nurainy Dwi Novitasari, S.Pd.</p>
                    <p class="jabatan">Tentor Matematika</p>
                </div>
            </div>
    
            <!-- Gambar 3 -->
            <div class="text-center flex flex-col items-center ">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t3.png') }}" alt="Deskripsi Gambar 3" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Yuliana Eka, S.T.</p>
                    <p class="jabatan">Tentor Kimia</p>
                </div>
            </div>
    
            <!-- Gambar 4 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t4.png') }}" alt="Deskripsi Gambar 4" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Amir Budiono, S.Pd.</p>
                    <p class="jabatan">Tentor Matematika</p>
                </div>
            </div>

            <!-- Gambar 5 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t5.png') }}" alt="Deskripsi Gambar 5" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Meliana Ivana Ramadhanti, S.Pd.</p>
                    <p class="jabatan">Tentor Matematika</p>
                </div>
            </div>

            <!-- Gambar 6 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t6.png') }}" alt="Deskripsi Gambar 6" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Anisa Nurul Hikmah, S.Si.</p>
                    <p class="jabatan">Tentor Kimia</p>
                </div>
            </div>

            <!-- Gambar 7 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t7.png') }}" alt="Deskripsi Gambar 7" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Bayu Awifan Dwijaya, S.Si.</p>
                    <p class="jabatan">Tentor Biologi &  Geografi</p>
                </div>
            </div>

            <!-- Gambar 8 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t8.png') }}" alt="Deskripsi Gambar 8" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Yanita Pratiwi, S.Pd.</p>
                    <p class="jabatan">Tentor Fisika</p>
                </div>
            </div>

            <!-- Gambar 9 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t9.png') }}" alt="Deskripsi Gambar 9" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Nanda Afifa Rahma, S.Pd.</p>
                    <p class="jabatan">Tentor Bahasa Indonesia</p>
                </div>
            </div>

            <!-- Gambar 10 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t10.png') }}" alt="Deskripsi Gambar 10" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Dian Karina, S.Pd.</p>
                    <p class="jabatan">Tentor Matematika</p>
                </div>
            </div>

            <!-- Gambar 11 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t11.png') }}" alt="Deskripsi Gambar 11" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Panggih Haryo Priambodo, S.Pd.</p>
                    <p class="jabatan"></p>
                </div>
            </div>

            <!-- Gambar 12 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t12.png') }}" alt="Deskripsi Gambar 12" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Aji Pancer Agung Rino, S.Pd.</p>
                    <p class="jabatan">Tentor Fisika</p>
                </div>
            </div>

            <!-- Gambar 13 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t13.png') }}" alt="Deskripsi Gambar 13" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Lilis Ratnawati, S.Pd.</p>
                    <p class="jabatan">Tentor Ekonomi</p>
                </div>
            </div>

            <!-- Gambar 14 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t14.png') }}" alt="Deskripsi Gambar 14" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Dwi Rahmat Apriliani, S.Pd.</p>
                    <p class="jabatan">Tentor PPKN</p>
                </div>
            </div>

            <!-- Gambar 15 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t15.png') }}" alt="Deskripsi Gambar 15" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Gita Merdayanti, S.Pd.</p>
                    <p class="jabatan">Tentor Geografi</p>
                </div>
            </div>

            <!-- Gambar 16 -->
            <div class="text-center flex flex-col items-center">
                <div class="bg-image flex items-center justify-center">
                    <img class="img-size" src="{{ asset('storage/profile/tentor/t16.png') }}" alt="Deskripsi Gambar 16" class="w-full h-full object-cover">
                </div>
                <div class="bg-capt">
                    <p class="nama">Retno Widiastuti, S.Pd., Gr.</p>
                    <p class="jabatan">Tentor Bahasa Indonesia</p>
                </div>
            </div>

        </div>
    </div>
    

    <div class="bg-[#31081F] py-10">
        <h1 class="ml-4 md:ml-10 text-3xl md:text-5xl font-bold text-[#DAB93C]">Punya Pertanyaan?</h1>
        
        <div class="text-white py-10">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="ml-4 md:ml-10 mb-10">
                        <h2 class="text-2xl md:text-3xl font-bold mb-6">Ikuti Kami</h2>
                        <div class="flex flex-col space-y-6 md:space-y-10">
                            <a href="#" class="flex items-center space-x-4 text-white hover:text-blue-500">
                                <img src="{{ asset('storage/footer/icon-wa.svg') }}" alt="WhatsApp Icon" class="w-8 h-8 md:w-10 md:h-10">
                                <span class="text-lg md:text-2xl">WhatsApp (Admin)</span>
                            </a>
                            <a href="#" class="flex items-center space-x-4 text-white hover:text-blue-500">
                                <img src="{{ asset('storage/footer/icon-ig.svg') }}" alt="Instagram Icon" class="w-8 h-8 md:w-10 md:h-10">
                                <span class="text-lg md:text-2xl">Instagram</span>
                            </a>
                            <a href="#" class="flex items-center space-x-4 text-white hover:text-blue-500">
                                <img src="{{ asset('storage/footer/icon-loc.svg') }}" alt="Location Icon" class="w-8 h-8 md:w-10 md:h-10">
                                <span class="text-lg md:text-2xl">
                                    Jl. KH. Mas’ud Ruko Simpang Lima (depan NICESO), 
                                    Sasak Tiga Tridaya Sakti, Tambun Selatan, Kab. Bekasi
                                    Jawa Barat 14510
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="mx-4 md:mx-20">
                        <h2 class="text-2xl md:text-3xl font-bold text-end mb-6">Lokasi</h2>
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0869920554235!2d-122.08424948468138!3d37.42199997982595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5b5a3691911%3A0x1ec7eec5e8c0d476!2sGoogleplex!5e0!3m2!1sen!2sus!4v1614633062991!5m2!1sen!2sus" 
                            width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            class="rounded-lg shadow-lg md:mx-10">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection
