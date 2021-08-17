<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        /**
         * TODO:
         * - Show 20 rows each page
         */
        
         //Code starts here
         return view('products');
    }


    public function create()
    {
        /**
         * TODO:
         * - Redirect to admin add page
         */

         //Code starts here
    }


    public function store(Request $request)
    {
        /**
         * TODO:
         * - Validate album name have a minimum 10 characters long and cannot be empty
         * - Validate artist name have a minimum 5 character long and cannot be empty
         * - Validate price with maximum price $100
         * - Validate album art cannot be empty
         * - Validate songs must be at least 2 song in an album
         * - Validate song name cannot be empty and minimum 5 characters long
         * - Send Error message to the user
         * - Store the data in the database
         * - Store the album art in the file system
         */

         //Code starts here
    }


    public function show($id)
    {
        /**
         * TODO:
         * - Get the album & song from the database
         */

         //Code starts here
    }


    public function update(Request $request, $id)
    {
        /**
         * TODO:
         * - Validate album name have a minimum 10 characters long and cannot be empty
         * - Validate artist name have a minimum 5 character long and cannot be empty
         * - Validate price with maximum price $100
         * - Validate songs must be at least 2 song in an album
         * - Validate song name cannot be empty and minimum 5 characters long
         * - Send Error message to the user
         * - Store the data in the database
         * - Store the album art in the file system
         */

         //Code starts here
    }


    public function destroy($id)
    {
        /**
         * TODO:
         * - Delete the album according to the requested id
         */

         //Code starts here
    }
}
