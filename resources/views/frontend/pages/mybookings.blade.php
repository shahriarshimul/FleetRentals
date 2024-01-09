@extends('frontend.layout.app')

@section('content')
    <style>
        .btn_holder {
            position: relative
        }

        .float_right {
            position: absolute;
            top: -50px;
            right: 20px;
        }

        footer {
            position: absolute;
            width: 100%;
            bottom: 0px;
            left: 0px;
            /* margin-top: 5rem; */
        }


    </style>

    <div class="container-flex px-3 py-5 bg-dark text-light" id="orderReport">
        <h3 class="text-center font-weight-bold mb-5">All Bookings Of "{{ auth()->user()->name }}" - RentVehicle</h3>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ordering Name</th>
                    <th scope="col">Ordering Phone</th>
                    <th scope="col">Status</th>
                    <th scope="col">Starts At</th>
                    <th scope="col">Ends At</th>
                    <th scope="col">Ordering Location</th>
                    <th scope="col">Time</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Total</th>
                    <th scope="col">Ordered At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($getBookings as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            <button class="btn btn-sm btn-warning">{{ $item->status }}</button>
                        </td>
                        <td>{{ $item->from_date }}</td>
                        <td>{{ $item->to_date }}</td>
                        <td>{{ $item->road }}, {{ $item->city }}, {{ $item->location }}</td>
                        <td>{{ $item->hour }} Hr</td>
                        <td>{{ $item->transaction_id }}</td>
                        <td>{{ $item->total }} {{ $item->currency }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="btn_holder bg-dark">
        <button onclick="printDiv('orderReport')" class="btn btn-success px-5 mb-5 float_right">Print</button>
    </div>


    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
