@extends('userview.index')

@section('content')

    <body class="bg-white">
        <div>
            <h1 class="text-[#31081F] py-10 md:py-20 font-bold text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-center">
                GALERI KEGIATAN</h1>
        </div>

        <div class="pb-5 md:pb-20">
            <a href="/praktek"
                class="block text-[#31081F] font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl text-center pb-5 hover:underline">
                Kelas Praktek
            </a>
            <a href="/outbond"
                class="block text-[#31081F] font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl text-center pb-5 hover:underline">
                Outbond
            </a>
            <a href="/partnership"
                class="block text-[#31081F] font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl text-center pb-5 hover:underline">
                Partnership
            </a>
            <a href="/bukber"
                class="block text-[#31081F] font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl text-center pb-5 hover:underline">
                Buka Puasa Bersama
            </a>
            {{-- <a href="/reguler"
                class="block text-[#31081F] font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl text-center pb-5 hover:underline">
                Reguler Learning
            </a>
            <a href="/outdoor"
                class="block text-[#31081F] font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl text-center pb-5 hover:underline">
                Outdoor Learning
            </a>
            <a href="/audio"
                class="block text-[#31081F] font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl text-center pb-5 hover:underline">
                Audio Visual Learning
            </a>
            <a href="/flashcard"
                class="block text-[#31081F] font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl text-center pb-5 hover:underline">
                Flashcard Learning
            </a> --}}
        </div>

        <div class="bg-[#31081F] py-10">
            <h1 class="ml-4 md:ml-10 text-3xl md:text-5xl font-bold text-[#DAB93C]">Punya Pertanyaan?</h1>

            <div class="text-white py-10">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="ml-4 md:ml-10 mb-10">
                            <h2 class="text-2xl md:text-3xl font-bold mb-6">Ikuti Kami</h2>
                            <div class="flex flex-col space-y-6 md:space-y-10">
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
                                <a href="#" class="flex items-center space-x-4 text-white hover:text-blue-500">
                                    <img src="{{ asset('storage/footer/icon-loc.svg') }}" alt="Location Icon"
                                        class="w-8 h-8 md:w-10 md:h-10">
                                    <span class="text-lg md:text-2xl">
                                        {{ $profil->alamat }}
                                    </span>
                                </a>
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
