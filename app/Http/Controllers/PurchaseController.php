<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\History;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{

    public function store($id){
        /**
         * TODO:
         * - Validate the user is a normal user.
         * - Validate the current user balance is sufficient or not
         * - Deduct the user balance according to the album price    
         * - Alert the user if the purchase status using session
         * - Save the transaction to the history table if the balance is enought.
         */

         //Code starts here
    }
}
