@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @include('util.message')
                <div class="card-header">Create User</div>
                <div class="card-body">

                <form method="POST" action="{{ route('user.save') }}">
                    @csrf
                    <input type="text" placeholder="Enter name" name="name" value="{{ old('name') }}" /></br>
                    <input type="text" placeholder="Enter username" name="username" value="{{ old('username') }}" /></br>
                    <input type="street-address" placeholder="Enter address" name="address" value="{{ old('address') }}" /></br>
                    <input type="email" placeholder="Enter email" name="email" value="{{ old('email') }}" /></br>
                    <input type="password" placeholder="Enter password" name="password" value="{{ old('password') }}" /></br>
                    <input type="submit" value="Send" />
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
