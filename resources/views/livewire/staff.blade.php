<div>
    <x-slot name="header">
        <div class="sm:rounded-lg w-auto bg-slate-200 mx-auto">
            <h2 class=" p-2 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Staff') }}
            </h2>
            <div></div>
            <h3 class=" p-2 font-weight-400 text-l text-gray-800 leading-tight">
                Halaman Pengelolaan Staff
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
                        <button wire:click="switchPage('management-table')">
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                </svg>


                                <span class="ms-3">Manajemen</span>
                            </a>
                        </button>

                    </li>
                    <li>
                        <button wire:click="switchPage('tentor-table')">
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                </svg>

                                <span class="flex-1 ms-3 whitespace-nowrap">Tentor</span>


                            </a>
                        </button>

                    </li>

                </ul>
            </div>
        </aside>
        <div class="py-3 mx-auto w-full">
            @if ($activePage == 'management-table')
                <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8 text-gray-800">
                    <form class="max-w-md mx-auto mb-2" wire:submit.prevent="searchmgmt">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="searchtermmgmt" name="searchtermmgmt"
                                wire:model.defer="searchtermmgmt"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Cari Staff Manajemen Disini .." required />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>


                    <div class="font-semibold  text-center bg-white shadow-xl sm:rounded-lg ">
                        Tabel Daftar Management
                    </div>
                    <div class="overflow-x-auto">

                        <table class="table">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th>
                                    </th>
                                    <th>Nama</th>
                                    <th>Posisi</th>
                                    <th>Subposisi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($filteredStaffmgmt))
                                    @foreach ($filteredStaffmgmt as $mgmt)
                                        <tr>
                                            <th>
                                            </th>
                                            <td>
                                                <div class="flex items-center gap-3">
                                                    <div class="avatar">
                                                        <div class="mask mask-squircle h-12 w-12">
                                                            <img src="{{ asset('storage/foto/' . $mgmt->foto) }}"
                                                                alt="{{ $mgmt->nama }}" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="font-bold">{{ $mgmt->nama }}</div>
                                                    </div>
                                                    <div>
                                                        <div class="font-bold"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $mgmt->posisi }}
                                            </td>
                                            <td>{{ $mgmt->sub_posisi }}</td>
                                            <th>
                                                <button class="btn btn-outline btn-warning"><a
                                                        href="{{ route('editstaff', $mgmt->id) }}">Edit</a></button>
                                                <button wire:click="showModal({{ $mgmt->id }})"
                                                    class="btn btn-outline btn-error" type="button">
                                                    Hapus
                                                </button>
                                            </th>
                                        </tr>

                                        @if ($modalVisible)
                                            <div id="popup-modal" tabindex="-1"
                                                class="fixed top-0 right-0 left-0 z-50 flex items-center justify-center w-full h-screen bg-black bg-opacity-50">
                                                <div
                                                    class="relative w-full max-w-md max-h-full bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3
                                                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                            Apakah anda yakin menghapus data dari
                                                            {{ $currentStaff->nama }}?
                                                        </h3>
                                                        <form wire:submit.prevent="deleteStaff">
                                                            <div class="flex justify-center gap-3">
                                                                <button type="submit" wire:click="deleteStaff"
                                                                    class="btn btn-outline btn-error">Ya</button>
                                                                <button type="button" wire:click="hideModal"
                                                                    class="btn btn-outline btn-primary">Tidak</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    <p>Tidak ada data</p>
                                @endif


                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-end mt-2">
                        <button class= "btn btn-outline btn-primary mb-2 "
                            onclick="window.location.href='{{ route('addstaff') }}'">Tambah Staff</button>
                    </div>
                @elseif ($activePage == 'tentor-table')
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-800">
                        <form class="max-w-md mx-auto mb-2" wire:submit.prevent="searchtentor">
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id ="searchtermtentor" name="searchtermtentor" wire:model.defer="searchtermtentor"
                                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Cari Staff Tenaga Tutor Disini .." required />
                                <button type="submit"
                                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>
                        </form>
                        <div class="font-semibold  text-center bg-white shadow-xl sm:rounded-lg ">
                            Tabel Daftar Tenaga Tutor
                        </div>
                        <div class="overflow-x-auto">
                            <table class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>
                                        </th>
                                        <th>Name</th>
                                        <th>Posisi</th>
                                        <th>Subposisi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($filteredStafftentor))
                                        @foreach ($filteredStafftentor as $tentor)
                                            <tr>
                                                <th>
                                                </th>
                                                <td>
                                                    <div class="flex items-center gap-3">
                                                        <div class="avatar">
                                                            <div class="mask mask-squircle h-12 w-12">
                                                                <img src="{{ asset('storage/foto/' . $tentor->foto) }}"
                                                                    alt="{{ $tentor->nama }}" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="font-bold">{{ $tentor->nama }}</div>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $tentor->posisi }}
                                                </td>
                                                <td>{{ $tentor->sub_posisi }}</td>
                                                <th>
                                                    <button class="btn btn-outline btn-warning"><a
                                                            href="{{ route('editstaff', $tentor->id) }}">Edit</a></button>
                                                    <button wire:click="showModal({{ $tentor->id }})"
                                                        class="btn btn-outline btn-error" type="button">
                                                        Hapus
                                                    </button>
                                                </th>
                                            </tr>

                                            @if ($modalVisible)
                                                <div id="popup-modal" tabindex="-1"
                                                    class="fixed top-0 right-0 left-0 z-50 flex items-center justify-center w-full h-screen bg-black bg-opacity-50">
                                                    <div
                                                        class="relative w-full max-w-md max-h-full bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <div class="p-4 md:p-5 text-center">
                                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <h3
                                                                class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                Apakah
                                                                anda yakin menghapus data dari
                                                                {{ $currentStaff->nama }}?
                                                            </h3>
                                                            <form wire:submit.prevent="deleteStaff">
                                                                <div class="flex justify-center gap-3">
                                                                    <button type="submit" wire:click="deleteStaff"
                                                                        class="btn btn-outline btn-error">Ya</button>
                                                                    <button type="button" wire:click="hideModal"
                                                                        class="btn btn-outline btn-primary">Tidak</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                        <p>Tidak ada data</p>
                                    @endif


                                </tbody>
                            </table>
                            <div class="flex justify-end mt-2">
                                <button class= "btn btn-outline btn-primary mb-2 "
                                    onclick="window.location.href='{{ route('addstaff') }}'">Tambah Staff</button>
                            </div>

                        </div>
                    </div>
            @endif
        </div>

    </div>
