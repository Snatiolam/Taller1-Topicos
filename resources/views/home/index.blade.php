@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home Page</div>

                <div class="card-body">
                   <a href="{{ route("user.create") }}">Create user</a>
                </div>
                <div class="card-body">
                   <a href="{{ route("user.list") }}">List users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

