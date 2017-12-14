<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Http\Requests;
use App\Post;

class ContentController extends Controller
{
    public function index()
    {
        \DB::enableQueryLog(); 
        // get all posts + desc ordering and show 3 posts
        $posts = Post::with('author')->filter(request('term'))->orderBy('created_at', 'desc')->paginate(3);

        // Check for search (checks if title is like the entered term)


        return view("blog.show", compact('posts'))->render();
        dd(\DB::getQueryLog());

    }

    public function single($id)
    {
        // get single post
        $post = Post::findOrFail($id);

        return view("blog.blog-body", compact('post'));
    }
}
