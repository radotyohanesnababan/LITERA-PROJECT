<div>
    <x-slot name="header">
        <div class="sm:rounded-lg w-auto bg-slate-200 mx-auto">
            <h2 class=" p-2 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Program') }}
            </h2>
            <div></div>
            <h3 class=" p-2 font-weight-400 text-l text-gray-800 leading-tight">
                Halaman Ubah Program
            </h3>
        </div>
    </x-slot>
    <div class="sm:rounded-lg w-4/5 bg-gray-200 shadow-md mx-auto mt-0 p-7">
        <form class=" mx-auto mt-6 " method="POST" action="{{ route('editProgram', $program->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekolah</label>
                <input type="sekolah" id="sekolah" name="sekolah"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    value="{{ $program->sekolah }}" required />
            </div>
            <div class="mb-5">
                <label for="deskripsi"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <input type="deskripsi" id="deskripsi" name="deskripsi"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    value="{{ $program->deskripsi }}" required />
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                Data</button>
        </form>
    </div>
</div>
