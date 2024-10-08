<div>
    <x-slot name="header">
        <div class="sm:rounded-lg w-auto bg-slate-200 mx-auto">
            <h2 class=" p-2 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Galeri') }}
            </h2>
            <div></div>
            <h3 class=" p-2 font-weight-400 text-l text-gray-800 leading-tight">
                Halaman Tambah Foto Kegiatan
            </h3>
        </div>
    </x-slot>
    <div class="sm:rounded-lg w-4/5 bg-gray-200 shadow-md mx-auto mt-0 p-7">
        <form class=" mx-auto mt-6 " method="POST" action="{{ route('addGaleri') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                    Kegiatan</label>
                    <select id="kategori" name="kategori"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required >
                    <option value="" disabled>Pilih kategori</option>
                    <option value="Kelas Praktek">Kelas Praktek</option>
                    <option value="Outbond">Outbond</option>
                    <option value="Buka Puasa">Buka Puasa</option>
                    <option value="Reguler Learning">Reguler Learning</option>
                    <option value="Outdoor Learning">Outdoor Learning</option>
                    <option value="Audio Visual Learning">Audio Visual Learning</option>
                    <option value="Flash Card Learning">Flash Card Learning</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="deskripsi"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <input type="deskripsi" id="deskripsi" name="deskripsi"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                     />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" id="foto"
                    name="foto">Upload Foto</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    name="foto" id="foto" type="file" required>

            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan</button>
        </form>
    </div>


</div>
