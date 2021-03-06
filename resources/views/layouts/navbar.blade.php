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
        @auth
            @can('admin-access', auth()->user())
                <button class="nav-user__register-btn">
                    <a href=" {{ route('admin-dashboard') }} ">Dashboard</a>
                </button>
                <form action="/logout" method="post">
                    <div class="logout">
                        <button>Log Out</button>
                    </div>
                    @csrf
                </form>
            @else
                <button class="nav-user__register-btn">
                    <a href=" {{ route('user-dashboard') }} ">Dashboard</a>
                </button>
            @endcan
        @endauth

        @guest
            <a class="nav-user__login" href="{{ route('login') }}">Log In</a>
            <button class="nav-user__register-btn">
                <a href=" {{ route('register') }} ">Start As Member</a>
            </button>
        @endguest
    </div>
</nav>
