<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        try {
            $this->authorize('user-access', $user);
            $params = [
                "user" => $user,
            ];
            return view('user.dashboard', $params);
        } catch (AuthorizationException $e) {
            return abort(403);
        }
    }
}
