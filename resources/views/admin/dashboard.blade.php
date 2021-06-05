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
        </form>

        {{--    Delete Modal For Confirm The ADMIN for deleting the product  --}}
        <form action="" id="form-delete">
            @method('DELETE')
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
@endsection

