<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $albums = Album::paginate(20);
        $params = [
            "albums" => $albums
        ];
        return view('products', $params);
    }


    public function create()
    {
        return view('admin.add');
    }


    public function store(Request $request)
    {
        $album = new Album();
        $album->name = $request->get('album_name');
        $album->artist_name = $request->get('artist_name');
        $album->price = $request->get('price');
        if (!empty($request->album_art)) {
            $path = $request->album_art->store('images', 'local');
            $album->album_art = $path;
        }
        $album->save();
        $song_arr = $request->get('song');
        collect($song_arr)->map(function ($name) use ($album) {
            $song = new Song();
            $song->title = $name;
            $song->album_id = $album->id;
            $song->save();
        });
        return back();
    }


    public function show($id)
    {
        $album = Album::findOrFail($id);
        $songs = Song::where('album_id', $id)->get();
        $params = [
            'album' => $album,
            'songs' => $songs
        ];
        return view('product', $params);
    }


    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        $album->name = $request->get('album_name');
        $album->artist_name = $request->get('artist_name');
        $album->price = $request->get('price');
        $album->save();

        Song::where('album_id', $album->id)->delete();

        $song_arr = $request->get('song');
        collect($song_arr)->map(function ($name) use ($album) {
            $song = new Song();
            $song->title = $name;
            $song->album_id = $album->id;
            $song->save();
        });
        return back();
    }


    public function destroy($id)
    {
        $album = Album::find($id);
        Storage::delete($album->album_art);
        $album->delete();
        return back();
    }
}
