<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongApiController extends Controller
{
    public function get($id){
        return Song::where("album_id", "=", "$id")->get();
    }
}
