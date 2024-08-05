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
    <div class="navbar bg-white justify-center">
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 text-black font-bold">
                <button wire:click="switchPage('management-table')">
                    <li><a>Manajemen</a></li>
                </button>
                <button wire:click="switchPage('tentor-table')">
                    <li><a>Tenaga Tutor</a></li>
                </button>
            </ul>
        </div>
    </div>
    <div class="py-12">
        @if ($activePage == 'management-table')
            <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8 text-gray-800">
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
                            @forelse ($staffmgmt as $mgmt)
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
                                        <button class="btn btn-outline btn-warning"><a href="{{ route('editstaff', $mgmt->id) }}">Edit</a></button>
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
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                    Apakah anda yakin menghapus data dari {{ $currentStaff->nama }}?
                                                </h3>
                                                <form wire:submit.prevent="deleteStaff">
                                                    <div class="flex justify-center gap-3">
                                                        <button type="submit" wire:click="deleteStaff" class="btn btn-outline btn-error">Ya</button>
                                                        <button type="button" wire:click="hideModal" class="btn btn-outline btn-primary">Tidak</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-end mt-2">
                    <button class= "btn btn-outline btn-primary mb-2 "
                        onclick="window.location.href='{{ route('addstaff') }}'">Tambah Staff</button>
                </div>
            @elseif ($activePage == 'tentor-table')
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-800 ">
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
                                @forelse ($stafftentor as $tentor)
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
                                            <button class="btn btn-outline btn-warning"><a href="{{ route('editstaff', $tentor->id) }}">Edit</a></button>
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
                                                        anda yakin menghapus data dari {{ $currentStaff->nama }}?</h3>
                                                        <form wire:submit.prevent="deleteStaff">
                                                            <div class="flex justify-center gap-3">
                                                                <button type="submit" wire:click="deleteStaff" class="btn btn-outline btn-error">Ya</button>
                                                                <button type="button" wire:click="hideModal" class="btn btn-outline btn-primary">Tidak</button>
                                                            </div>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @empty
                                @endforelse

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
