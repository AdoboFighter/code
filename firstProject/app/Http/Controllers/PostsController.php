<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        //Non fluent
        //DB:select([])
        return view('posts/index');
    }
}
