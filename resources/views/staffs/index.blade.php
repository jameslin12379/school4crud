@extends('layouts.app')

@section('content')

    @include('success')
    <div class="container pt-100">
        <div class="row">
            <div class="col-md-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"><a href="/">Addresses</a></th>
                        <!--<th scope="col">First</th>-->
                        <!--<th scope="col">Last</th>-->
                        <!--<th scope="col">Handle</th>-->
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <th scope="row"><a href="/customers">Customers</a></th>
                        <!--<td>Mark</td>-->
                        <!--<td>Otto</td>-->
                        <!--<td>@mdo</td>-->
                    </tr>
                    <tr>
                        <th scope="row"><a href="/customersstaffs">Customersstaffs</a></th>
                        <!--<td>Jacob</td>-->
                        <!--<td>Thornton</td>-->
                        <!--<td>@fat</td>-->
                    </tr>
                    <tr>
                        <th scope="row"><a href="/customersstaffsinventories">Customersstaffsinventories</a></th>
                        <!--<td>Larry</td>-->
                        <!--<td>the Bird</td>-->
                        <!--<td>@twitter</td>-->
                    </tr>
                    <tr>
                        <th scope="row"><a href="/genders">Genders</a></th>
                        <!--<td>Larry</td>-->
                        <!--<td>the Bird</td>-->
                        <!--<td>@twitter</td>-->
                    </tr>
                    <tr>
                        <th scope="row"><a href="/inventories">Inventories</a></th>
                        <!--<td>Larry</td>-->
                        <!--<td>the Bird</td>-->
                        <!--<td>@twitter</td>-->
                    </tr>
                    <tr>
                        <th scope="row"><a href="/manufacturers">Manufacturers</a></th>
                        <!--<td>Larry</td>-->
                        <!--<td>the Bird</td>-->
                        <!--<td>@twitter</td>-->
                    </tr>
                    <tr>
                        <th scope="row" class="active-tab"><a href="/staffs">Staffs</a></th>
                        <!--<td>Larry</td>-->
                        <!--<td>the Bird</td>-->
                        <!--<td>@twitter</td>-->
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-9 ofx-s overflow-x">
                <h5>{{ $count }} Rows</h5>
                <table class="table">
                    <!--<thead>-->
                    <!--<tr>-->
                    <!--<th scope="col">#</th>-->
                    <!--<th scope="col">First</th>-->
                    <!--<th scope="col">Last</th>-->
                    <!--<th scope="col">Handle</th>-->
                    <!--</tr>-->
                    <!--</thead>-->
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First_name</th>
                        <th scope="col">Last_name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Dob</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone_number</th>
                        <th scope="col">Gender_id</th>
                        <th scope="col">Address_id</th>
                        <th scope="col">Date_created</th>
                        <th scope="col">Date_edited</th>
                        @if (Auth::user()->level === 1)
                            <th scope="col"><a href="/staffs/create" class="btn btn-outline-secondary">Create</a></th>
                        @endif

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($staffs as $staff)
                        <tr>
                            <td>{{ $staff->id }}</td>
                            <td>{{ $staff->first_name }}</td>
                            <td>{{ $staff->last_name }}</td>
                            <td>{{ $staff->age }}</td>
                            <td>{{ $staff->dob }}</td>
                            <td>{{ $staff->email }}</td>
                            <td>{{ $staff->phone_number }}</td>
                            <td>{{ $staff->gender_id }}</td>
                            <td>{{ $staff->address_id }}</td>
                            <td>{{ $staff->date_created }}</td>
                            <td>{{ $staff->date_edited }}</td>
                            @if (Auth::user()->level === 1)
                                <td>
                                    <a href="/staffs/{{ $staff->id }}/edit" class="btn btn-outline-secondary">Edit</a>
                                </td>
                                <td>
                                    <form action="/staffs/{{ $staff->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-secondary">Delete</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach



                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
