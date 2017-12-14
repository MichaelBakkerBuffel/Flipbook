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

        // Check for search (checks if title is like the entered term)
        if ($term = request('term')) {
            $posts->where('title', 'LIKE', "{$term}");
        }

        return view("blog.show", compact('posts'));

    }

    public function single($id)
    {
        // get single post
        $post = Post::findOrFail($id);

        return view("blog.blog-body", compact('post'));
    }
}
