@extends('layout.app')

@section('content')

    <div class="card-header" style="text-align: center">
        <h1>
            Address Book
        </h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <form action="/search" method="get" class="form-inline">
                    <input type="text" name="search" class="form-control" id="search">
                    <input type="submit" value="Search" class="btn btn-info">
                </form>
            </div>
            <div class="col">
                <a href="/create" class="btn btn-success float-right">Create User</a>
            </div>
        </div>

        <br>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone</th>
                <th scope="col">email</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->fname }}</td>
                    <td>{{ $contact->lname }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td style="text-align: right">
                        <a href="/edit/{{ $contact->id }}" class="btn btn-primary btn-sm">edit User</a>
                        <a href="/delete/{{ $contact->id }}" class="btn btn-danger btn-sm">delete User</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
