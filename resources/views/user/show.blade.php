@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["title"] }}</div>
                <div class="card-body">
                    {{-- Comments --}}
                    <b>ID:</b> {{ $data["user"]->getId() }}<br />
                    <b>Name:</b> {{ $data["user"]->getName() }}<br />
                    <b>Username:</b> {{ $data["user"]->getUserName() }}<br />
                    <b>Address:</b> {{ $data["user"]->getAddress() }}<br />
                    <b>Is staff:</b> {{ $data["user"]->getIsStaff() }}<br />
                    <b>Email:</b> {{ $data["user"]->getEmail() }}<br />
                    <b>Has rented movies:</b> {{ $data["user"]->getHasRentedMovies() }}<br />
                    <b>Password:</b> {{ $data["user"]->getPassword() }}<br />
                    <form action="{{ route("user.delete", ["id" => $data["user"]->getId()]) }}">
                        <button type="submit">Delete User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
