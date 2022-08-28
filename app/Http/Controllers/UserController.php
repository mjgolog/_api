<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return response()->json([
            "status" => "OK",
            "message" => "Hello sam! Kiyod is life?"
        ]);
    }
}
