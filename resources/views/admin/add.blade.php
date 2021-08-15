@extends('layouts.app')

@section('content')
    <section class="add-music-page">

        <div class="add-music-page__head">
            <h1>Add Album</h1>
        </div>

        <form action="{{route('store-product')}}" id="form-add" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form">
                <div class="album-art">
                    <img src="{{ asset('storage/images/album_art.jpg') }}" alt="album_art" id="album-art">
                </div>
                <div class="form-group">
                    <div class="form-group__album">
                        <input type="text" placeholder="Album Name" name="album_name">
                        <input type="text" placeholder="Artist Name" name="artist_name">
                        <input type="text" placeholder="Price" name="price">
                        <input type="file" placeholder="choose" id="image-input" name="album_art">
                    </div>
                    <div class="form-group__songs">
                        <div class="form-group__songs__head">
                            <h3>Song's</h3>
                            <div>
                                <button id="add-song">Add Songs</button>
                            </div>
                        </div>
                        <div id="container">
                            {{-- <input type="text" name="song[]" placeholder="Song name" class="song"> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-btn">
                <button id="add-album">Add Album</button>
            </div>
        </form>
    </section>
    <script src="{{ asset('js/add-music.js') }}"></script>
    @includeWhen($errors->any(), 'layouts.errors', ['errors' => $errors])
@endsection
