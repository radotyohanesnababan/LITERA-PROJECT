@extends('userview.index')

@section('content')
<body class="bg-white pb-20">
    <div>
        <h1 class="text-[#31081F] py-5 md:py-10 xl:py-20 font-bold text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-center">Kelas Praktek</h1>
    </div>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($galeri as $item)
            <div class="relative overflow-hidden rounded-lg w-full h-full cursor-pointer" onclick="openModal('{{ asset('storage/galeri/' . $item->foto) }}')">
                <img src="{{ asset('storage/galeri/' . $item->foto) }}" alt="{{ $item->deskripsi }}" class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-105 border-4 border-gray-300">
            </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex items-center justify-center z-50">
        <button onclick="closeModal()" class="absolute top-5 right-5 text-white text-3xl">&times;</button>
        <img id="modalImage" class=" w-full h-full">
    </div>

    <script>
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>
</body>
@endsection
