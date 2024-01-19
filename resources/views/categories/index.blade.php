<x-guest-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-blueGray-800">MENI</h2>
            <h2 class="text-base font-semibold leading-7 text-indigo-600"></h2>
            <hr class="my-12 h-0.5 border-t-0 bg-black opacity-100 dark:opacity-50" />
        </div>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach ($categories as $category)
                    <a href="{{ route('categories.show', $category->id) }}" class="group">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ Storage::url($category->image) }}"
                                class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <p class="mt-1 text-lg font-medium text-gray-900">{{ $category->name }}</p>
                        <h3 class="mt-4 text-sm text-gray-700">{{ $category->description }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
