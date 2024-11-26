@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<h2 id="welcome-text">Welcome to The Culture House!</h2>
<div class="buttons">
    <a class="action-button" id="login-button" href="{{ route('login') }}">
        <div class="d-flex">
            <div>
                Login
                <span>
                    <img src="./assets/images/login.png" class="mx-2" alt="">
                </span>
            </div>
        </div>
    </a>
    <span class="span-or">OR</span>
    <a class="action-button" id="register-button" href="#">
        <div class="d-flex">
            <div>
                Register
                <span>
                    <img src="./assets/images/Register.png" class="mx-2" alt="">
                </span>
            </div>
        </div>
    </a>
</div>
@endsection