<x-guest-layout>
    <main class="container mx-auto my-16">
        <section class="py-20">
            <div class="flex flex-wrap md:flex-nowrap p-5">
                <div class="flex items-center justify-center p-5 mx-auto w-full lg:w-1/2">
                    <img alt="Menu Link Image" class="object-fill" src='{{ asset('/storage/assets/img/menu_image.jpg') }}'>
                </div>
                <div class="flex flex-col p-5 items-center text-center justify-center w-full lg:w-1/2">
                    <h2 class="text-4xl tracking-widest uppercase pb-5" data-scroll>Otkrijte naš meni</h2>
                    <p class="text-3xl mb-12 p-5" data-scroll>
                        Meso s roštilja, plodovi mora, pizze, čorbanci... Pregledajte naš
                        meni!
                    </p>
                    <button class="px-3 py-4">
                        <a class="px-3 py-4 bg-black text-white font-sans uppercase tracking-widest border hover:text-black hover:bg-white hover:border-black transition duration-300"
                            href="{{ route('categories.index') }}">Pogledajte meni</a>
                    </button>
                </div>
            </div>
        </section>
        <section class="py-20">
            <div class="flex flex-wrap md:flex-nowrap w-full p-5">
                <div class="flex flex-col p-5 items-center text-center justify-center w-full lg:w-1/2">
                    <h2 class="text-4xl tracking-widest uppercase pb-5">Rezervirajte stol</h2>
                    <p class="text-2xl mb-12 text-center">
                        Želite izbjeći čekanje? Rezervirajte svoje mjesto online!
                    </p>
                    <button class="px-3 py-4">
                        <a class="px-3 py-4 bg-black text-white font-sans uppercase tracking-widest border hover:text-black hover:bg-white hover:border-black transition duration-300"
                            href="{{ route('reservations.step.one') }}">Rezervacija</a>
                    </button>
                </div>
                <div class="flex items-center justify-center p-5 mx-auto w-full lg:w-1/2">
                    <img alt="Menu Link Image" class="object-fill" src='{{ asset('/storage/assets/img/table.jpg') }}'>
                </div>
            </div>
        </section>
        <section class="my-20 bg-fixed bg-center object-contain overflow-x-visible w-full"
            style="background-image: url({{ asset('/storage/assets/img/outside.jpg') }})">
            <div class="container px-4 mx-auto overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="pt-20 pb-24 px-8 md:px-16 rounded ">
                    <div class="flex flex-wrap -mx-8">
                        <div class="w-full lg:w-1/2 px-8 flex">
                            <div class="my-auto">
                                <h2 class="text-3xl lg:text-4xl font-semibold text-white uppercase">Posjetite nas :
                                </h2>
                                <p
                                    class="mt-2 leading-loose font-sans uppercase tracking-wide font-bold text-white text-lg">
                                    noma</p>
                                <p class="mt-2 mb-6 leading-loose text-white text-lg">REFSHALEVEJ 96<br>1432 COPENHAGEN
                                    K</p>
                                <h2 class="text-3xl lg:text-4xl font-semibold text-white uppercase">Nazovite nas :</h2>
                                <p class="mt-2 mb-6 leading-loose text-white text-lg">
                                    +45 32 96 32 97
                                </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 px-8 mt-12 lg:mt-0">
                            <div class="embed-responsive aspect-ratio-4/3 h-full">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2249.354152770791!2d12.6082921!3d55.6828303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652533b679080a5%3A0x42eaecc5eb37e114!2sNoma!5e0!3m2!1shr!2shr!4v1705707909110!5m2!1shr!2shr"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
