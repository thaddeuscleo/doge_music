@extends('layouts.app')
@section('content')


    <section class="user-page">
        <div class="profile-card">
            <h3>{{ strtoupper(auth()->user()->name) }}</h3>
            <h4>{{ auth()->user()->email  }}</h4>
            <h4>{{ auth()->user()->balance }}</h4>
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
                @foreach($histories as $history)
                    @foreach($history as $date => $album)
                        <div class="item">
                            <h3>{{ $album->name }}</h3>
                            <div class="detail">
                                <p>{{ $date }}</p>
                                <p>{{ $album->price }}</p>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>


    </section>
@endsection

