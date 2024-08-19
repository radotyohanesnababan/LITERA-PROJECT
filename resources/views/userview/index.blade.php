
<!DOCTYPE html>
<html lang="id">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/fontawesome.min.css') }}">
    
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Daisy -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&&family=Zain:wght@200;300;400;700;800;900&display=swap" rel="stylesheet">
    
    <title>LITERA</title>
    @stack('styles')
</head>

<style>
    .bg-lightpurple {
        background-color: #EFE6FF !important;
    }
    .bg-purple {
        background-color: #ae93dc !important;
    }
    .navbar-text {
        font-size: 1.125rem;
    }
    .logo{
        height: 3rem;
    }
    @media (max-width: 400px) {
        .logo{
            height: 20px;
        }
    }
    @media (max-width: 920px) {
        .navbar-text{
            font-size: 0.7rem;
        }
        .logo{
            height: 30px;
        }
    }
    @media (max-width: 1025px) {
        .navbar-text{
            font-size: 1rem;
        }
        .logo{
            height: 25px;
        }
    }
</style>
    <nav id="navbar" class="z-30 bg-lightpurple dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('storage/logo1.svg') }}" class="logo" alt="Litera Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-white bg-[#26547D] hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full custom-button px-4 py-2 text-center dark:bg-[#26547D] dark:hover:bg-blue-700 dark:focus:ring-blue-800 navbar-text">Kontak Kami</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-[#31081F] hover:dark:text-white dark:hover:bg-[#ae93dc]  dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-transparent md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-[#ae93dc] md:dark:bg-transparent dark:border-gray-700 navbar-text">
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded hover:bg-[#EFE6FF] md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-[#EFE6FF] dark:hover:text-black md:dark:hover:bg-transparent">Tentang Kami</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded hover:bg-[#EFE6FF] md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-[#EFE6FF] dark:hover:text-black md:dark:hover:bg-transparent">Program</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded hover:bg-[#EFE6FF] md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-[#EFE6FF] dark:hover:text-black md:dark:hover:bg-transparent">Kegiatan</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded hover:bg-[#EFE6FF] md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-[#EFE6FF] dark:hover:text-black md:dark:hover:bg-transparent">Testimoni</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-black rounded hover:bg-[#EFE6FF] md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-black md:dark:hover:text-blue-500 dark:focus:text-black dark:border-gray-700 dark:hover:bg-[#EFE6FF] md:dark:hover:bg-transparent">Lainnya
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="dropdownNavbar" class="z-10 hidden font-normal border border-white hover:border-black bg-purple rounded-lg w-44 dark:bg-purple dark:hover:bg-[#EFE6FF]">
                        <ul class="text-sm text-black dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#" class="block px-4 py-2 text-white border border-b-white rounded-t-lg hover:text-black hover:bg-[#EFE6FF] hover:border-b-black">Profil</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-white border border-t-white rounded-b-lg hover:text-black hover:bg-[#EFE6FF] hover:border-t-black">Galeri</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>            
            </div>
        </div>
    </nav>
  
    <body id="content">
        @yield('content') 
    </body>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen navbar dan body
            var navbar = document.getElementById('navbar');
            var body = document.getElementById('content');
            
            // Dapatkan tinggi navbar
            var navbarHeight = navbar.offsetHeight;
            
            // Atur margin-top pada body
            body.style.marginTop = navbarHeight + 'px';
        });
    </script>
</html>
