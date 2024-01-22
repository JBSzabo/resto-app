<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>




    <div class="mx-auto max-w-2xl px-1 sm:px-1 lg:px-2 py-1 sm:py-2 lg:max-w-7xl  min-h-screen">
        <div class="grid grid-cols-1 gap-x-3 gap-y-5  lg:grid-cols-2 xl:grid-cols-2 xl:gap-x-4">

            <div class="flex-wrap basis-1/4 shadow-lg rounded-lg bg-gray-200 overflow-hidden h-fit">
                <div class="py-3 px-5 bg-gray-100 text-black text-center text-xl">Rezervacije ovaj tjedan</div>
                <canvas class="p-10 " id="resWeek"></canvas>
            </div>

            <div class="basis-1/4 shadow-lg rounded-lg bg-gray-200 overflow-hidden h-fit">
                <div class="py-3 px-5 bg-gray-100 text-black text-center text-xl">Rezervacije idući tjedan</div>
                <canvas class="p-10 " id="resNextWeek"></canvas>
            </div>

            <div class="basis-1/4 shadow-lg rounded-lg bg-gray-200 overflow-hidden h-fit">
                <div class="py-3 px-5 bg-gray-100 text-black text-center text-xl">Rezervirani stolovi ukupno</div>
                <canvas class="p-10" id="favTables"></canvas>
            </div>

            <div class="basis-1/4 shadow-lg rounded-lg bg-gray-200 overflow-hidden h-fit">
                <div class="py-3 px-5 bg-gray-100 text-black text-center text-xl ">Rezervacije po mjesecima</div>
                <canvas class="p-10 " id="resYear"></canvas>
            </div>


        </div>
    </div>





    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Chart bar -->
    <script>
        Chart.defaults.color = '#000';




        const labelsBarChartYear = [
            "Siječanj",
            "Veljača",
            "Ožujak",
            "Travanj",
            "Svibanj",
            "Lipanj",
            "Srpanj",
            "Kolovoz",
            "Rujan",
            "Listopad",
            "Studeni",
            "Prosinac",
        ];
        const dataBarChartYear = {
            labels: labelsBarChartYear,
            datasets: [{
                label: "Broj rezervacija",
                data: {!! json_encode($chart_data) !!},
                borderColor: '#baffc9',
                backgroundColor: '#00b159',
            }, ],
        };
        const configBarChartYear = {
            type: "line",
            data: dataBarChartYear,
            options: {},
        };
        var chartBarYear = new Chart(
            document.getElementById("resYear"),
            configBarChartYear
        );


        const dataBarChartWeek = {
            labels: {!! json_encode($dates) !!},
            datasets: [{
                label: "Broj rezervacija",
                data: {!! json_encode($this_week) !!},
                borderColor: '#FF6384',
                backgroundColor: '#ffdfba',
            }, ],
        };
        const configBarChartWeek = {
            type: "bar",
            data: dataBarChartWeek,
            options: {},
        };
        var chartBarWeek = new Chart(
            document.getElementById("resWeek"),
            configBarChartWeek
        );



        const dataBarChartNextWeek = {
            labels: {!! json_encode($dates_next) !!},
            datasets: [{
                label: "Broj rezervacija",
                data: {!! json_encode($next_week) !!},
                borderColor: '#FF8811',
                backgroundColor: '#f37735',
            }, ],
        };
        const configBarChartNextWeek = {
            type: "bar",
            data: dataBarChartNextWeek,
            options: {},
        };
        var chartBarNextWeek = new Chart(
            document.getElementById("resNextWeek"),
            configBarChartNextWeek
        );

        const dataBarChartTable = {
            labels: {!! json_encode($table_names) !!},
            datasets: [{
                label: "Broj rezervacija",
                data: {!! json_encode($table_count) !!},
            }, ],
        };
        const configBarChartTable = {
            type: "pie",
            data: dataBarChartTable,
            options: {},
        };
        var chartBarTable = new Chart(
            document.getElementById("favTables"),
            configBarChartTable
        );
    </script>
</x-admin-layout>
