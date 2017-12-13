<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class ContentController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts     = Post::with('category', 'author')->latest()->paginate($this->limit);
        $postCount = Post::count();
        return view("backend.dashboard.index", compact('posts', 'postCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
         return view('backend.dashboard.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
	        'title' => 'required',
	        'slug' => 'required|unique:posts',
	        'body' => 'required',
            'category_id' => 'required'
        ]);

        $request->user()->posts()->create($request->all());

        return redirect('/overview')->with('message', 'Artikel is aangemaakt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view("backend.dashboard.edit", compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $this->validate($request, [
	        'title' => 'required',
	        'slug' => 'required',
	        'body' => 'required',
            'category_id' => 'required'
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->get('title');
        $post->slug = $request->get('slug');
        $post->excerpt = $request->get('excerpt');
        $post->body = $request->get('body');
        $post->category_id = $request->get('category_id');
       // $data = $this->handleRequest($request);
        $post->save();

        return redirect('/overview')->with('message', 'Artikel is geupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
