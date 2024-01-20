<x-guest-layout>
    <section class="my-16">
        <div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
                <div class="relative z-10 lg:py-16">
                    <div class="relative h-64 sm:h-80 lg:h-full">
                        <img alt="House" src="{{ asset('/storage/assets/img/team.jpg') }}"
                            class="absolute inset-0 h-full w-full object-cover" />
                    </div>
                </div>

                <div class="relative flex items-center bg-gray-100">
                    <span class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100"></span>

                    <div class="p-8 sm:p-16 lg:p-24">
                        <h2 class="text-2xl font-bold sm:text-3xl">
                            O nama
                        </h2>

                        <p class="text-xl mt-4 text-black">
                            Posljednjih dvadeset godina, noma je restoran koji uvijek želi učiti i rasti - kako bismo
                            bili najbolji što možemo biti!</p>
                        <p class="text-xl mt-4 text-black">
                            Naše podrijetlo je ukorijenjeno u istraživanju svijeta
                            prirode, koje je započelo jednostavnom željom da ponovno otkrijemo divlje lokalne sastojke
                            tražeći hranu i prateći godišnja doba.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
