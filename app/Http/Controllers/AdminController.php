<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        try {
            $this->authorize('admin-access');
            $albums = Album::paginate(10);
            return view('admin.dashboard', compact("albums"));
        } catch (AuthorizationException $e) {
            return abort(403);
        }
    }
}
