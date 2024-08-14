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
                        <div x-data="summernoteInit_artinama()" x-init="initializeSummernote_artinama()" wire:ignore class="mb-4">
                            <textarea id="artinama" wire:model.defer="artinama">
                                {{ $profil->artinama }}
                            </textarea>
                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800"
                            x-on:click="syncSummernoteWithLivewire">
                            Edit Artinama
                        </button>
                    </form>
                </div>
            @endif

            @if ($activePage == 'sejarah-table')
                <div class="p-4 sm:p-6 lg:p-8 mx-auto w-full">
                    <form wire:submit.prevent="updateSejarah">
                        <div x-data="summernoteInit_sejarah()" x-init="initializeSummernote_sejarah()" wire:ignore class="mb-4">
                            <textarea id="sejarah" wire:model.defer="sejarah">
                                {{ $profil->sejarah }}
                            </textarea>
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
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div x-data="summernoteInit_visi()" x-init="initializeSummernote_visi()" wire:ignore class="mb-4">
                                <textarea id="visi" wire:model.defer="visi">
                                    {{ $profil->visi }}
                                </textarea>
                            </div>
                        </div>
                        <div
                            class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div x-data="summernoteInit_misi()" x-init="initializeSummernote_misi()" wire:ignore class="mb-4">
                                <textarea id="misi" wire:model.defer="misi">
                                    {{ $profil->misi }}
                                </textarea>
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
                            <div x-data="summernoteInit_unggulan()" x-init="initializeSummernote_unggulan()" wire:ignore class="mb-4">
                                <textarea id="unggulan" wire:model.defer="unggulan">
                                    {{ $profil->unggulan }}
                                </textarea>
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
                                <label for="whatsapp_link"
                                    class=" font-bold block mb-2 text-sm  text-gray-900 dark:text-white">Link
                                    Instagram</label>
                                <input wire:model.defer="instagram_link" type="whatsapp_link" id="whatsapp_link"
                                    name="whatsapp_link" value="{{ $profil->instagram_link }}"
                                    class=" bg-white shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    required />
                            </div>
                            <div class="m-5">
                                <label for="whatsapp_link"
                                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Link
                                    Whatsapp</label>
                                <input wire:model.defer="whatsapp_link" type="whatsapp_link" id="whatsapp_link"
                                    name="whatsapp_link" value="{{ $profil->whatsapp_link }}"
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

    @push('scripts')
        <script>
            function summernoteInit_artinama() {
                return {
                    initializeSummernote_artinama() {
                        $('#artinama').summernote({
                            placeholder: 'Hello stand alone ui',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['insert', ['link', 'picture', 'video']],
                               
                            ],
                            callbacks: {
                                onChange: function(contents, $editable) {
                                    @this.set('artinama', contents);
                                }
                            }
                        });
                    },
                    syncSummernoteWithLivewire() {
                        // Update Livewire variable with Summernote content before submit
                        let content = $('#artinama').val();
                        @this.set('artinama', content);
                    }
                }
            }

            function summernoteInit_sejarah() {
                return {
                    initializeSummernote_sejarah() {
                        $('#sejarah').summernote({
                            placeholder: 'Hello stand alone ui',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['insert', ['link', 'picture', 'video']],
                            ],
                            callbacks: {
                                onChange: function(contents, $editable) {
                                    @this.set('sejarah', contents);
                                }
                            }
                        });
                    },
                    syncSummernoteWithLivewire() {
                        // Update Livewire variable with Summernote content before submit
                        let content = $('#sejarah').val();
                        @this.set('sejarah', content);
                    }
                }
            }

            function summernoteInit_visi() {
                return {
                    initializeSummernote_visi() {
                        $('#visi').summernote({
                            placeholder: 'Hello stand alone ui',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['insert', ['link', 'picture', 'video']],
                               
                            ],
                            callbacks: {
                                onChange: function(contents, $editable) {
                                    @this.set('visi', contents);
                                }
                            }
                        });
                    },
                    syncSummernoteWithLivewire() {
                        // Update Livewire variable with Summernote content before submit
                        let content = $('#visi').val();
                        @this.set('visi', content);
                    }
                }
            }

            function summernoteInit_misi() {
                return {
                    initializeSummernote_misi() {
                        $('#misi').summernote({
                            placeholder: 'Hello stand alone ui',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['insert', ['link', 'picture', 'video']],
                               
                            ],
                            callbacks: {
                                onChange: function(contents, $editable) {
                                    @this.set('misi', contents);
                                }
                            }
                        });
                    },
                    syncSummernoteWithLivewire() {
                        // Update Livewire variable with Summernote content before submit
                        let content = $('#misi').val();
                        @this.set('misi', content);
                    }
                }
            }

            function summernoteInit_unggulan() {
                return {
                    initializeSummernote_unggulan() {
                        $('#unggulan').summernote({
                            placeholder: 'Hello stand alone ui',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['insert', ['link', 'picture', 'video']],
                               
                            ],
                            callbacks: {
                                onChange: function(contents, $editable) {
                                    @this.set('unggulan', contents);
                                }
                            }
                        });
                    },
                    syncSummernoteWithLivewire() {
                        // Update Livewire variable with Summernote content before submit
                        let content = $('#unggulan').val();
                        @this.set('unggulan', content);
                    }
                }
            }
        </script>
    @endpush
