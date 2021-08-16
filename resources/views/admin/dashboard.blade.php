@extends('layouts.app')

@section('content')
    <section class="admin-page">
        @include('search')

        <div class="admin-page__head">
            <h1>Manage Album's</h1>
            <div class="add-icon">
                <a href="{{route('add-product')}}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>

        <div class="admin-page__data">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"><p>ID</p></th>
                    <th scope="col"><p>Album Name</p></th>
                    <th scope="col"><p>Artist Name</p></th>
                    <th scope="col"><p>Price</p></th>
                    <th scope="col"><p>Publish Date</p></th>
                    <th scope="col"><p>Actions</p></th>
                </tr>
                </thead>
                <tbody>
                {{--        Loop All Album starts Here        --}}
                @foreach($albums as $album)
                    <tr>
                        <th scope="row"><p>{{ $album->id }}</p></th>
                        <td><p>{{$album->name}}</p></td>
                        <td><p>{{$album->artist_name}}</p></td>
                        <td><p>${{$album->price}}</p></td>
                        <td><p>{{$album->created_at->toFormattedDateString() }}</p></td>
                        <td>
                            <div class="actions">
                                <button class="view-btn" value="{{$album->id}}">View</button>
                                <button class="update-btn" value="{{$album->id}}">Update</button>
                                <button class="delete-btn" value="{{$album->id}}">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                {{--        Loop All Product ends Here        --}}
                </tbody>
            </table>
        </div>

        {{--    Pagination Pages Start Here    --}}
        {{$albums->links('vendor.pagination.custom')}}
        {{--    Pagination Pages Ends Here    --}}

        {{--    Update Modal For Updating the product data (Album & Songs)   --}}
        <form action="" id="form-update" method="post">
            @method('PUT')
            @csrf
            <div class="update-modal">
                <h2>Update Album</h2>
                <div class="form">
                    <div class="album-form-group">
                        <h2>Album</h2>
                        <div class="form-control">
                            <input type="text" name="album_name" placeholder="Album Name" id="album-name">
                        </div>
                        <div class="form-control">
                            <input type="text" name="artist_name" placeholder="Artist Name" id="artist-name">
                        </div>
                        <div class="form-control">
                            <input type="text" name="price" placeholder="Price" id="price">
                        </div>
                    </div>
                    <div class="song-form-group">
                        <div class="header">
                            <h2>Song's</h2>
                            <div class="add-button">
                                <button id="add-song-btn">Add Song</button>
                            </div>
                        </div>
                        <div class="form-control" id="song-container">
                        </div>
                    </div>
                </div>
                <div class="update-modal-btn">
                    <button id="submit-update">Update</button>
                </div>
            </div>
            <div class="update-modal-cross" id="close-update-modal-btn">
                <i class="fas fa-times fa-2x"></i>
            </div>
            @includeWhen($errors->any(), 'layouts.errors', ['errors' => $errors])
        </form>

        {{--    Delete Modal For Confirm The ADMIN for deleting the product  --}}
        <form action="" id="form-delete" method="post">
            @method('DELETE')
            @csrf
            <div class="form-delete-container">
                <div>
                    <h2 id="delete-album-name">Hello</h2>
                    <div class="button-group">
                        <button id="cancel-delete">Cancel</button>
                        <button id="confirm-delete">Delete</button>
                    </div>
                </div>
            </div>
        </form>

    </section>
    
    <script src="{{asset('js/admin.js')}}"></script>

    

    @if ($errors->any())
        <script>
            const errID = "{{ Session::get('pid') }}";
            console.log(errID);
            const formUpdate = document.getElementById('form-update')
            const container = document.getElementById('song-container')
            const albumNameField = document.getElementById('album-name')
            const artistNameField = document.getElementById('artist-name')
            const priceField = document.getElementById('price')
            const addSongButton = document.getElementById('add-song-btn')
            formUpdate.style.display = "block";
            let URL = `${'http://127.0.0.1:8000/'}api/albums/${errID}`
            container.innerHTML = ""
            fetch(URL)
                .then(value => value.json())
                .then(value => {
                    albumNameField.value = value.name
                    artistNameField.value = value.artist_name
                    priceField.value = value.price
                    formUpdate.action = `${'http://127.0.0.1:8000/'}product/${value.id}`
                    // show loading animation
                    fetch(`${'http://127.0.0.1:8000/'}api/songs/${value.id}`)
                        .then(data => data.json())
                        .then(data => {
                            // hide loading animation
                            if (data.length >= 4) {
                                addSongButton.classList.add("disabled")
                            }
                            data.forEach(data => {
                                container.innerHTML += `
                                    <input
                                        type="text"
                                        class="song"
                                        name="song[]"
                                        placeholder="Song Name"
                                        value="${data.title}">
                                `
                            })
                        })
                })
        </script>

    @endif
@endsection

