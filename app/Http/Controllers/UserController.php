<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_data(){
        return response()->json([
            "status" => "OK",
            "message" => "HEroku is awesome!"
        ]);
    }
}
