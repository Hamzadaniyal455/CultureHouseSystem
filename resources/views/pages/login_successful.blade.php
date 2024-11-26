@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div>
    <h1>Login Successful!</h1>
    <div class="row mt-5">
        <div class="col-md-8 text-left">
            <h4>
                You have successfully logged in. <br>
                Welcome to the House of Culture.
            </h4>
        </div>
        <div class="col-md-4 text-end">
            <img src="{{ asset('images/profile.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</div>
@endsection