@extends('backend.layout.app')

@section('content')
    <div class="container">

        <div class="container">
            <div class="container">
                <div class="container">

                    <div class="container">




                        <br>
                        <p class="text-info" style="text-align: center">Drivers List</p><br><br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    {{-- <th scope="col">Experience</th> --}}
                                    <th scope="col">Assigned Status</th>
                                    <th scope="col">First Created</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($driversList as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address }}</td>
                                        {{-- <td>{{ $item->experience }}</td> --}}
                                        <td>
                                            @if ($item->assigned_to > 0)
                                                <button class="btn btn-sm px-3 btn-success">Assigned</button>
                                            @else
                                                <button class="btn btn-sm px-3 btn-warning">Not Assigned</button>
                                            @endif
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        



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
