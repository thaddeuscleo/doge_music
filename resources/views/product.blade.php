@extends('layouts.app')

@section('content')
    @include('search')
    <section class="product-page">

        <div class="album-head">
            <div class="album-head__art">
                <img src="{{-- TODO: Show Album Art here --}}" alt="">
            </div>
            <div class="album-head__desc">
                <h2>{{-- TODO: Show Album Name Here--}}</h2>
                <p>{{-- TODO: Show Artist Name --}}</p>
                {{--  TODO: Only Show This For Guess | Normal User (start)       --}}
                <div class="form-control">
                    <form action="" method="post">
                        <button>Buy - ${{-- TODO: Show Album Price --}}</button>
                    </form>
                </div>
                {{--  Only Show This For Guess | Normal User (end)  --}}
            </div>
        </div>

        <div class="sub-head">
            <h2>Songs</h2>
        </div>

        <div class="album-songs">
                {{-- TODO: Loop Songs Starts Here --}}
                <div class="song-item">
                    <h4>{{-- TODO: Show the song title here --}}</h4> 
                </div>
                {{-- Loop Songs Emds Here --}}
        </div>

    </section>

    {{-- If the message exists starts here --}}
    <script>
        let message = "{{-- TODO: Get The Message Here --}}"
        alert(message);
    </script>
    {{-- If the message exists ends here --}}
    

@endsection
