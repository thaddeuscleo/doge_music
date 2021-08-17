@extends('layouts.app')
@section('content')


    <section class="user-page">
        <div class="profile-card">
            <h6>Username</h6>
            <h3>{{--  TODO: Show logged in user username --}}</h3>
            <h6>Email</h6>
            <h4>{{--  TODO: Show logged in user email --}}</h4>
            <h6>Balance</h6>
            <h4>${{--  TODO: Show logged in user balance --}}</h4>
            <form action="/logout" method="post">
                <div class=".logout">
                    <button>Log Out</button>
                </div>
            </form>
        </div>

        <div class="past-transaction-container">
            <h2>Past Transaction</h2>
            <div class="past-transaction">
                {{-- If The User Haven't Purchase Anything Yet (Start) --}}
                    <div class="item">
                        <h3>No Transaction Yet</h3>
                    </div> 
                {{-- If The User Haven't Purchase Anything Yet (End) --}}
                
                {{-- TODO: Transaction Loop Starts Here --}}
                    <div class="item">
                        <h3>{{-- TODO: Show Album name here --}}</h3>
                        <div class="detail">
                            <p>{{-- TODO: Show purchase date here --}}</p>
                            <p>${{-- TODO: Show purchase price here --}}</p>
                        </div>
                    </div>
                {{-- TODO: Transaction Loop Ends Here --}}
            </div>
        </div>
    </section>
@endsection

