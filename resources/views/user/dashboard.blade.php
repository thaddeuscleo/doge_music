@extends('layouts.app')
@section('content')


    <section class="user-page">
        <div class="profile-card">
            <h6>Username</h6>
            <h3>{{ strtoupper(auth()->user()->name) }}</h3>
            <h6>Email</h6>
            <h4>{{ auth()->user()->email  }}</h4>
            <h6>Balance</h6>
            <h4>${{ auth()->user()->balance }}</h4>
            <form action="/logout" method="post">
                <div class=".logout">
                    <button>Log Out</button>
                </div>
                @csrf
            </form>
        </div>

        <div class="past-transaction-container">
            <h2>Past Transaction</h2>
            <div class="past-transaction">
                @if ($histories->isEmpty())
                <div class="item">
                    <h3>No Transaction Yet</h3>
                </div> 
                @endif
                @foreach($histories as $history)
                    @foreach($history as $date => $album)
                        <div class="item">
                            <h3>{{ $album->name }}</h3>
                            <div class="detail">
                                <p>{{ $date }}</p>
                                <p>${{ $album->price }}</p>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection

