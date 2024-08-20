@php

    $kategori_terpilih = old('kategori', $galeri->kategori ?? ''); // Mengambil value dari form request sebelumnya atau dari data yang tersimpan
@endphp

<div>
    <x-slot name="header">
        <div class="sm:rounded-lg w-auto bg-slate-200 mx-auto">
            <h2 class=" p-2 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Galeri') }}
            </h2>
            <div></div>
            <h3 class=" p-2 font-weight-400 text-l text-gray-800 leading-tight">
                Halaman Edit Foto Kegiatan
            </h3>
        </div>
    </x-slot>
    <div class="sm:rounded-lg w-4/5 bg-gray-200 shadow-md mx-auto mt-0 p-7">
        <form class=" mx-auto mt-6 " method="POST" action="{{ route('editGaleri', $galeri->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                    Kegiatan</label>

                <select id="kategori" name="kategori"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
                    <option value="" disabled {{ $kategori_terpilih == '' ? 'selected' : '' }}>Pilih kategori
                    </option>
                    <option value="Kelas Praktek" {{ $kategori_terpilih == 'Kelas Praktek' ? 'selected' : '' }}>Kelas
                        Praktek</option>
                    <option value="Outbond" {{ $kategori_terpilih == 'Outbond' ? 'selected' : '' }}>Outbond</option>
                    <option value="Buka Puasa" {{ $kategori_terpilih == 'Buka Puasa' ? 'selected' : '' }}>Buka Puasa
                    </option>
                    <option value="Reguler Learning" {{ $kategori_terpilih == 'Reguler Learning' ? 'selected' : '' }}>
                        Reguler Learning</option>
                    <option value="Outdoor Learning" {{ $kategori_terpilih == 'Outdoor Learning' ? 'selected' : '' }}>
                        Outdoor Learning</option>
                    <option value="Audio Visual Learning"
                        {{ $kategori_terpilih == 'Audio Visual Learning' ? 'selected' : '' }}>Audio Visual Learning
                    </option>
                    <option value="Flash Card Learning"
                        {{ $kategori_terpilih == 'Flash Card Learning' ? 'selected' : '' }}>Flash Card Learning</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="deskripsi"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <input type="deskripsi" id="deskripsi" name="deskripsi"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    value="{{ $galeri->deskripsi }}" required />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" id="foto"
                    name="foto">Upload Foto, Kosongkan jika tidak ingin merubah </label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    name="foto" id="foto" type="file">
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
        </form>
    </div>


</div>
