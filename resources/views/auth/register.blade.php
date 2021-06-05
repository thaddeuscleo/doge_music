@extends('layouts.app')

@section('content')
    <section class="register-page">
        <form class="form" action="/register" method="post">
            <div class="form__header">
                <img src="" alt="">
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
                <a href="{{ route('login') }}">I already have an account</a>
            </div>
            @csrf
            @if($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </section>
@endsection
