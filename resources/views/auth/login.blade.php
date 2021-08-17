@extends('layouts.app')

@section('content')
    @include('layouts.back')

    <section class="login-page">
        <form class="form" action="/login" method="post">
            <div class="form__header">
                <img src="{{ asset('storage/images/doge.png') }}" alt="">
                <h3>Log in</h3>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="john@email.com">
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="password">
            </div>
            <div class="remember-me">
                <input type="checkbox" id="remember" placeholder="remember">
                <label for="remember">remember me</label>
            </div>
            <div class="form-control">
                <button>Log In</button>
            </div>
            <div class="form-control">
                <a href="{{--  TODO: Navigate To register page --}}">I don't have an account yet</a>
            </div>
        </form>
    </section>

    {{--  TODO: Include error layout when there is invalid field --}}
@endsection