<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('/storage/assets/img/favicon.png') }}" type="image/x-icon" />
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@1,200&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <header @keydown.escape="isOpen = false" class="relative flex h-auto w-full overflow-hidden"
        x-data="{ isOpen: false }">
        <!-- Navbar -->
        <nav
            class="relative z-20 top-0 right-0 w-full inline-block px-10 pt-5 text-3xl text-black bg-transparent  bg-opacity-50 rounded-xl">
            <div class="flex justify-between items-center">
                <div>
                    <a href="{{ route('index') }}">
                        <img class="h-14" src='{{ asset('/storage/assets/img/logo.png') }}'>
                    </a>
                </div>
                <div class="hidden lg:block">
                    <ul class="flex">
                        <li class="px-4 py-4">
                            <a class="text-menu--item tracking-widest font-thin hover:font-bold"
                                href="{{ route('meals.index') }}">O NAMA</a>
                        </li>
                        <li class="px-4 py-4">
                            <a class="text-menu--item tracking-widest hover:font-bold"
                                href="{{ route('categories.index') }}">MENI</a>

                        </li>
                        <li class="px-4 py-4">
                            <a class="text-menu--item tracking-widest hover:font-bold"
                                href="{{ route('reservations.step.one') }}">REZERVACIJE</a>
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
                            href="{{ route('meals.index') }}">O NAMA
                        </a>
                    </li>
                    <li class="mr-3">
                        <a @click="isOpen = false"
                            class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="{{ route('categories.index') }}">MENI

                        </a>
                    </li>
                    <li class="mr-3">
                        <a @click="isOpen = false"
                            class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="{{ route('reservations.step.one') }}">REZERVACIJE
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




    <footer class="px-4 divide-y bg-white text-black">
        <div class="container flex flex-col justify-between py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">
            <div class="lg:w-1/3">
                <a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 lg:justify-start">
                    <img class="h-14" src='{{ asset('/storage/assets/img/logo.png') }}'>
                </a>
            </div>
            <div class="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-3">
                <div class="space-y-3">
                    <h3 class="tracki uppercase text-black">Kontakt</h3>
                    <ul class="space-y-1">
                        <li>
                            Refshalevej 96
                        </li>
                        <li>1432 Copenhagen K</li>
                        <li>
                            +45 32 96 32 97
                        </li>
                        <li>
                            noma@noma.dk
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h3 class="tracki uppercase text-black">Radno vrijeme</h3>
                    <ul class="space-y-1">
                        <li>
                            11:00 - 21:00
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <div class="uppercase text-gray-black">Društvene mreže</div>
                    <div class="flex justify-start space-x-3">
                        <a rel="noopener noreferrer" href="https://www.facebook.com/nomacph/" title="Facebook"
                            class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                                class="w-5 h-5 fill-current">
                                <path
                                    d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="https://twitter.com/nomacph" title="Twitter"
                            class="flex items-center p-1">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current">
                                <path
                                    d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="https://www.instagram.com/nomacph/" title="Instagram"
                            class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                                class="w-5 h-5 fill-current">
                                <path
                                    d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 text-sm text-center text-gray-400">Josip-Benjamin Szabo</div>
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
