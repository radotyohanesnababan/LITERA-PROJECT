
@extends('userview.index')

@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush
@section('content')
<body class="body">
    <div class="relative mb-10 md:mb-0 md:h-screen">
        <!-- Background Image -->
        <img class="absolute inset-0 sm:h-full w-screen object-cover" src="{{ asset('storage/jumbotron.svg') }}" alt="bg">

        <!-- Overlay and Content -->
        <div class="relative md:absolute w-full md:inset-0 flex flex-col justify-center items-center text-center text-black">
            <img src="{{ asset('storage/Logo2.svg') }}" class="logo-size" alt="Logo">
            <h2 class="font-bold text-xl sm:text-6xl md:text-5xl md:mb-5 xl:text-7xl lg:mt-5 lg:mb-8 three-d-text">JAMINAN KELAS 12</h2>
            <p class="text-size1 font-bold "><span class="text-red-500">FREE </span>1 tahun gapyear apabila belum mendapat</p>
            <p class="text-size2 font-bold">Perguruan Tinggi Negeri</p>
            <a href="https://wa.me/6282281709860?text=Halo,saya ingin mendaftar bimbel!" 
                target="_blank" 
                class="button-size py-1 px-2 bg-yellow-400 hover:bg-yellow-300 text-white md:mt-10 font-bold lg:mt-6 lg:py-3 lg:px-8 rounded-full shadow-button">
                Daftar Sekarang
            </a>
            
        </div>
    </div>

    <!-- Program -->
    <div class="relative h-auto">
        <div class="w-screen-xl mx-auto">
            <div class="relative bg-top md:pb-10">
                <h1 class=" text-xl md:text-4xl md:pt-5 lg:text-5xl font-bold text-[#DAB93C] text-center">Pilihan Program Belajar</h1>
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
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="list-size font-bold leading-tight text-black ms-3">Kelas kecil (maks. 15 orang)</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="list-size font-bold leading-tight text-black ms-3">Kelas 7-8: 2-3x pert/minggu</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="list-size font-bold leading-tight text-black ms-3">Kelas 9: 4x pert/minggu</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="list-size font-bold leading-tight text-black ms-3">Wifi penunjang pembelajaran</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="list-size font-bold leading-tight text-black ms-3">Konsultasi PR Online</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="list-size font-bold leading-tight text-black ms-3">Jadwal belajar intensif</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer flex justify-center">
                            <a href="https://wa.me/6282281709860?text=Halo,saya ingin mendaftar bimbel dengan program SMP" 
                                target="_blank" 
                                class="bg-[#DAB93C] hover:bg-[#FFDD5A] text-white font-bold button-size2">
                                Saya mau daftar
                            </a>
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
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="list-size font-bold leading-tight text-black ms-3">Kelas kecil (maks. 15 orang)</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="list-size font-bold leading-tight text-black ms-3">Kelas 10-11: 2-4x pert/minggu</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="list-size font-bold leading-tight text-black ms-3">Kelas 12: 5-6x pert/minggu</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="list-size font-bold leading-tight text-black ms-3">Wifi penunjang pembelajaran</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="list-size font-bold leading-tight text-black ms-3">Konsultasi PR Online</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="list-size font-bold leading-tight text-black ms-3">Jadwal belajar intensif</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="list-size font-bold leading-tight text-black ms-3">Konsultasi PTN</span>
                            </li>
                            <li class="flex">
                                <svg class="flex-shrink-0 checklist text-[#4BD37B]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="list-size font-bold leading-tight text-black ms-3">Konsultasi Beasiswa</span>
                            </li>
                        </ul>
                        <div class="flex justify-center">
                            <a href="https://wa.me/6282281709860?text=Halo,saya ingin mendaftar bimbel dengan program SMP" 
                                target="_blank" 
                                class="bg-[#DAB93C] hover:bg-[#FFDD5A] text-white font-bold button-size2">
                                Saya mau daftar
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- KEGIATAN -->
    <div class="mt-10">
        <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold text-[#DAB93C] text-center mb-10 md:mb15 lg:mb-20">Kegiatan Akademik</h1>
        <div class="flex flex-wrap justify-center mx-10">
            <!-- Gambar 1 -->
            <figure class="w-1/2 md:w-1/4 mb-5 md:mb-10 xl:mb-15">
                <div class="flex justify-center">
                    <div class="relative k-size1 flex items-center justify-center">
                        <img class="k-size2" src="{{ asset('storage/kegiatan/k1.svg') }}" alt="image description">
                    </div>
                </div>
                <figcaption class="mt-2 max-w-sm text-sm md:text-xl text-center text-black font-bold">KBM Reguler +</figcaption>
                <figcaption class="max-w-sm text-sm md:text-xl text-center text-black font-bold">Post Test</figcaption>
            </figure>
            <!-- Gambar 2 -->
            <figure class="w-1/2 md:w-1/4 mb-5 md:mb-10 xl:mb-15">
                <div class="flex justify-center">
                    <div class="relative k-size1 flex items-center justify-center">
                        <img class="k-size2" src="{{ asset('storage/kegiatan/k2.svg') }}" alt="image description">
                    </div>
                </div>
                <figcaption class="mt-2 max-w-sm text-sm md:text-xl text-center text-black font-bold">Belajar Kelompok Mandiri</figcaption>
            </figure>
            <!-- Gambar 3 -->
            <figure class="w-1/2 md:w-1/4 mb-5 md:mb-10 xl:mb-15">
                <div class="flex justify-center">
                    <div class="relative k-size1 flex items-center justify-center">
                        <img class="k-size2" src="{{ asset('storage/kegiatan/k3.svg') }}" alt="image description">
                    </div>
                </div>
                <figcaption class="mt-2 max-w-sm text-sm md:text-xl text-center text-black font-bold">TO UTBK dan </figcaption>
                <figcaption class=" max-w-sm text-sm md:text-xl text-center text-black font-bold">Review Assesment</figcaption>
            </figure>
            <!-- Gambar 4 -->
            <figure class="w-1/2 md:w-1/4 mb-5 md:mb-10 xl:mb-15">
                <div class="flex justify-center">
                    <div class="relative k-size1 flex items-center justify-center">
                        <img class="k-size2" src="{{ asset('storage/kegiatan/k4.svg') }}" alt="image description">
                    </div>
                </div>
                <figcaption class="mt-2 max-w-sm text-sm md:text-xl text-center text-black font-bold">Kelas Praktek</figcaption>
            </figure>
            <!-- Gambar 5 -->
            <figure class="w-1/2 md:w-1/4 mb-5 md:mb-10 xl:mb-15">
                <div class="flex justify-center">
                    <div class="relative k-size1 flex items-center justify-center">
                        <img class="k-size2" src="{{ asset('storage/kegiatan/k5.svg') }}" alt="image description">
                    </div>
                </div>
                <figcaption class="mt-2 max-w-sm text-sm md:text-xl text-center text-black font-bold">Pendidikan Karakter</figcaption>
            </figure>
            <!-- Gambar 6 -->
            <figure class="w-1/2 md:w-1/4 mb-5 md:mb-10 xl:mb-15">
                <div class="flex justify-center">
                    <div class="relative k-size1 flex items-center justify-center">
                        <img class="k-size2" src="{{ asset('storage/kegiatan/k6.svg') }}" alt="image description">
                    </div>
                </div>
                <figcaption class="mt-2 max-w-sm text-sm md:text-xl text-center text-black font-bold">Kelas UTBK</figcaption>
            </figure>
            <!-- Gambar 7 -->
            <figure class="w-1/2 md:w-1/4 mb-5 md:mb-10 xl:mb-15">
                <div class="flex justify-center">
                    <div class="relative k-size1 flex items-center justify-center">
                        <img class="k-size2" src="{{ asset('storage/kegiatan/k7.svg') }}" alt="image description">
                    </div>
                </div>
                <figcaption class="mt-2 max-w-sm text-sm md:text-xl text-center text-black font-bold">Pendidikan Kesemaptaan</figcaption>
                <figcaption class="max-w-sm text-sm md:text-xl text-center text-black font-bold">(Kedinasan)</figcaption>
            </figure>
            <!-- Gambar 8 -->
            <figure class="w-1/2 md:w-1/4 mb-5 md:mb-10 xl:mb-15">
                <div class="flex justify-center">
                    <div class="relative k-size1 flex items-center justify-center">
                        <img class="k-size2" src="{{ asset('storage/kegiatan/k8.svg') }}" alt="image description">
                    </div>
                </div>
                <figcaption class="mt-2 max-w-sm text-sm md:text-xl text-center text-black font-bold">Konsultasi</figcaption>
            </figure>
        </div>
    </div>

    <!-- METODE -->
    <div class="mt-10 pb-20">
        <h1 class="text-2xl md:text-4xl md:mb-10 lg:text-5xl font-bold text-[#DAB93C] mb-10 text-center">Metode Pembelajaran</h1>
        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="z-10 relative overflow-hidden mx-20 rounded-lg carousel-container">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out" data-carousel-item="active">
                    <figure class="bg-[#26547D] flex flex-col figur-aka">
                        <img src="{{ asset('storage/contoh.png') }}" class="image-size object-cover" alt="Image 1">
                        <figcaption class="caption mt-2 font-bold">
                            Reguler Learning
                        </figcaption>
                    </figure>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <figure class="bg-[#26547D] flex flex-col figur-aka">
                        <img src="{{ asset('storage/contoh.png') }}" class="image-size object-cover" alt="Image 2">
                        <figcaption class="caption mt-2 font-bold">
                            Outdoor Learning
                        </figcaption>
                    </figure>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <figure class="bg-[#26547D] relaative flex flex-col figur-aka">
                        <img src="{{ asset('storage/contoh.png') }}" class="image-size object-cover" alt="Image 3">
                        <figcaption class="caption mt-2 font-bold">
                            Audio Visual Learning
                        </figcaption>
                    </figure>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <figure class="bg-[#26547D] flex flex-col figur-aka">
                        <img src="{{ asset('storage/contoh.png') }}" class="image-size object-cover" alt="Image 4">
                        <figcaption class="caption mt-2 font-bold">
                            Flash Card Learning
                        </figcaption>
                    </figure>
                </div>
            </div>            

            <!-- Slider indicators -->
            <div class="absolute z-20 flex -translate-x-1/2 space-x-3 md:space-x-6 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="control-slider rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="control-slider rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="control-slider rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="control-slider rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="pb-10 md:pb-20 absolute top-0 start-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center inslider1 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="inslider2 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="pb-10 md:pb-20 absolute top-0 end-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center inslider1 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="inslider2 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    <!-- Testimoni -->
    <div class="bg-[#9583A0] py-20">
        <div class="relative flex flex-row justify-center items-center ">
            <div class="relative w-max">
                <!-- Gambar petik1 dan petik2 dengan margin negatif -->
                <img src="{{ asset('storage/testi/petik1.svg') }}" alt="Petik 1" class="absolute petik1 z-0">
                <img src="{{ asset('storage/testi/petik2.svg') }}" alt="Petik 2" class="absolute petik2 z-0">
        
                <p class="text-2xl md:text-4xl lg:text-5xl font-bold text-[#DAB93C] text-center z-20">Apa kata mereka</p>
                <div class="relative text-right z-10">
                    <p class="text-2xl md:text-4xl lg:text-5xl font-bold text-white mb-10 z-20">tentang Litera</p>
                </div>
            </div>
            <div class="pb-14 z-10">
                <p class="text-[#DAB93C] text-tanya font-bold z-20">?</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mx-10">
            <!-- Card 1 -->
            <div class="relative flex flex-row items-stretch rounded-lg md:pr-10 md:mr-10 mb-10 card-size">
                <!-- Bagian Gambar -->
                <img class="absolute object-cover image-size2 rounded-t-lg md:rounded-none md:rounded-s-lg z-10" src="{{ asset('storage/testi/t1.png') }}" alt="">
                
                <!-- Bagian Konten -->
                <div class="flex flex-col justify-between leading-normal w-full relative">
                    <!-- Bagian Informasi Akademik -->
                    <div class="flex testi-card1 rounded-t-xl itmes-center flex-col text-end bg-testi">
                        <p class="text-card1 font-bold text-white">yovanetha maria margareth</p>
                        <p class="text-card1 font-bold text-white">sman 2 tambun selatan</p>
                        <p class="text-card1 font-bold text-white">jurusan keperawatan</p>
                        <p class="text-card1 font-bold text-white">universitas pendidikan indonesia</p>
                    </div>
            
                    <!-- Bagian Testimoni -->
                    <div class="flex items-center text-center rounded-b-xl bg-[#EFE6FF] pl-20 pd-5 h-full">
                        <p class="text-card2 font-bold text-black">
                            "Tentor-tentor di Bimbel Litera seru-seru bingitssssss"
                        </p>
                    </div>
                </div>
            </div>            
        
            <!-- Card 2 -->
            <div class="relative flex flex-row items-stretch rounded-lg md:pr-10 md:ml-10 mb-10 card-size">
                <!-- Bagian Gambar -->
                <img class="absolute object-cover image-size2 rounded-t-lg md:rounded-none md:rounded-s-lg z-10" src="{{ asset('storage/testi/t2.png') }}" alt="">
        
                <!-- Bagian Konten -->
                <div class="flex flex-col justify-between leading-normal w-full relative">
                    <!-- Bagian Informasi Akademik -->
                    <div class="flex testi-card1 rounded-t-xl itmes-center flex-col text-end bg-testi">
                        <p class="text-card1 font-bold text-white">abdurafi zaidan ayyasy</p>
                        <p class="text-card1 font-bold text-white">sman 2 tambun selatan</p>
                        <p class="text-card1 font-bold text-white">jurusan matematika</p>
                        <p class="text-card1 font-bold text-white">universitas brawijaya</p>
                    </div>
        
                    <!-- Bagian Testimoni -->
                    <div class="flex items-center text-center rounded-b-xl bg-[#EFE6FF] pl-20 pd-5 h-full">
                        <p class="text-card2 font-bold text-black">
                            "Alhamdulillah selama bergabung bersama Bimbel Litera aku selalu termotivasi dalam belajar, dan terbantu untuk memahami pelajaran lebih baik, ini semua karena lingkungan belajarnya yang sangat mendukung dibimbing langsung oleh tentor-tentor yang profesional hebat dalam mengajar dan menyesuaikan diri dengan karakter siswa"   
                        </p>
                    </div>
                </div>
            </div>
        
            <!-- Card 3 -->
            <div class="relative flex flex-row items-stretch rounded-lg md:pr-10 md:mr-10 mb-10 card-size">
                <!-- Bagian Gambar -->
                <img class="absolute object-cover image-size2 rounded-t-lg md:rounded-none md:rounded-s-lg z-10" src="{{ asset('storage/testi/t3.png') }}" alt="">
        
                <!-- Bagian Konten -->
                <div class="flex flex-col justify-between leading-normal w-full relative">
                    <!-- Bagian Informasi Akademik -->
                    <div class="flex testi-card1 rounded-t-xl itmes-center flex-col text-end bg-testi">
                        <p class="text-card1 font-bold text-white">indira galuh shauma putri</p>
                        <p class="text-card1 font-bold text-white">sman 4 tambun selatan</p>
                        <p class="text-card1 font-bold text-white">komunikasi digital dan media</p>
                        <p class="text-card1 font-bold text-white">institut pertanian bogor</p>
                    </div>
        
                    <!-- Bagian Testimoni -->
                    <div class="flex items-center text-center rounded-b-xl bg-[#EFE6FF] pl-20 pd-5 h-full">
                        <p class="text-card2 font-bold text-black">
                            “Menurut aku les di Litera bener bener seru banget karena kita bisa deket sama mentor mentornya jadi belajar juga lebih asik dan tidak membosankan. Tidak hanya itu kita juga di bimbing untuk masuk ke jurusan dan universitas yang sesuai dengan keiningan kita.” 
                        </p>
                    </div>
                </div>
            </div>
        
            <!-- Card 4 -->
            <div class="relative flex flex-row items-stretch rounded-lg md:pr-10 md:ml-10 mb-10 card-size">
                <!-- Bagian Gambar -->
                <img class="absolute object-cover image-size2 rounded-t-lg md:rounded-none md:rounded-s-lg z-10" src="{{ asset('storage/testi/t4.png') }}" alt="">
        
                <!-- Bagian Konten -->
                <div class="flex flex-col justify-between leading-normal w-full relative">
                    <!-- Bagian Informasi Akademik -->
                    <div class="flex testi-card1 rounded-t-xl itmes-center flex-col text-end bg-testi">
                        <p class="text-card1 font-bold text-white">jenny dee</p>
                        <p class="text-card1 font-bold text-white">sman 2 lampung</p>
                        <p class="text-card1 font-bold text-white">teknik elektro</p>
                        <p class="text-card1 font-bold text-white">institut teknologi bandung</p>
                    </div>
        
                    <!-- Bagian Testimoni -->
                    <div class="flex items-center text-center rounded-b-xl bg-[#EFE6FF] pl-20 pd-5 h-full">
                        <p class="text-card2 font-bold text-black">
                            "Pelajaran dan pengalaman di program teknik elektro sangat mempersiapkan saya untuk tantangan di dunia profesional."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Footer --}}
    <div class="bg-[#31081F] pt-10 pb-10">
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

