<x-guest-layout>
    <div class="flex items-center min-h-screen w-2/3  bg-gray-50 rounded-lg my-24">
        <div
            class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-[5px_5px_rgba(217,185,155,_0.4),_10px_10px_rgba(217,185,155,_0.3),_15px_15px_rgba(217,185,155,_0.2),_20px_20px_rgba(217,185,155,_0.1),_25px_25px_rgba(217,185,155,_0.05)]">
            <div class="flex flex-col md:flex-row">
                <div class="h-full md:h-auto md:w-1/2">
                    <img class="object-cover w-full h-full" src="{{ asset('/storage/assets/img/reserve.jpg') }}">
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h3 class="mb-4 text-2xl font-bold text-black">Napravite rezervaciju</h3>

                        <div class="w-full bg-gray-200 rounded-full">
                            <div
                                class="w-1/2 p-1 text-sm font-medium leading-none text-center text-black bg-[#d9b99b] rounded-full">
                                Prvi korak
                            </div>
                        </div>


                        <form method="POST" action="{{ route('reservations.store.step.one') }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="first_name" class="block tracking-widest text-sm font-semibold text-black">
                                    Ime
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="first_name" value="{{ $reservation->first_name ?? '' }}"
                                        name="first_name"
                                        class="block w-full transition font-semibold tracking-widest focus:border-2 focus:border-[#d9b99b]  focus:ring-0 duration-150 ease-in-out appearance-none bg-gray-200 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-500 @enderror" />
                                    @error('first_name')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="last_name" class="block tracking-widest text-sm font-semibold text-black">
                                    Prezime
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="last_name" name="last_name"
                                        value="{{ $reservation->last_name ?? '' }}"
                                        class="block w-full transition font-semibold tracking-widest  focus:border-2 focus:border-[#d9b99b]  focus:ring-0 duration-150 ease-in-out appearance-none bg-gray-200 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-500 @enderror" />
                                    @error('last_name')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="email" class="block tracking-widest text-sm font-semibold text-black">
                                    Email </label>
                                <div class="mt-1">
                                    <input type="email" id="email" name="email"
                                        value="{{ $reservation->email ?? '' }}"
                                        class="block w-full transition font-semibold tracking-widest focus:border-2 focus:border-[#d9b99b]  focus:ring-0 duration-150 ease-in-out appearance-none bg-gray-200 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror" />
                                    @error('email')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="phone" class="block tracking-widest text-sm font-semibold text-black">
                                    Telefonski broj
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="phone" name="phone"
                                        value="{{ $reservation->phone ?? '' }}"
                                        class="block w-full transition font-semibold tracking-widest focus:border-2 focus:border-[#d9b99b]  focus:ring-0 duration-150 ease-in-out appearance-none bg-gray-200 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('phone') border-red-500 @enderror" />
                                    @error('phone')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="res_date" class="block tracking-widest text-sm font-semibold text-black">
                                    Datum
                                    rezervacije
                                </label>
                                <div class="mt-1">
                                    <input type="datetime-local" id="res_date" name="res_date" placeholder="dd-mm-yyyy"
                                        min="{{ $min_date }}" value="{{ $reservation->res_date ?? '' }}"
                                        class="block w-full transition font-semibold tracking-widest focus:border-2 focus:border-[#d9b99b]  focus:ring-0 duration-150 ease-in-out appearance-none bg-gray-200 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('res_date') border-red-500 @enderror" />

                                    @error('res_date')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <span class="text-xs">Odaberite vrijeme između 11:00 i 21:00 sati.</span>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="guest_number"
                                    class="block tracking-widest text-sm font-semibold text-black"> Broj gostiju
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="guest_number" name="guest_number"
                                        value="{{ $reservation->guest_number ?? '' }}"
                                        class="block w-full transition font-semibold tracking-widest focus:border-2 focus:border-[#d9b99b]  focus:ring-0 duration-150 ease-in-out appearance-none bg-gray-200 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-500 @enderror" />
                                    @error('guest_number')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-6 p-4 flex justify-end">
                                <button type="submit"
                                    class="inline-block px-4 py-2 border-2 font-extrabold text-[#d9b99b]  border-[#d9b99b] hover:bg-[#d9b99b] hover:text-white rounded-lg  tracking-widest">Dalje
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
