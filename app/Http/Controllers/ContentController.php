<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Http\Requests;
use App\Post;

class ContentController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("blog.show", compact('posts'));
    }
}
