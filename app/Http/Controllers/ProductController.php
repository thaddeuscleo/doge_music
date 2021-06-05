<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Http\Request;

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

    }


    public function show($id)
    {
        $album = Album::where('id', $id)->first();
        $songs = Song::where('album_id', $id)->get();
        $params = [
            'album' => $album,
            'songs' => $songs
        ];
        return view('product', $params);
    }


    public function update(Request $request, $id)
    {
//        dd($id);
        dd($request);
//        Album::where("id", $id)->update([
//            "albu"
//        ]);
    }


    public function destroy($id)
    {

    }
}
