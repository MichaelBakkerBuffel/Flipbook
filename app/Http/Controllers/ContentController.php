<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Http\Requests;
use App\Post;
use App\Category;

class ContentController extends Controller
{
    public function index()
    {
        $categories = Category::with('posts')->orderBy('title', 'asc')->get();

        // get all posts + desc ordering and show 3 posts
        // filter: (checks if title is like the entered term)
        $posts = Post::with('author')->filter(request('term'))->orderBy('created_at', 'desc')->paginate(3);

        return view("blog.show", compact('posts', 'categories'))->render();
    }

        public function category($id)
    {
        $categories = Category::with('posts')->orderBy('title', 'asc')->get();

        // get all posts + desc ordering and show 3 posts
        // filter: (checks if title is like the entered term)
        $posts = Post::with('author')->where('category_id', $id)->filter(request('term'))->orderBy('created_at', 'desc')->paginate(3);

        return view("blog.show", compact('posts', 'categories'));

    }

    public function single($id)
    {
        // get single post
        $post = Post::findOrFail($id);

        return view("blog.blog-body", compact('post'));
    }
}
