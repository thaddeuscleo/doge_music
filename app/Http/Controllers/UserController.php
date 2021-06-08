<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\History;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        try {
            $this->authorize('user-access', $user);
//            $display_transaction = array();
            $histories = History::where("user_id", $user->id)->get();
            $histories = $histories->map(function ($data) {
                $album = Album::findOrFail($data->album_id);
                return array($data->created_at->toFormattedDateString() => $album);
            });
//            $params = [
//                "user" => $user,
//            ];
            return view('user.dashboard', compact("user", "histories"));
        } catch (AuthorizationException $e) {
            return abort(403);
        }
    }
}
