@extends('layouts.app')

@section('content')
    {{-- Include Search Here --}}
    <section class="products-page">

        <div class="products-page__head">
            <h1>Album Collection</h1>
        </div>

        <div class="albums-container">
            <div class="albums">
                {{-- TODO: Loop Albums Starts Here --}}
                <a href="{{-- TODO: Navigate to product page --}}">
                    <div class="album-item">
                        <img src="{{-- TODO: Show album art --}}" alt="">
                        <p>
                            {{-- TODO: Show album name --}}
                        </p>
                        <div class="overlay">View Album</div>
                    </div>
                </a>
                {{-- Loop Albums Ends Here --}}
            </div>
        </div>

        {{-- TODO: Pagination Link Here --}}
    </section>
@endsection

