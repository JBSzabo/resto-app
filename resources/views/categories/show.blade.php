<x-guest-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-blueGray-800">{{ $category->name }}</h2>
            <h2 class="text-base font-semibold leading-7 text-indigo-600"></h2>
            <hr class="my-12 h-0.5 border-t-0 bg-black opacity-100 dark:opacity-50" />
        </div>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                @foreach ($category->meals as $meal)
                    <div class="group rounded relative shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] ">
                        <div class="block rounded-lg ">

                            <img src="{{ Storage::url($meal->image) }}"
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between p-2">
                            <div>
                                <h3 class="text-lg text-gray-700">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $meal->name }}
                                </h3>
                                <p class="mt-1 text-lg text-gray-500">{{ $meal->description }}</p>
                            </div>
                            <p class="text-lg font-medium text-gray-900">{{ $meal->price }} €</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-guest-layout>
