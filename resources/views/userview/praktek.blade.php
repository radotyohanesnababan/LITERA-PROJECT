@extends('userview.index')

@section('content')
<body class="bg-white">
    <div>
        <h1 class="text-[#31081F] py-5 md:py-10 xl:py-20 font-bold text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-center">Kelas Praktek</h1>
    </div>
    <div class="container mx-auto px-4 h-screen">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="relative overflow-hidden rounded-lg">
                <img src="{{ asset('storage/galeri/g1.png') }}" alt="Gambar 1" class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="relative overflow-hidden rounded-lg">
                <img src="{{ asset('storage/galeri/g2.png') }}" alt="Gambar 2" class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="relative overflow-hidden rounded-lg">
                <img src="{{ asset('storage/galeri/g3.png') }}" alt="Gambar 3" class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
            <div class="relative overflow-hidden rounded-lg">
                <img src="{{ asset('storage/galeri/g3.png') }}" alt="Gambar 4" class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-105">
            </div>
        </div>
    </div>
</body>
@endsection
