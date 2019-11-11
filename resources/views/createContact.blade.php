@extends('layout.app')

@section('content')

    <div class="card-header" style="text-align: center">
        <h1>
            Create Contact
        </h1>
    </div>
    <div class="card-body">

        <form action="/" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" placeholder="Enter first Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lname" id="lname" aria-describedby="lname" placeholder="Enter last Name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="phone" id="phone" aria-describedby="phon" placeholder="Enter phone Numbers">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Enter email">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>

@endsection
