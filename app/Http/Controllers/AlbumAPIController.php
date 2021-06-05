<?php

namespace App\Http\Controllers;

use App\Models\Album;

class AlbumAPIController extends Controller
{
    public function search($search)
    {
        return Album::where("name", "LIKE", "%{$search}%")->limit(5)->get();
    }

    public function get($id){
        return Album::findOrFail($id);
    }
}
