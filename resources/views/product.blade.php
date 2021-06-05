@extends('layouts.app')

@section('content')
    @include('search')
    <section class="product-page">

        <div class="album-head">
            <div class="album-head__art">
                <img src="{{asset('storage/images/album_art.jpg')}}" alt="">
            </div>
            <div class="album-head__desc">
                <h2>{{$album->name}}</h2> {{--          Show Album Name       --}}
                <p>Beatles</p> {{--          Show Artist Name       --}}
                @cannot('admin-access', auth()->user())
                    {{--          Only Show This For Guess (start)       --}}
                    <div class="form-control">
                        <button>Buy</button>
                    </div>
                    {{--          Only Show This For Guess (end)       --}}
                @endcannot
            </div>
        </div>

        <div class="sub-head">
            <h2>Songs</h2>
        </div>

        <div class="album-songs">
            @foreach($songs as $song)
                {{--       Show the all songs in this album (start)   --}}
                <div class="song-item">
                    <h4>{{$song->title}}</h4>  {{--       Show the song title         --}}
                </div>
                {{--       Show the all songs in this album (end)   --}}
            @endforeach
        </div>

    </section>
@endsection
