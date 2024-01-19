<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <header @keydown.escape="isOpen = false" class="relative flex h-auto w-full overflow-hidden"
        x-data="{ isOpen: false }">
        <!-- Navbar -->
        <nav
            class="relative z-20 top-0 right-0 w-full inline-block px-10 pt-5 text-2xl text-black bg-transparent bg-opacity-50 rounded-xl">
            <div class="flex justify-between items-center">
                <div>
                    <a href="index.html">
                        <img alt="Picnic Bistro Logo" class="h-20 lg:h-32"
                            src='{{ asset('/storage/assets/img/picnic-logo-black.svg') }}'>
                    </a>
                </div>
                <div class="hidden lg:block">
                    <ul class="flex">
                        <li class="px-4 py-4">
                            <a class="text-menu--item tracking-widest font-thin"
                                href="{{ route('meals.index') }}">MENI</a>
                        </li>
                        <li class="px-4 py-4">
                            <a class="text-menu--item tracking-widest"
                                href="{{ route('reservations.step.one') }}">REZERVACIJE</a>
                        </li>
                        <li class="px-4 py-4">
                            <a class="text-menu--item tracking-widest" href="{{ route('categories.index') }}">TEST
                                1</a>
                        </li>
                    </ul>
                </div>
                <div class="block lg:hidden">
                    <button :class="{ 'transition transform-180': isOpen }" @click="isOpen = !isOpen"
                        class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white"
                        type="button">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
                                fill-rule="evenodd" fill="black" x-show="isOpen" />
                            <path
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                                fill-rule="evenodd" fill="black" x-show="!isOpen" />
                        </svg>
                    </button>
                </div>


            </div>
            <div :class="{ 'block': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false"
                class="w-full h-full z-50 lg:hidden lg:flex lg:items-center lg:w-auto text-right"
                x-show.transition="true">
                <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-start flex-1 items-center">
                    <li class="mr-3">
                        <a @click="isOpen = true" class="inline-block py-2 px-4 text-white no-underline"
                            href="/">HOME
                        </a>
                    </li>
                    <li class="mr-3">
                        <a @click="isOpen = false"
                            class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="{{ route('meals.index') }}">MENI
                        </a>
                    </li>
                    <li class="mr-3">
                        <a @click="isOpen = false"
                            class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="{{ route('reservations.step.one') }}">REZERVACIJE
                        </a>
                    </li>
                    <li class="mr-3">
                        <a @click="isOpen = false"
                            class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="{{ route('categories.index') }}">CONTACT
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Mobile Links -->
        <!-- Video Background Element -->

    </header>

    <div class="font-sans text-gray-900 min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        {{ $slot }}
    </div>


    <footer class="container mx-auto">
        <div class="flex flex-wrap-reverse lg:flex-nowrap items-center justify-center lg:justify-between">
            <div class="flex justify-center items-center w-full lg:w-1/4">
                <img alt="Picnic Bistro Logo" class="h-24 md:h-32"
                    src='{{ asset('/storage/assets/img/picnic-logo-black.svg') }}'>
            </div>
            <div class="flex justify-center h-64 w-full lg:w-1/4">
                <ul>
                    <li class="font-sans text-2xl font-bold tracking-wide pb-6">SITE MENU</li>
                    <li class="pb-1">Meniu</li>
                    <li class="pb-1">Rezervari</li>
                    <li class="pb-1">Contact</li>
                    <li class="pb-1">Politica de utilizare a site-ului</li>
                    <li class="pb-1">Politica de cookies</li>
                    <li class="pb-1">Informatii GDPR</li>
                </ul>
            </div>
            <div class="flex justify-center h-64 w-full lg:w-1/4">
                <ul class="-ml-20">
                    <li class="font-sans text-2xl font-bold tracking-wide pb-4">FIND US</li>
                    <li class="font-sans  font-bold text-lg py-2">Adresa :</li>
                    <li>Ineu, Bihor, RO</li>
                    <li class="font-sans  font-bold text-lg py-2">Phone / Email :</li>
                    <li>+40 742 742 642</li>
                    <li>info@picnicbistro.ro</li>
                </ul>
            </div>
            <div class="flex justify-center h-64 w-full ml-10 lg:-ml-0 lg:w-1/4">
                <ul>
                    <li class="font-sans text-2xl font-bold tracking-wide pb-4">SOCIAL</li>
                    <li class="font-sans font-bold text-lg py-2">Find us on social</li>
                    <li>instagram • facebook • soundcloud</li>
                    <li class="font-sans font-bold text-lg py-2">Leave us a note</li>
                    <li>resengo • yelp • tripadvisor</li>
                </ul>
            </div>
        </div>
        <div class="flex justify-center items-center pt-20">
            <p class="text-sm">
                Dev by <a href="https://blondelguillau.me">Guillaume Blondel</a>
            </p>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.js"></script>
    <script>
        (function() {
            var scroll = new LocomotiveScroll();
        })();
    </script>
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/navbar.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script async src="https://www.google-analytics.com/analytics.js"></script>
    </div>
</body>

</html>
