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
                @for ($i = 0; $i < 20; $i++)
                    <div class="item">
                        <h3>Album Name</h3>
                        <div class="detail">
                            <p>Date</p>
                            <p>10.000,00</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>


    </section>

@endsection

