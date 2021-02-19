<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $posts = Post::all();
        $posts = Post::latest()->get();
        return view('blog.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Post $post)
    {
        // dd($request->all());
        // dd('Ciao',request('title'), request('body'));
        $data = $request->all();
        // dd($data);

        $post = new Post;
        $post->title = $data['title'];
        $post->content = $data['body'];
        $post->author = $data['author'];
        $post->save();
        return redirect()->route('blog.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $post = Post::find($post);

        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {

        $post = Post::find($post);
        return view('blog.edit', compact('post'));
        
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$post)
    {
        $post = Post::find($post);
        $post->title = request('title');
        $post->content = request('body');
        $post->author = request('author');
        // dd($post);
        $post->save();
        return redirect()->route('blog.index');
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect()->route('blog.index');
        

    }
}
