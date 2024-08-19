@extends('userview.index')


@section('content')
    @if ($profil)

        <body class="body">
            <div class="flex items-center justify-center py-10 xl:py-20">
                <div class="text-center">
                    <p class="judul1">Tentang Kami</p>
                    <img src="{{ asset('storage/Logo2.svg') }}" class="logo1 mt-4 mx-auto" alt="Logo">
                </div>
            </div>

            {{--  --}}
            <div>
                <div>
                    <h1 class="judul2">Arti Nama</h1>
                </div>
                <div>
                    <p class="isi1">
                        {!! $profil->artinama !!}
                    </p>
                </div>
            </div>

            {{--  --}}
            <div>
                <div>
                    <h1 class="judul2">Sejarah Berdiri</h1>
                </div>
                <div>
                    <p class="isi1">
                        {!! $profil->sejarah !!}
                    </p>
                </div>
            </div>

            {{--  --}}
            <div class="mb-20">
                <div>
                    <h1 class="judul2">Visi dan Misi</h1>
                </div>
                <div>
                    <h2 class="isi3">
                        Visi:
                    </h2>
                    <p class="isi1">
                        "Menjadikan siswa/i berprestasi dari segala aspek pembelajaran dengan berimajinasi, kreatifitas, dan
                        memiliki kepribadian yang baik dalam bersosialisasi dan komunikasi."
                    </p>

                    <h2 class="isi3">
                        Misi:
                    </h2>
                    <ul class="list1">
                        {!! $profil->misi !!}
                    </ul>
                </div>
            </div>

            <div class="pb-10">
                <div>
                    <h1 class="judul2">Keunggulan</h1>
                </div>
                <ol class="jarak list-decimal">
                    <li class="list2">
                        Kelas Praktik
                        <p>
                            Kelas praktik kami dirancang untuk memberikan pengalaman langsung dan mendalam dalam penerapan
                            materi akademis yang tidak dilakukan din sekolah. Dengan berfokus pada aspek praktik, siswa
                            dapat lebih memahami dan menguasai keterampilan yang dibutuhkan melalui simulasi dan latihan
                            yang relevan dengan dunia nyata. Hal ini tidak hanya meningkatkan pemahaman konseptual tetapi
                            juga mempersiapkan siswa untuk menghadapi tantangan di lapangan.
                        </p>
                    </li>
                    <li class="list2">
                        Kelas Pendidikan Karakter
                        <p>
                            Kami percaya bahwa pendidikan tidak hanya mencakup aspek akademis tetapi juga pembentukan
                            karakter. Kelas pendidikan karakter kami bertujuan untuk mengembangkan nilai-nilai positif
                            seperti percaya diri, tanggung jawab, dan empati. Dengan pendekatan yang terstruktur namun
                            menyenangkan, kami berupaya untuk membentuk siswa yang tidak hanya cerdas secara akademis tetapi
                            juga unggul dalam moral dan etika.
                        </p>
                    </li>
                    <li class="list2">
                        Metode Pembelajaran Outdoor Learning
                        <p>
                            Metode Pembelajaran Outdoor Learning memungkinkan siswa untuk belajar di luar ruang kelas.
                            Dengan menggunakan lingkungan sekitar sebagai bagian dari proses pembelajaran, siswa dapat
                            secara langsung mengalami konsep yang dipelajari, berinteraksi dengan alam, dan mengembangkan
                            keterampilan. Metode ini mendorong pembelajaran yang lebih dinamis dan menyenangkan, serta
                            mendorong eksplorasi dan kreativitas.
                        </p>
                    </li>
                    <li class="list2">
                        Kelas Pembelajaran Kelompok Mandiri
                        <p>
                            Kelas Belajar Kelompok Mandiri adalah metode pembelajaran di mana siswa bekerja dalam kelompok
                            kecil untuk me-review dan membahas materi pelajaran secara bersama-sama. Dalam kelas ini, siswa
                            berperan sebagai pengajar bagi teman sebaya mereka, menyampaikan materi dan menjelaskan
                            konsep-konsep yang telah dipelajari. Metode ini memanfaatkan interaksi antar siswa untuk
                            mempercepat proses pemahaman dan penguasaan materi, serta mendorong siswa bekerja sama dalam
                            kelompok kecil dengan bimbingan minimal dari guru.
                        </p>
                    </li>
                </ol>
            </div>
            @if ($profil)
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
                                        <a href="#"
                                            class="flex items-center space-x-4 text-white hover:text-blue-500">
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
            @endif


        </body>
    @endif
@endsection
