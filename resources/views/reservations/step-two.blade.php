<x-guest-layout>
    <div class="flex items-center min-h-screen w-2/3 bg-gray-50 my-24 rounded-lg">
        <div
            class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-[5px_5px_rgba(217,185,155,_0.4),_10px_10px_rgba(217,185,155,_0.3),_15px_15px_rgba(217,185,155,_0.2),_20px_20px_rgba(217,185,155,_0.1),_25px_25px_rgba(217,185,155,_0.05)]">
            <div class="flex flex-col md:flex-row">
                <div class="h-full md:h-auto md:w-1/2">
                    <img class="object-cover w-full h-full" src="{{ asset('/storage/assets/img/reserve.jpg') }}">
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h3 class="mb-4 text-xl font-bold text-black">Napravite rezervaciju</h3>

                        <div class="w-full bg-gray-200 rounded-full">
                            <div
                                class="w-100 p-1 text-sm font-medium leading-none text-center text-black bg-[#d9b99b] rounded-full">
                                Drugi korak
                            </div>
                        </div>
                        <form method="POST" action="{{ route('reservations.store.step.two', $reservation->id) }}">
                            @csrf
                            <div class="sm:col-span-6 pt-5">
                                <label for="table_id" class="block tracking-widest text-sm font-semibold text-black">
                                    Stol </label>
                                <div class="mt-1">
                                    <select id="table_id" name="table_id"
                                        class="block w-full transition font-semibold tracking-widest focus:border-2 focus:border-[#d9b99b]  focus:ring-0 duration-150 ease-in-out appearance-none bg-gray-200 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('table_id') border-red-500 @enderror">
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
                                    class="inline-block px-4 py-2 border-2 font-extrabold text-[#d9b99b]  border-[#d9b99b] hover:bg-[#d9b99b] hover:text-white rounded-lg  tracking-widest"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        class="inline mr-1  w-5 h-5 ">
                                        <path d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" stroke-width="1.5"
                                            stroke="currentColor" />
                                    </svg>Povratak</a>
                                <button type="submit"
                                    class="inline-block px-4 py-2 border-2 font-extrabold text-[#d9b99b]  border-[#d9b99b] hover:bg-[#d9b99b] hover:text-white rounded-lg  tracking-widest">Rezerviraj
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        class="inline ml-1  w-5 h-5 rotate-180 ">
                                        <path d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" stroke-width="1.5"
                                            stroke="currentColor" />
                                    </svg></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</x-guest-layout>
