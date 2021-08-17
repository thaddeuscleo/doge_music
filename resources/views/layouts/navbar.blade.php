<nav>
    <div class="nav-container">
        <img class="nav-container__logo" src="{{ asset('storage/images/doge_transparent.png') }}" alt="logo">
        <div class="nav-container__menu">
            <ul>
                <li><a class="current" href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('products') }}">Albums</a></li>
            </ul>
        </div>
    </div>

    <div class="nav-user">
        {{-- TOOD: Show Only For Authenticated User Starts Here --}}

            {{-- TODO: Show Admin Buttons Starts Here --}}
            <button class="nav-user__register-btn">
                <a href=" {{ route('admin-dashboard') }} ">Dashboard</a>
            </button>
            <form action="">
                <div class="logout">
                    <button>Log Out</button>
                </div>
            </form>
            {{-- Show Admin Buttons Ends Here --}}

            {{-- TODO: Show Normal User Buttons Starts Here --}}
            <button class="nav-user__register-btn">
                <a href=" {{ route('user-dashboard') }} ">Dashboard</a>
            </button>
            {{-- Show Normal User Buttons Ends Here --}}
                
        {{-- Show Only For Authenticated User Ends Here --}}

        {{-- TODO: Show Guess Buttons Starts Here --}}
            <a class="nav-user__login" href="{{ route('login') }}">Log In</a>
            <button class="nav-user__register-btn">
                <a href=" {{ route('register') }} ">Start As Member</a>
            </button>
        {{-- Show Guess Buttons Ends Here --}}
    </div>
</nav>
