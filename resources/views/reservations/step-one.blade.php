<x-guest-layout>
    <div class="flex items-center min-h-screen w-2/3  bg-gray-50 rounded-lg my-24">
        <div
            class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-[5px_5px_rgba(0,_98,_90,_0.4),_10px_10px_rgba(0,_98,_90,_0.3),_15px_15px_rgba(0,_98,_90,_0.2),_20px_20px_rgba(0,_98,_90,_0.1),_25px_25px_rgba(0,_98,_90,_0.05)]">
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
                                class="w-1/2 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                Step1
                            </div>
                        </div>
                        <form method="POST" action="{{ route('reservations.store.step.one') }}">
                            @csrf
                            <div class="sm:col-span-6">
                                <label for="first_name" class="block text-sm font-medium text-black"> Ime
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="first_name" value="{{ $reservation->first_name ?? '' }}"
                                        name="first_name"
                                        class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-500 @enderror" />
                                    @error('first_name')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="last_name" class="block text-sm font-medium text-black"> Prezime
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="last_name" name="last_name"
                                        value="{{ $reservation->last_name ?? '' }}"
                                        class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-500 @enderror" />
                                    @error('last_name')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="email" class="block text-sm font-medium text-black"> Email </label>
                                <div class="mt-1">
                                    <input type="email" id="email" name="email"
                                        value="{{ $reservation->email ?? '' }}"
                                        class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror" />
                                    @error('email')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="phone" class="block text-sm font-medium text-black"> Telefonski broj
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="phone" name="phone"
                                        value="{{ $reservation->phone ?? '' }}"
                                        class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('phone') border-red-500 @enderror" />
                                    @error('phone')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="res_date" class="block text-sm font-medium text-black"> Datum
                                    rezervacije
                                </label>
                                <div class="mt-1">
                                    <input type="datetime-local" id="res_date" name="res_date" placeholder="dd-mm-yyyy"
                                        min="{{ $min_date }}" value="{{ $reservation->res_date ?? '' }}"
                                        class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('res_date') border-red-500 @enderror" />

                                    @error('res_date')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <span class="text-xs">Odaberite vrijeme između 11:00 i 21:00 sati.</span>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="guest_number" class="block text-sm font-medium text-black"> Broj gostiju
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="guest_number" name="guest_number"
                                        value="{{ $reservation->guest_number ?? '' }}"
                                        class="block w-full transition duration-150 ease-in-out appearance-none bg-slate-300 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-500 @enderror" />
                                    @error('guest_number')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-6 p-4 flex justify-end">
                                <button type="submit"
                                    class="px-4 py-2 bg-sky-800 hover:bg-sky-950 rounded-lg text-white">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-guest-layout>
