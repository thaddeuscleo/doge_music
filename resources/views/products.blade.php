@extends('layouts.app')

@section('content')
    @include('search')
    <section class="products-page">

        <div class="products-page__head">
            <h1>Album Collection</h1>
        </div>

        <div class="albums-container">
            <div class="albums">
                @foreach($albums as $album)
                    <a href="{{route('product', $album->id)}}">
                        <div class="album-item">
                            <img src="{{ asset($album->album_art) }}" alt="">
                            <p>
                                {{$album->name}}
                            </p>
                            <div class="overlay">View Album</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        {{$albums->links('vendor.pagination.custom')}}
    </section>
@endsection

