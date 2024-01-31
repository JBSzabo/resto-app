<x-guest-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl text-center mt-24">
            <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-blueGray-800">{{ $category->name }}</h2>
            <hr class="my-12 h-0.5 border-t-0 bg-black opacity-100" />
        </div>
        <div class="mx-auto max-w-2xl px-4 py-4 mb-36 sm:px-6 sm:py-6 lg:max-w-7xl lg:px-8">


            <a href="{{ route('categories.index') }}" role="button"
                class="inline-block rounded border-2 border-black text-black hover:border-black hover:bg-black duration-200 hover:text-white px-6 gap-x-2 pb-2 pt-2.5 text-sm font-bold uppercase transition ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    class="inline ml-1 pb-[2px] w-5 h-5 ">
                    <path fill-rule="evenodd" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" clip-rule="evenodd"
                        stroke-width="1.5" stroke="currentColor" />
                </svg>Povratak
            </a>


            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 min-h-screen">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                    @foreach ($category->meals as $meal)
                        <!-- Card -->
                        <div class="h-full block rounded-lg bg-white shadow-xl  text-left">
                            <!-- Card image -->
                            <img class="rounded-t-lg " src="{{ Storage::url($meal->image) }}" alt="" />
                            <!-- Card body -->
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-2">
                                    <p class="block font-sans antialiased text-2xl  text-blue-black">
                                        {{ $meal->name }}
                                    </p>
                                    <p class="block font-sans antialiased text-xl  text-blue-gray-900">
                                        {{ $meal->price }} €
                                    </p>
                                </div>
                                <p class="block font-sans antialiased text-lg  text-gray-800 ">
                                    {{ $meal->description }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
