@extends('layout.app')

@section('content')

    <div class="card-header" style="text-align: center">
        <h1>Edit Contact</h1>
    </div>
    <div class="card-body">
        <form action="/edit/{{ $contact->id }}" method="post">

            {{ method_field('PATCH') }}

            {{ csrf_field() }}

            <div class="form-group">
                <input value="{{ $contact->fname }}" type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" placeholder="Enter first Name">
            </div>
            <div class="form-group">
                <input value="{{ $contact->lname }}" type="text" class="form-control" name="lname" id="lname" aria-describedby="lname" placeholder="Enter last Name">
            </div>
            <div class="form-group">
                <input value="{{ $contact->phone }}" type="number" class="form-control" name="phone" id="phone" aria-describedby="phon" placeholder="Enter phone Numbers">
            </div>
            <div class="form-group">
                <input value="{{ $contact->email }}" type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Enter email">
            </div>

            <button type="submit" class="btn btn-primary">Update Contact</button>
        </form>
    </div>

@endsection