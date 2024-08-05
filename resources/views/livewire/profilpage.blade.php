<div>
    <x-slot name="header">
        <div class="sm:rounded-lg w-auto bg-slate-200 mx-auto">
            <h2 class=" p-2 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Profil') }}
            </h2>
            <h3 class=" p-2 font-weight-400 text-l text-gray-800 leading-tight">
                Halaman Pengelolaan Profil Perusahaan
            </h3>
        </div>
    </x-slot>

    @if ($profil)
    <div class="sm:rounded-lg w-4/5 bg-gray-200 shadow-md mx-auto mt-0 p-7">
        <form class=" mx-auto mt-6 " method="POST" action="{{ route('editProfil', $profil->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="artinama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Asal Nama</label>
                <input type="text" id="artinama" name="artinama" value="{{ $profil->artinama }}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <div class="mb-5">
                <label for="sejarah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sejarah</label>
                <input type="text" id="sejarah" name="sejarah" value="{{ $profil->sejarah}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            
            <div class="mb-5">
                <label for="visimisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visi dan Misi</label>
                <input type="text" id="visimisi" name="visimisi" value="{{ $profil->visimisi}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <div class="mb-5">
                <label for="unggulan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unggulan</label>
                <input type="text" id="unggulan" name="unggulan" value="{{ $profil->unggulan}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <div class="mb-5">
                <label for="instagram_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Instagram</label>
                <input type="text" id="instagram_link" name="instagram_link" value="{{ $profil->instagram_link}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <div class="mb-5">
                <label for="whatsapp_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Whatsapp</label>
                <input type="text" id="whatsapp_link" name="whatsapp_link" value="{{ $profil->whatsapp_link}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <div class="mb-5">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                <input type="text" id="alamat" name="alamat" value="{{ $profil->alamat}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                Profil</button>
        </form>
    </div>
    @else
        <p>Data Profil Tidak Ditemukan</p>
    @endif
    
</div>
