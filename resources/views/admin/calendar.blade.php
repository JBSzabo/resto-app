<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black text-center text-2xl">
                    Kalendar
                    rezervacija<br>{{ request()->get('date') ? Carbon\Carbon::parse(request()->get('date'))->format('d.m.Y.') : date('d.m.Y.') }}
                </div>
            </div>
        </div>
    </div>


    <form class="m-2" method="POST" action="{{ route('admin.calendar') }}">
        @csrf
        <input class="bg-gray-100 text-black" type="date" name="date" id="name" onchange="this.form.submit()"
            placeholder="dd.mm.yyyy" value="{{ request()->get('date') ? request()->get('date') : date('Y-m-d') }}" />
    </form>



    <div class="grid grid-cols-2 gap-10">



        <!-- Each <div> is a single column.
        Place some content inside to see the effect. -->
        @foreach ($tables as $table)
            <!-- Table responsive wrapper -->
            <div class="overflow-x-auto bg-white text-black">
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-2xl">{{ $table->name }}</h1>
                    <hr class="border-gray-800 w-full">
                </div>
                <!-- Table -->
                <table class="min-w-full text-left text-sm whitespace-nowrap text-black">

                    <!-- Table head -->
                    <thead class="uppercase tracking-wider border-b-2 ">
                        <tr>
                            <th scope="col" class="px-6 py-4">
                                Vrijeme
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Ime
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Prezime
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Telefon
                            </th>
                        </tr>
                    </thead>

                    <!-- Table body -->
                    <tbody>
                        @foreach ($table->reservations->sortBy('res_date') as $reservation)
                            @if ($reservation->res_date->format('Y-m-d') == (request()->get('date') ? request()->get('date') : date('Y-m-d')))
                                <tr class="border-b hover:bg-neutral-100">
                                    <th scope="row" class="px-6 py-4">
                                        {{ $reservation->res_date->format('H:i') }}
                                    </th>
                                    <td class="px-6 py-4">{{ $reservation->first_name }}</td>
                                    <td class="px-6 py-4">{{ $reservation->last_name }}</td>
                                    <td class="px-6 py-4">{{ $reservation->email }}</td>
                                    <td class="px-6 py-4">{{ $reservation->phone }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>

                </table>

            </div>
        @endforeach

    </div>


</x-admin-layout>
