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


            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">


                @foreach ($category->meals as $meal)
                    <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                            class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                            <img src="{{ Storage::url($meal->image) }}" alt="card-image" class=" h-full" />
                        </div>
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
                @endforeach

            </div>
        </div>
    </div>
</x-guest-layout>
