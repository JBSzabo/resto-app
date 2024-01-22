<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2  bg-sky-800 hover:bg-sky-950 rounded-lg text-white">Povratak</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded flex justify-center">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}">
                        @csrf
                        @method ('PUT')
                        <div class="sm:col-span-6">
                            <label for="first_name" class="block text-sm font-medium text-black"> Ime </label>
                            <div class="mt-1">
                                <input type="text" id="first_name" value="{{ $reservation->first_name }}"
                                    name="first_name"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-500 @enderror" />
                                @error('first_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="last_name" class="block text-sm font-medium text-black"> Prezime </label>
                            <div class="mt-1">
                                <input type="text" id="last_name" name="last_name"
                                    value="{{ $reservation->last_name }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-500 @enderror" />
                                @error('last_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-black"> Email </label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email" value="{{ $reservation->email }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror" />
                                @error('email')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="phone" class="block text-sm font-medium text-black"> Telefonski broj </label>
                            <div class="mt-1">
                                <input type="text" id="phone" name="phone" value="{{ $reservation->phone }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('phone') border-red-500 @enderror" />
                                @error('phone')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="res_date" class="block text-sm font-medium text-black"> Datum rezervacije
                            </label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" name="res_date" placeholder="dd-mm-yyyy"
                                    value="{{ $reservation->res_date }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('res_date') border-red-500 @enderror" />
                                @error('res_date')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-black"> Broj gostiju
                            </label>
                            <div class="mt-1">
                                <input type="number" id="guest_number" name="guest_number"
                                    value="{{ $reservation->guest_number }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-500 @enderror" />
                                @error('guest_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="table_id" class="block text-sm font-medium text-black"> Stol </label>
                            <div class="mt-1">
                                <select id="table_id" name="table_id"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('table_id') border-red-500 @enderror">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                            {{ $table->name }}
                                            ({{ $table->guest_number }} osobe)
                                        </option>
                                    @endforeach
                                </select>
                                @error('table_id')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-sky-800 hover:bg-sky-950 rounded-lg text-white">Ažuriraj</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
