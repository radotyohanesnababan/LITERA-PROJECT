<div>
    <x-slot name="header">
        <div class="sm:rounded-lg w-auto bg-slate-200 mx-auto">
            <h2 class=" p-2 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Profil') }}
            </h2>
            <div></div>
            <h3 class=" p-2 font-weight-400 text-l text-gray-800 leading-tight">
                Halaman Ubah Profil Perusahaan
            </h3>
        </div>
    </x-slot>


    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <div class="flex ">
        <aside id="default-sidebar"
            class="top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <ul class="space-y-2 font-medium">

                    <li>
                        <button wire:click="switchPage('artinama-table')">
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Arti Nama</span>
                            </a>
                        </button>

                    </li>

                    <li>
                        <button wire:click="switchPage('sejarah-table')">
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                
                                <span class="flex-1 ms-3 whitespace-nowrap">Sejarah </span>
                                
                            </a>
                        </button>

                    </li>
                    <li>
                        <button wire:click="switchPage('visimisi-table')">
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                
                                <span class="flex-1 ms-3 whitespace-nowrap">Visi dan Misi</span>
                                
                            </a>
                        </button>

                    </li>

                    <li>
                        <button wire:click="switchPage('unggulan-table')">
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                
                                <span class="flex-1 ms-3 whitespace-nowrap">Unggulan</span>
                            </a>
                        </button>

                    </li>
                    <button wire:click="switchPage('socialmedia-table')">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                
                                <span class="flex-1 ms-3 whitespace-nowrap"> Media Sosial</span>
                            </a>
                        </li>
                    </button>
                    <li>
                        <button wire:click="switchPage('alamat-table')">
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                
                                <span class="flex-1 ms-3 whitespace-nowrap">Alamat</span>
                            </a>
                        </button>
                    </li>

                </ul>
            </div>
        </aside>
        @if ($profil)
            @if ($activePage == 'artinama-table')
                <div class="p-4 sm:p-6 lg:p-8 mx-auto w-full">

                    <form wire:submit.prevent="updateArtinama">
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class=" flex justify-start px-3 py-2 border-b dark:border-gray-600">
                                <div type="text" class=" flex  just p-2 text-gray-500 sm:ms-auto ">
                                    Arti Nama
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                <label for="artinama" class="sr-only">Arti Nama</label>
                                <textarea id="artinama" rows="8" wire:model.defer="artinama" 
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    required>{{ $profil->artinama }}</textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Edit Arti Nama
                        </button>
                    </form>
                </div>
            @endif

            @if ($activePage == 'sejarah-table')
                <div class="p-4 sm:p-6 lg:p-8 mx-auto w-full">
                    <form wire:submit.prevent="updateSejarah">
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class=" flex justify-start px-3 py-2 border-b dark:border-gray-600">
                                <div type="text" class=" flex  just p-2 text-gray-500 sm:ms-auto ">
                                    Sejarah
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                <label for="editor" class="sr-only">Sejarah</label>
                                <textarea id="sejarah" rows="8" wire:model.defer="sejarah"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    required>{{ $profil->sejarah }}</textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Edit Sejarah
                        </button>
                    </form>
                </div>
            @endif

            @if ($activePage == 'visimisi-table')
                <div class="p-4 sm:p-6 lg:p-8 mx-auto w-full">
                    <form wire:submit.prevent="updateVisimisi">
                        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class="flex justify-start px-3 py-2 border-b dark:border-gray-600">
                                <div class="flex p-2 text-gray-500 sm:ms-auto">
                                    Visi
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                <label for="visi" class="sr-only">Visi</label>
                                <textarea id="visi" name="visi" rows="8" wire:model.defer="visi"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    required>{{ $profil->visi }}</textarea>
                            </div>
                        </div>
                        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class="flex justify-start px-3 py-2 border-b dark:border-gray-600">
                                <div class="flex p-2 text-gray-500 sm:ms-auto">
                                    Misi
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                <label for="misi" class="sr-only">Misi</label>
                                <textarea id="misi" name="misi" rows="8" wire:model.defer="misi"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    required>{{ $profil->misi }}</textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Edit Visi dan Misi
                        </button>
                    </form>
                    
                </div>
            @endif

            @if ($activePage == 'unggulan-table')
                <div class="p-4 sm:p-6 lg:p-8 mx-auto w-full">

                    <form wire:submit.prevent="updateUnggulan">
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class=" flex justify-start px-3 py-2 border-b dark:border-gray-600">
                                <div type="text" class=" flex  just p-2 text-gray-500 sm:ms-auto ">
                                    Program Unggulan
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                <label for="editor" class="sr-only">Program Unggulan</label>
                                <textarea id="unggulan" rows="8" wire:model.defer="unggulan"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    required>{{ $profil->unggulan }}</textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Edit Program Unggulan
                        </button>
                    </form>
                </div>
            @endif

            @if ($activePage == 'socialmedia-table')
                <div class="p-4 sm:p-6 lg:p-8 mx-auto w-full">
                    <form wire:submit.prevent="updateSocialMedia">
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class=" flex justify-start px-3 py-2 border-b dark:border-gray-600">
                                <div type="text" class=" flex  just p-2 text-gray-500 sm:ms-auto ">
                                    Social Media
                                </div>
                            </div>
                            <div class="m-5">
                                <label for="whatsapp_link" class=" font-bold block mb-2 text-sm  text-gray-900 dark:text-white">Link Instagram</label>
                                <input wire:model.defer="instagram_link" type="whatsapp_link" id="whatsapp_link" name="whatsapp_link" value="{{ $profil->instagram_link }}" 
                                    class=" bg-white shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    required />
                            </div>
                            <div class="m-5">
                                <label for="whatsapp_link" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Link Whatsapp</label>
                                <input  wire:model.defer="whatsapp_link" type="whatsapp_link" id="whatsapp_link" name="whatsapp_link" value="{{ $profil->whatsapp_link }}"
                                    class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    required />
                            </div>    
                        </div>

                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Edit Sosial Media
                        </button>
                    </form>
                </div>
            @endif

            @if ($activePage == 'alamat-table')
                <div class="p-4 sm:p-6 lg:p-8 mx-auto w-full">
                    <form wire:submit.prevent="updateAlamat"> 
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class=" flex justify-start px-3 py-2 border-b dark:border-gray-600">
                                <div type="text" class=" flex  just p-2 text-gray-500 sm:ms-auto ">
                                    Alamat
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                <label for="editor" class="sr-only">Alamat</label>
                                <textarea id="editor" rows="8" wire:model.defer="alamat"
                                    class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    required>{{ $profil->alamat }}</textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Edit Alamat
                        </button>
                    </form>
                </div>
            @endif

        @endif







    </div>
