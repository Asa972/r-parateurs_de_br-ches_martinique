<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Réparateurs de Brèches Martinique</title>
    <!-- Fonts & Styles -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>
<body class="font-sans antialiased">
    <!-- Navbar -->
    <nav class=" py-4">
        <div class="max-w-screen-xl mx-auto flex items-center justify-between px-4">
            <div class="flex items-center space-x-4">
                <img src="images/eagle-8379139_640.jpg" class="w-[100px] h-[100px]" alt="Amazone Logo" />
<h1>Réparateurs de Brèches Martinique</h1>
            </div>

            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>

            <ul class="flex space-x-6 font-extrabold text-lg">
                <li><a href="/" class="hover:text-yellow-400">Accueil</a></li>
                <li><a href="/articles" class="hover:text-yellow-400">Actualités</a></li>
                
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 md:w-auto dark:text-white md:dark:hover:text-lime-400 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Connexion<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        @if (Route::has('login'))
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </a>
                            @else
                            <li>
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Connexion
                                </a>
                            </li>
                            <li>
                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Inscription
                                    </a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<main>
    @yield('content')
</main>
    <!-- Footer -->
    <footer class=" text-white py-10">
        <div class="max-w-screen-xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center md:items-start">
            <div class="text-center md:text-left mb-6 md:mb-0">


            </div>
            <div class="text-center md:text-left mb-6 md:mb-0">

            </div>
            <div class="text-center md:text-left">

                <div class="flex space-x-4 justify-center md:justify-start">
                    <a href="#"><img src="images/icons8-réseau-social-100.png" alt="Facebook" class="w-8 h-8"></a>
                    <a href="#"><img src="images/icons8-instagram-100.png" alt="Instagram" class="w-8 h-8"></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

