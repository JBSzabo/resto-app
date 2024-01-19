<x-guest-layout>
    <div class="flex items-center min-h-screen w-2/3 bg-gray-50 my-24 rounded-lg">
        <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row">
                <div class="h-full md:h-auto md:w-1/2">
                    <img class="object-cover w-full h-full"
                        src="https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790__340.jpg">
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h3 class="mb-4 text-xl font-bold text-blue-600">Make reservation</h3>

                        <div class="w-full bg-gray-200 rounded-full">
                            <div
                                class="w-100 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                Step 2
                            </div>
                        </div>
                        <form method="POST" action="{{ route('reservations.store.step.two', $reservation->id) }}">
                            @csrf
                            <div class="sm:col-span-6 pt-5">
                                <label for="table_id" class="block text-sm font-medium text-white"> Stol </label>
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
                            <div class="mt-6 p-4 flex justify-between">
                                <a href="{{ route('reservations.step.one') }}"
                                    class="px-4 py-2 bg-sky-800 hover:bg-sky-950 rounded-lg text-white">Povratak</a>
                                <button type="submit"
                                    class="px-4 py-2 bg-sky-800 hover:bg-sky-950 rounded-lg text-white">Rezerviraj!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</x-guest-layout>
