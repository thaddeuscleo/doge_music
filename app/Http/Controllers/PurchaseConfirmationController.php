<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\History;
use Illuminate\Http\Request;

class PurchaseConfirmationController extends Controller
{

    public function store($id){
        $user = auth()->user();
        $album = Album::findOrFail($id);
        $history = new History();
        $history->album_id = $album->id;
        $history->user_id = $user->id;
        $history->save();
        return back();
    }
}
