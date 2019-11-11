@extends('layout.app')

@section('content')

    <div class="card-header" style="text-align: center">
        <h1>Delete Contact</h1>
    </div>
    <div class="card-body">
        <form action="/delete/{{ $contact->id }}" method="post">

            {{ method_field('DELETE') }}

            {{ csrf_field() }}

            <div class="form-group">
                <input value="{{ $contact->fname }}" type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" placeholder="Enter first Name" disabled>
            </div>
            <div class="form-group">
                <input value="{{ $contact->lname }}" type="text" class="form-control" name="lname" id="lname" aria-describedby="lname" placeholder="Enter last Name" disabled>
            </div>
            <div class="form-group">
                <input value="{{ $contact->phone }}" type="number" class="form-control" name="phone" id="phone" aria-describedby="phon" placeholder="Enter phone Numbers" disabled>
            </div>
            <div class="form-group">
                <input value="{{ $contact->email }}" type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Enter email" disabled>
            </div>

            <button type="submit" class="btn btn-danger">Delete Contact</button>
        </form>
    </div>

@endsection