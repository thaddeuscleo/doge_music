@extends('layouts.app')

@section('content')
    @include('layouts.back')
    
    <section class="register-page">
        <form class="form" action="/register" method="post">
            <div class="form__header">
                <img src="{{asset('storage/images/doge.png')}}" alt="">
                <h3>Register</h3>
            </div>
            <div class="form-control">
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="John Doe">
            </div>
            <div class="form-control">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="john@email.com">
            </div>
            <div class="form-control">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="form-control">
                <label for="password_confirmation"></label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="confirmation password">
            </div>
            <div class="form-control">
                <button>Register</button>
            </div>
            <div class="form-control">
                <a href="{{--  TODO: Navigate to login page --}}">I already have an account</a>
            </div>
        </form>
    </section>

    {{--  TODO: Include error layout when there is invalid field --}}
@endsection
