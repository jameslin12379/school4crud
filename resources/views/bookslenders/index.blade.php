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
                        <th scope="row"><a href="/authors">Authors</a></th>
                        <!--<td>Mark</td>-->
                        <!--<td>Otto</td>-->
                        <!--<td>@mdo</td>-->
                    </tr>
                    <tr>
                        <th scope="row"><a href="/books">Books</a></th>
                        <!--<td>Jacob</td>-->
                        <!--<td>Thornton</td>-->
                        <!--<td>@fat</td>-->
                    </tr>
                    <tr>
                        <th scope="row" class="active-tab"><a href="/bookslenders">Booklenders</a></th>
                        <!--<td>Larry</td>-->
                        <!--<td>the Bird</td>-->
                        <!--<td>@twitter</td>-->
                    </tr>
                    <tr>
                        <th scope="row"><a href="/categories">Categories</a></th>
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
                        <th scope="row"><a href="/lenders">Lenders</a></th>
                        <!--<td>Larry</td>-->
                        <!--<td>the Bird</td>-->
                        <!--<td>@twitter</td>-->
                    </tr>
                    <tr>
                        <th scope="row"><a href="/publishers">Publishers</a></th>
                        <!--<td>Larry</td>-->
                        <!--<td>the Bird</td>-->
                        <!--<td>@twitter</td>-->
                    </tr>
                    <tr>
                        <th scope="row"><a href="/staffs">Staffs</a></th>
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
                        <th scope="col">Date returned</th>
                        <th scope="col">Due date</th>
                        <th scope="col">Fine</th>
                        <th scope="col">Book_id</th>
                        <th scope="col">Lender_id</th>
                        <th scope="col">Date_created</th>
                        <th scope="col">Date_edited</th>
                        @if (Auth::user()->level === 1)
                            <th scope="col"><a href="/bookslenders/create" class="btn btn-outline-secondary">Create</a></th>
                        @endif

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($bookslenders as $booklender)
                        <tr>
                            <td>{{ $booklender->id }}</td>
                            <td>{{ $booklender->date_returned }}</td>
                            <td>{{ $booklender->due_date }}</td>
                            <td>{{ $booklender->fine }}</td>
                            <td>{{ $booklender->book_id }}</td>
                            <td>{{ $booklender->lender_id }}</td>
                            <td>{{ $booklender->date_created }}</td>
                            <td>{{ $booklender->date_edited }}</td>
                            @if (Auth::user()->level === 1)
                                <td>
                                    <a href="/bookslenders/{{ $booklender->id }}/edit" class="btn btn-outline-secondary">Edit</a>
                                </td>
                                <td>
                                    <form action="/bookslenders/{{ $booklender->id }}" method="post">
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
