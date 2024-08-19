@section('title', 'Testimoni | LITERA Admin')
<div>
    <x-slot name="header">
        <div class="sm:rounded-lg w-auto bg-slate-200 mx-auto">
            <h2 class=" p-2 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Testimoni') }}
            </h2>
            <h3 class=" p-2 font-weight-400 text-l text-gray-800 leading-tight">
                Halaman Pengelolaan Testimoni
            </h3>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8 text-gray-800">
            <form class="max-w-md mx-auto" wire:submit.prevent="search">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="searchName" name="searchName" wire:model.defer="searchName"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari Nama ..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>
                        </th>
                        <th>Name</th>
                        <th>Asal Sekolah</th>
                        <th>Universitas</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($filteredTesti))
                        @foreach ($filteredTesti as $item)
                            <tr>
                                <th>
                                </th>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask mask-squircle h-12 w-12">
                                                <a href="{{ asset('storage/testi/' . $item->foto) }}"><img src="{{ asset('storage/testi/' . $item->foto) }}"
                                                    alt="Avatar Tailwind CSS Component" /></a>
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold">{{ $item->nama }}</div>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{ $item->asal_sekolah }}

                                </td>
                                <td>{{ $item->universitas }}</td>
                                <th>
                                    <button class="btn btn-outline btn-warning"><a
                                            href="{{ route('edittesti', $item->id) }}">Edit</a></button>
                                    <button wire:click="showModal({{ $item->id }})"
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
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                Apakah anda yakin menghapus data dari {{ $currentTesti->nama }}?
                                            </h3>
                                            <form wire:submit.prevent="deleteTesti">
                                                <div class="flex justify-center gap-3">
                                                    <button type="submit" wire:click="deleteTesti"
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
                    onclick="window.location.href='{{ route('addtesti') }}'">Tambah Testimoni</button>
            </div>
        </div>

    </div>
