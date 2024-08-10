<div>
    <x-slot name="header">
        <div class="sm:rounded-lg w-auto bg-slate-200 mx-auto">
            <h2 class=" p-2 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Kegiatan') }}
            </h2>
            <div></div>
            <h3 class=" p-2 font-weight-400 text-l text-gray-800 leading-tight">
                Halaman Tambah Kegiatan
            </h3>
        </div>
    </x-slot>
    <div class="sm:rounded-lg w-4/5 bg-gray-200 shadow-md mx-auto mt-0 p-7">
        <form class=" mx-auto mt-6 " method="POST" action="{{ route('addKegiatan') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" id="foto"
                    name="foto">Deskripsi Kegiatan</label>
                <textarea id="deskripsi" rows="8" name="deskripsi"
                    class="block w-full px-2 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                    required></textarea>
            </div>

            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" id="foto"
                    name="foto">Upload foto</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    name="foto" id="foto" type="file" required>

            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan</button>
        </form>
    </div>


</div>
