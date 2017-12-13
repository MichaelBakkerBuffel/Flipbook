<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Http\Requests;
use App\Post;

class ContentController extends Controller
{
    public function index()
    {
        // get all posts + desc ordering and show 3 posts
        $posts = Post::with('author')->orderBy('created_at', 'desc')->paginate(3);
    }
}
