<x-guest-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl text-center mt-24">
            <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-blueGray-800">MENI</h2>
            <hr class="my-12 h-0.5 border-t-0 bg-black" />
        </div>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 min-h-screen">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                @foreach ($categories as $category)
                    <a href="{{ route('categories.show', $category->name) }}"
                        class="group hover:scale-110 duration-500 hover:rotate-3">
                        <!-- Card -->
                        <div class="h-full block rounded-lg bg-white shadow-xl  text-left">
                            <!-- Card image -->
                            <img class="rounded-t-lg " src="{{ Storage::url($category->image) }}" alt="" />
                            <!-- Card body -->
                            <div class="p-6">
                                <!-- Title -->
                                <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 ">
                                    {{ $category->name }}
                                </h5>
                                <!-- Text -->
                                <p class="mb-2 text-base text-neutral-700 ">
                                    {{ $category->description }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
