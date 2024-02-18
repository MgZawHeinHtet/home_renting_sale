<x-agent-dashboard-layout>
    <div class="flex gap-5">
        <div class="w-[75%] ">
            <div class="grid grid-cols-3 gap-4 ">

                {{-- property item card --}}
                <div class="flex bg-home-900 border border-yellow-600 justify-center items-center p-4 rounded">
                    <div class="flex-1">
                        <p class="text-gray-300"> Total Properties
                        </p>
                        <p class="text-xl font-bold text-gray-300">{{ $total_rent_properties + $total_sale_properties }}
                        </p>
                    </div>

                    <div class="w-10 h-10 flex items-center justify-center bg-yellow-50 rounded-full">
                        <i class="fas fa-house text-home-600"></i>
                    </div>

                </div>


                <div class="flex bg-home-900 border border-yellow-600 justify-center items-center p-4 rounded">
                    <div class="flex-1">
                        <p class="text-gray-300"> On Rent
                        </p>
                        <p class="text-xl font-bold text-gray-300">{{ $total_rent_properties }}</p>
                    </div>

                    <div class="w-10 h-10 flex items-center justify-center bg-yellow-50 rounded-full">
                        <i class="fa-solid fa-building text-home-600"></i>
                    </div>

                </div>

                <div class="flex bg-home-900 border border-yellow-600 justify-center items-center p-4 rounded">
                    <div class="flex-1">
                        <p class="text-gray-300"> Total Sale
                        </p>
                        <p class="text-xl font-bold text-gray-300">{{ $total_sale_properties }}</p>
                    </div>

                    <div class="w-10 h-10 flex items-center justify-center bg-yellow-50 rounded-full">
                        <i class="fa fa-diamond text-home-600" aria-hidden="true"></i>

                    </div>

                </div>
            </div>
            <div class="mt-10">
                <canvas id="myChart"></canvas>
            </div>
            <div class="mt-10   p-3 rounded">
                <h4 class="text-gray-300 mb-4">Recent Booking</h4>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    B-Number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name And Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    check_in
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    check_out
                                </th>
                                <th>
                                    total days
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    booking price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recent_bookings as $booking)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4">
                                        {{ $booking->booking_number }}
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-10 h-10 rounded-full object-cover"
                                            src="{{ $booking->user->profile_img }}" alt="Jese image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">
                                                {{ $booking->first_name . ' ' . $booking->last_name }}</div>
                                            <div class="font-normal text-gray-500">{{ $booking->email }}</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ date('M d', strtotime($booking->check_in)) }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ date('M d', strtotime($booking->check_out)) }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="p-2 bg-yellow-600 rounded-3xl text-white text-center">

                                            {{ $booking->total_days }} days
                                        </div>
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $booking->booking_price }} kyats
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            @if ($booking->status === 'cancel')
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                                                {{ $booking->status }}
                                            @else
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                {{ $booking->status }}
                                            @endif

                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="w-[25%] space-y-3">
            <div class="p-2 bg-pink-100 rounded">
                <p class="font-bold text-sm">Property Sales Income</p>
                <p class="text-xl font-bold">{{ $total_income_sale }} lakhs</p>
                <p class="text-gray-700">{{ auth()->user()->propertySale()->where('isSold', true)->count() }} Sales</p>
                <img class="h-[100px] w-full mt-2" src="{{ asset('assets/barchart.png') }}" alt="">
            </div>

            <div class="p-2 bg-blue-100 rounded">
                <p class="font-bold text-sm">Property on rent Income</p>
                <p class="text-xl font-bold"> {{ $total_income_rent }} kyats</p>
                <p class="text-gray-700">{{ $number_rent }} on rent</p>
                <img class="h-[100px] w-full mt-2" src="{{ asset('assets/barchart.png') }}" alt="">
            </div>
            <div class="p-2 bg-green-100 rounded">
                <p class="font-bold text-sm">Total Credit Points</p>
                <p class="text-xl font-bold"> {{ auth()->user()->credit_points }} points</p>
                <p class="text-gray-700">on {{ auth()->user()->creditTranscation->count() }} transcation</p>
                <img class="h-[100px] w-full mt-2" src="{{ asset('assets/barchart.png') }}" alt="">
            </div>
            <div class="p-2 bg-cyan-100 rounded">
                <p class="font-bold text-sm">Property on Region</p>
                <div class="mt-1">
                    <canvas id="myChart2"></canvas>
                </div>

            </div>
           
        </div>
    </div>
</x-agent-dashboard-layout>

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        const ctx2 = document.getElementById('myChart2');

        let labels = @json($labels);
        let rent_income = @json($income_rent);
        let outcomes = @json($outcomes);

        let xValues = ["Yangon", "Mandalay", "Ayeyarwaddy"];
        let yValues = [55, 49, 44];
        // let barColors = [
        //     "#b91d47",
        //     "#00aba9",
        //     "#2b5797",
        //     "#e8c3b9",
        //     "#1e7145"
        // ];

        new Chart(ctx2, {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: false,
                    text: "World Wide Wine Production 2018"
                }
            }
        });

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels.sort(),
                datasets: [{
                    label: 'For Income ',
                    data: rent_income,
                    borderWidth: 1
                }, {
                    label: 'For Outcome',
                    data: outcomes,
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Properties Incomes and Outcomes stats',
                        padding: {
                            top: 10,
                            bottom: 30,
                            left: 0
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection

@yield('javascript')
