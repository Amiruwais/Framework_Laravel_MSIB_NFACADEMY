<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();

        return response()->json([
            "success" => "true",
            "message" => "Get All Resources",
            "data" => $authors
        ]);
    }
}
