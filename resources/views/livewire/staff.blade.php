
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
                <button wire:click="switchPage('management-table')"><li><a> Manajemen</a></li></button>
                <button wire:click="switchPage('tentor-table')"><li><a> Tenaga Tutor</a></li></button>
             </ul>
         </div>
     </div>
     <div class="py-12">
        @if ($activePage == 'management-table')
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
            
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
                        <!-- row 1 -->
                        <tr>
                            <th>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Hart Hagerty</div>
                                        <div class="text-sm opacity-50">United States</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Zemlak, Daniel and Leannon
                            </td>
                            <td>Purple</td>
                            <th>
                                <button class="btn btn-outline btn-warning">E</button>
                                <button class="btn btn-outline btn-error">H</button>

                            </th>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <th>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/3@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Brice Swyre</div>
                                        <div class="text-sm opacity-50">China</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Carroll Group
                            </td>
                            <td>Red</td>
                            <th>
                                <button class="btn btn-outline btn-warning">E</button>
                                <button class="btn btn-outline btn-error">H</button>

                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end">
                <button class= "btn btn-outline btn-primary mb-2 " onclick="window.location.href='{{ route('addstaff') }}'">Tambah Staff</button>
            </div>

        </div>
        @elseif ($activePage == 'tentor-table')
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  ">
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
                            <th>Job</th>
                            <th>Favorite Color</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr>
                            <th>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Hart Hagerty</div>
                                        <div class="text-sm opacity-50">United States</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Zemlak, Daniel and Leannon
                                <br />
                                <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                            </td>
                            <td>Purple</td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <th>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/3@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Brice Swyre</div>
                                        <div class="text-sm opacity-50">China</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Carroll Group
                                <br />
                                <span class="badge badge-ghost badge-sm">Tax Accountant</span>
                            </td>
                            <td>Red</td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                        <tr>
                            <th>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/3@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Brice Swyre</div>
                                        <div class="text-sm opacity-50">China</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Carroll Group
                                <br />
                                <span class="badge badge-ghost badge-sm">Tax Accountant</span>
                            </td>
                            <td>Red</td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
       </div>
       @endif
    </div>
     
