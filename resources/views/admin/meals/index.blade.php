<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.meals.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Create Meals</a>
        </div>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-white">
                    Naziv
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Slika
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Opis
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Cijena
                </th>
                <th>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($meals as $meal)
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $meal->name}}
                </th>
                <td class="px-6 py-4">
                <img src="{{ Storage::url($meal->image) }}" class="w-16 h-16 rounded">
                </td>
                <td class="px-6 py-4 text-white">
                {{ $meal->description}}
                </td>
                <td class="px-6 py-4 text-white">
                    {{ $meal->price}} €
                    </td>
            </td>
            <td class="px-6 py-4 text-white">
            <div class="flex space-x-2">
                <a href="{{ route('admin.meals.edit', $meal->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" method="POST" action="{{ route('admin.meals.destroy', $meal->id) }}" onsubmit="return confirm('Jeste li sigurni?')">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            </div>
        </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-admin-layout>
