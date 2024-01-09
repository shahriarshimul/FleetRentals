@extends('backend.layout.app')

@section('content')
    <div class="container">

        <div class="container">
            <div class="container">
                <div class="container">

                    <div class="container">




                        <br>
                        <p class="text-info" style="text-align: center">Book List</p><br><br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Road</th>
                                    <th scope="col">Orders Time</th>
                                    <th>Assigned Driver</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($userBooking as $item)
                                    <tr>
                                        <form action="/assign-driver" method="post">
                                            @csrf
                                            <th scope="row">{{ $item->id }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->location }}</td>
                                            <td>{{ $item->city }}</td>
                                            <td>{{ $item->road }}</td>
                                            <td>{{ $item->created_at->diffForHumans() }}</td>
                                            <td>
                                                <input type="hidden" name="booking_id" value="{{ $item->id }}">
                                                <select name="driver_email" id="" class="form-select">
                                                    @forelse ($driversList as $driver)
                                                        <option value="0">Select Driver</option>
                                                        <option value="{{ $driver->email }}"
                                                            @if ($driver->email == $item->assigned_driver_mail) selected @endif>
                                                            {{ $driver->name }}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </td>
                                            <td>

                                                @if (!empty($item->assigned_driver_mail))
                                                    <button class="btn btn-primary">Assigned</button>
                                                @else
                                                    <button class="assign_btn btn btn-light">Assign</button>
                                                @endif
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
