@extends('layouts.app')

@section('content')
    <section class="login-page">
        <form class="form" action="/login" method="post">
            <div class="form__header">
                <img src="" alt="">
                <h3>Log in</h3>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="john@email.com">
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="form-control">
                <button>Log In</button>
            </div>
            <div class="form-control">
                <a href="{{ route('register') }}">I don't have an account yet</a>
            </div>
            @csrf
        </form>
    </section>
@endsection

