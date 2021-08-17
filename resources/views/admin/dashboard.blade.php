@extends('layouts.app')

@section('content')
    <section class="admin-page">
        @include('search')

        <div class="admin-page__head">
            <h1>Manage Album's</h1>
            <div class="add-icon">
                <a href="{{--  TODO: Navigate to add product page --}}">
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
                {{--  TODO: Loop All Products starts Here --}}
                    <tr>
                        <th scope="row"><p>{{--  TODO: Show the product id --}}</p></th>
                        <td><p>{{--  TODO: Show the album --}}</p></td>
                        <td><p>{{--  TODO: Show the artist name --}}</p></td>
                        <td><p>${{--  TODO: Show the product price --}}</p></td>
                        <td><p>{{--  TODO: Show the launch date --}}</p></td>
                        <td>
                            <div class="actions">
                                <button class="view-btn">View</button>
                                <button class="update-btn">Update</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                {{--  Loop All Products ends Here --}}
                </tbody>
            </table>
        </div>

        {{--   TODO: Pagination Link Here    --}}
        
        {{--    Update Modal For Updating the product data (Album & Songs)   --}}
        <form action="" id="form-update" method="post">
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
            {{-- TODO: Show Error Message Using The Error Template Layout here --}}
        </form>

        {{--    Delete Modal For Confirm The ADMIN for deleting the product  --}}
        <form action="" id="form-delete" method="post">
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

