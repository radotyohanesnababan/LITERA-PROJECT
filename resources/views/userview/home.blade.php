@extends('userview.index')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush
@section('content')
    <body class="body">
        <div class="relative mb-10 md:mb-0 md:h-screen">
            <!-- Background Image -->
            <img class="absolute inset-0 sm:h-full w-screen object-cover" src="{{ asset('storage/jumbotron.svg') }}"
                alt="bg">

            <!-- Overlay and Content -->
            <div
                class="relative md:absolute w-full md:inset-0 flex flex-col justify-center items-center text-center text-black">
                <img src="{{ asset('storage/Logo-2.svg') }}" class="logo-size" alt="Logo">
                <h2 class="font-bold text-xl sm:text-6xl md:text-5xl md:mb-5 xl:text-7xl lg:mt-5 lg:mb-8 three-d-text">
                    JAMINAN KELAS 12</h2>
                <p class="text-size1 font-bold "><span class="text-red-500">FREE </span>1 tahun gapyear apabila belum
                    mendapat</p>
                <p class="text-size2 font-bold">Perguruan Tinggi Negeri</p>
                @if ($profil)
                    <a href="{{ $profil->whatsapp_link }}?text=Halo, saya ingin mendaftar bimbel!" target="_blank"
                        class="button-size py-1 px-2 bg-yellow-400 hover:bg-yellow-300 text-white md:mt-10 font-bold lg:mt-6 lg:py-3 lg:px-8 rounded-full shadow-button">
                        Daftar Sekarang
                    </a>
                @endif

            </div>
        </div>

        <!-- Program -->
        <div id="program" class="relative h-auto">
            <div class="w-screen-xl mx-auto">
                <div class="relative bg-top md:pb-10">
                    <h1 class=" text-xl md:text-4xl md:pt-5 lg:text-5xl font-bold text-[#DAB93C] text-center">Pilihan
                        Program Belajar</h1>
                </div>
                <div class="bg-blur-bottom flex flex-col md:flex-row md:space-x-16 justify-center items-stretch-md pb-20">
                    <!-- SMP Program -->
                    <div class="relative w-2/3 md:w-2/3 lg:w-1/3 flex flex-col justify-center mx-5">
                        <div class="absolute top-0 left-0 right-0 flex items-center justify-center mx-5 shadow-card1">
                            <h4 class="text-kelas text-white font-bold">SMP</h4>
                        </div>
                        <div class="flex flex-col flex-grow shadow-card2">
                            <div class="flex-grow">
                                <ul role="list" class="space-y-3 mx-3 mt-10 mb-5 xl:mt-18">
                                    @foreach ($programSMP as $item)
                                        <li class="flex items-center">
                                            <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span
                                                class="list-size font-bold leading-tight text-black ms-3">{{ $item->deskripsi }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-footer flex justify-center">
                                @if ($profil)
                                    <a href="{{ $profil->whatsapp_link }}?text=Halo, saya ingin mendaftar bimbel program SMP"
                                        target="_blank"
                                        class="bg-[#DAB93C] hover:bg-[#FFDD5A] text-white font-bold button-size2">
                                        Saya mau daftar
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- SMA Program -->
                    <div class="relative w-2/3 md:w-2/3 lg:w-1/3 flex flex-col mx-5">
                        <div class="absolute top-0 left-0 right-0 flex items-center justify-center mx-5 shadow-card1">
                            <h4 class="text-kelas text-white font-bold">SMA</h4>
                        </div>
                        <div class="flex-grow shadow-card2">
                            <ul role="list" class="space-y-3 mx-3 mt-10 mb-5 xl:mt-18">
                                @foreach ($programSMA as $item)
                                    <li class="flex items-center">
                                        <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span
                                            class="list-size font-bold leading-tight text-black ms-3">{{ $item->deskripsi }}</span>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="flex justify-center">
                                @if ($profil)
                                    <a href="{{ $profil->whatsapp_link }}?text=Halo, saya ingin mendaftar bimbel program SMA"
                                        target="_blank"
                                        class="bg-[#DAB93C] hover:bg-[#FFDD5A] text-white font-bold button-size2">
                                        Saya mau daftar
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- KEGIATAN -->
        <div id="kegiatan" class="mt-10">
            <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold text-[#DAB93C] text-center mb-10 md:mb15 lg:mb-20">
                Kegiatan Akademik</h1>
            <div class="flex flex-wrap justify-center mx-10">
                <!-- Gambar 1 -->
                @foreach ($kegiatan as $item)
                    <figure class="w-1/2 md:w-1/4 mb-5 md:mb-10 xl:mb-15">
                        <div class="flex justify-center">
                            <div class="relative k-size1 flex items-center justify-center">
                                <img class="k-size2" src="{{ asset('storage/kegiatan/' . $item->foto) }}"
                                    alt="{{ $item->deskripsi }}">
                            </div>
                        </div>
                        <figcaption class="mt-2 max-w-sm text-sm md:text-xl text-center text-black font-bold">
                            {{ $item->deskripsi }}
                        </figcaption>

                    </figure>
                @endforeach
            </div>
        </div>

        <!-- METODE -->
        <div class="mt-10 pb-20">
            <h1 class="text-2xl md:text-4xl md:mb-10 lg:text-5xl font-bold text-[#DAB93C] mb-10 text-center">Metode Pembelajaran</h1>
            <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="z-10 relative overflow-hidden mx-20 rounded-lg carousel-container">
                    <!-- Loop through items -->
                    @foreach ($metode as $index => $item)
                        <div class="duration-700 ease-in-out" data-carousel-item="{{ $index === 0 ? 'active' : '' }}">
                            <a href="{{ url(Str::slug($item->deskripsi)) }}">
                                <figure class="bg-[#26547D] flex flex-col figur-aka">
                                    <img src="{{ asset('storage/metode/' . $item->foto) }}" class="image-size object-cover"
                                        alt="Image {{ $item->id }}">
                                    <figcaption class="caption mt-2 font-bold">
                                        {{ $item->deskripsi }}
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    @endforeach
                </div>
        
                <!-- Slider indicators -->
                <div class="absolute z-20 flex -translate-x-1/2 space-x-3 md:space-x-6 rtl:space-x-reverse bottom-5 left-1/2">
                    @foreach ($metode as $index => $item)
                        <button type="button" class="control-slider rounded-full"
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"
                            data-carousel-slide-to="{{ $index }}"></button>
                    @endforeach
                </div>
        
                <!-- Slider controls -->
                <button type="button"
                    class="pb-10 md:pb-20 absolute top-0 start-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center inslider1 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="inslider2 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="pb-10 md:pb-20 absolute top-0 end-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center inslider1 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="inslider2 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        

        <!-- Testimoni -->
        <div id="testimoni" class="bg-[#9583A0]">
            <div class="relative flex flex-row justify-center items-center ">
                <div class="relative w-max">
                    <!-- Gambar petik1 dan petik2 dengan margin negatif -->
                    <img src="{{ asset('storage/testi/petik1.svg') }}" alt="Petik 1" class="absolute petik1 z-0">
                    <img src="{{ asset('storage/testi/petik2.svg') }}" alt="Petik 2" class="absolute petik2 z-0">

                    <p class="text-2xl md:text-4xl lg:text-5xl font-bold text-[#DAB93C] text-center z-20">Apa kata mereka
                    </p>
                    <div class="relative text-right z-10">
                        <p class="text-2xl md:text-4xl lg:text-5xl font-bold text-white mb-10 z-20">tentang AlphaPro</p>
                    </div>
                </div>
                <div class="pb-14 z-10">
                    <p class="text-[#DAB93C] text-tanya font-bold z-20">?</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mx-10">
                @foreach ($testi as $item)
                    <div class="relative flex flex-row items-stretch rounded-lg md:pr-10 md:mr-10 mb-10 card-size">
                        <!-- Bagian Gambar -->
                        <img class="absolute object-cover image-size2 rounded-t-lg md:rounded-none md:rounded-s-lg z-10"
                            src="{{ asset('storage/testi/' . $item->foto) }}" alt="">

                        <!-- Bagian Konten -->
                        <div class="flex flex-col justify-between leading-normal w-full relative">
                            <!-- Bagian Informasi Akademik -->
                            <div class="flex testi-card1 rounded-t-xl itmes-center flex-col text-end bg-testi">
                                <p class="text-card1 font-bold text-white">{{ $item->nama }}</p>
                                <p class="text-card1 font-bold text-white">{{ $item->asal_sekolah }}</p>
                                <p class="text-card1 font-bold text-white">{{ $item->program_studi }}</p>
                                <p class="text-card1 font-bold text-white">{{ $item->universitas }}</p>
                            </div>

                            <!-- Bagian Testimoni -->
                            <div class="flex items-center text-center rounded-b-xl bg-[#EFE6FF] pl-20 pd-5 h-full">
                                <p class="text-card2 font-bold text-black">
                                    {{ $item->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Footer --}}
        <div id="kontak" class="bg-[#31081F] pt-10 pb-10">
            <h1 class="ml-4 md:ml-10 text-3xl md:text-5xl font-bold text-[#DAB93C]">Punya Pertanyaan?</h1>

            <div class="text-white py-10">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="ml-4 md:ml-10 mb-10">
                            <h2 class="text-2xl md:text-3xl font-bold mb-6">Ikuti Kami</h2>
                            <div class="flex flex-col space-y-6 md:space-y-10">
                                @if ($profil)
                                    <a href="{{ $profil->whatsapp_link }}"
                                        class="flex items-center space-x-4 text-white hover:text-blue-500">
                                        <img src="{{ asset('storage/footer/icon-wa.svg') }}" alt="WhatsApp Icon"
                                            class="w-8 h-8 md:w-10 md:h-10">
                                        <span class="text-lg md:text-2xl">WhatsApp (Admin)</span>
                                    </a>
                                    <a href="{{ $profil->instagram_link }}"
                                        class="flex items-center space-x-4 text-white hover:text-blue-500">
                                        <img src="{{ asset('storage/footer/icon-ig.svg') }}" alt="Instagram Icon"
                                            class="w-8 h-8 md:w-10 md:h-10">
                                        <span class="text-lg md:text-2xl">Instagram</span>
                                    </a>
                                    <a href="#"
                                        class="flex items-center space-x-4 text-white hover:text-blue-500">
                                        <img src="{{ asset('storage/footer/icon-loc.svg') }}" alt="Location Icon"
                                            class="w-8 h-8 md:w-10 md:h-10">
                                        <span class="text-lg md:text-2xl">
                                            {{ $profil->alamat }}
                                        </span>
                                    </a>
                                @endif

                            </div>
                        </div>
                        <div class="mx-4 md:mx-20">
                            <h2 class="text-2xl md:text-3xl font-bold text-end mb-6">Lokasi</h2>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0869920554235!2d-122.08424948468138!3d37.42199997982595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5b5a3691911%3A0x1ec7eec5e8c0d476!2sGoogleplex!5e0!3m2!1sen!2sus!4v1614633062991!5m2!1sen!2sus"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                class="rounded-lg shadow-lg md:mx-10">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            

    </body>
@endsection
