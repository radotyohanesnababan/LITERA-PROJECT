
@extends('userview.index')

@push('styles')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endpush
@section('content')
<body class="body">
    <div class="flex items-center justify-center py-10 xl:py-20">
        <div class="text-center">
            <h1 class="judul1">Tentang Kami</h1>
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
                Litera diambil dari kata <span class="text-[#FF0000]">literasi</span> yang berasal dari bahasa Latin yaitu 'literatus", <span class="text-[#FF0000]">berarti orang yang belajar</span>. 
                Literasi adalah istilah umum yang merujuk kepada serangkaian kemampuan dan keterampilan individu dalam membaca, 
                menulis, berbicara, menghitung, dan memecahkan masalah pada tingkat keahlian tertentu yang diperlukan dalam kehidupan 
                (sumber: Wikipedia). Maka dari itu, kami memilih nama "Litera" dengan harapan siswa/i bimbingan kami dapat menjadi 
                individu yang baik dalam segala aspek pembelajaran dan dapat meraih apa yang dicita-citakan.
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
                Pada awal Desember 2014, kami dengan bangga meluncurkan lembaga bimbingan belajar yang kami namakan "Bina Delta," yang dimulai dengan hanya tiga kelas. Seiring dengan pesatnya pertumbuhan jumlah pendaftar, kami memutuskan untuk melakukan ekspansi. Pada Februari 2017, kami pindah ke gedung baru yang berlokasi di daerah Simpang 5, yang memungkinkan kami untuk meningkatkan kapasitas kami menjadi tujuh kelas. Langkah ini merupakan bagian dari komitmen kami untuk menyediakan fasilitas yang lebih baik dan mendukung kebutuhan belajar yang semakin berkembang.
                <br><br>
                Memasuki tahun 2024, kami telah mengambil langkah strategis dengan melakukan rebranding dari "Bina Delta" menjadi "Litera." Rebranding ini bertujuan untuk mencerminkan evolusi kami menuju manajemen yang lebih solid, inovatif, dan mandiri. Dengan nama baru ini, kami berharap dapat memperkuat visi kami dalam memberikan layanan bimbingan yang berkualitas tinggi dan relevan dengan kebutuhan pelajar masa kini.
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
            <p class="isi2">
                "Menjadikan siswa/i berprestasi dari segala aspek pembelajaran dengan berimajinasi, kreatifitas, dan memiliki kepribadian yang baik dalam bersosialisasi dan komunikasi."
            </p>

            <h2 class="isi3">
                Misi:
            </h2>
            <ul class="jarak list-disc">
                <li class="list1">
                    Menyediakan tutor berkualitas tinggi yang ideal untuk mendukung pencapaian akademik siswa.
                </li>
                <li class="list1">
                    Menyajikan materi pembelajaran dengan cara yang mudah dipahami dan cepat diserap oleh siswa.
                </li>
                <li class="list1">
                    Memberikan layanan yang nyaman dan ramah, menciptakan suasana belajar yang menyerupai kenyamanan belajar di rumah.
                </li>
                <li class="list1">
                    Menawarkan konsultasi terkait materi pelajaran dan tugas rumah untuk mendukung pemahaman siswa.
                </li>
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
                    Kelas praktik kami dirancang untuk memberikan pengalaman langsung dan mendalam dalam penerapan materi akademis yang tidak dilakukan din sekolah. Dengan berfokus pada aspek praktik, siswa dapat lebih memahami dan menguasai keterampilan yang dibutuhkan melalui simulasi dan latihan yang relevan dengan dunia nyata. Hal ini tidak hanya meningkatkan pemahaman konseptual tetapi juga mempersiapkan siswa untuk menghadapi tantangan di lapangan.
                </p>
            </li>
            <li class="list2">
                Kelas Pendidikan Karakter
                <p>
                    Kami percaya bahwa pendidikan tidak hanya mencakup aspek akademis tetapi juga pembentukan karakter. Kelas pendidikan karakter kami bertujuan untuk mengembangkan nilai-nilai positif seperti percaya diri, tanggung jawab, dan empati. Dengan pendekatan yang terstruktur namun menyenangkan, kami berupaya untuk membentuk siswa yang tidak hanya cerdas secara akademis tetapi juga unggul dalam moral dan etika.
                </p>
            </li>
            <li class="list2">
                Metode Pembelajaran Outdoor Learning
                <p>
                    Metode Pembelajaran Outdoor Learning memungkinkan siswa untuk belajar di luar ruang kelas. Dengan menggunakan lingkungan sekitar sebagai bagian dari proses pembelajaran, siswa dapat secara langsung mengalami konsep yang dipelajari, berinteraksi dengan alam, dan mengembangkan keterampilan. Metode ini mendorong pembelajaran yang lebih dinamis dan menyenangkan, serta mendorong eksplorasi dan kreativitas.
                </p>
            </li>
            <li class="list2">
                Kelas Pembelajaran Kelompok Mandiri
                <p>
                    Kelas Belajar Kelompok Mandiri adalah metode pembelajaran di mana siswa bekerja dalam kelompok kecil untuk me-review dan membahas materi pelajaran secara bersama-sama. Dalam kelas ini, siswa berperan sebagai pengajar bagi teman sebaya mereka, menyampaikan materi dan menjelaskan konsep-konsep yang telah dipelajari. Metode ini memanfaatkan interaksi antar siswa untuk mempercepat proses pemahaman dan penguasaan materi, serta mendorong siswa bekerja sama dalam kelompok kecil dengan bimbingan minimal dari guru.
                </p>
            </li>
        </ol>
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