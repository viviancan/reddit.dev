<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Models\Post as Post; 

use Log; 

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "Shows a list of all posts";
        $posts = Post::all(); 

        $posts = Post::paginate(4);

        $data['posts'] = $posts;

        Log::info('A user just visited the index page');

        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $result = $this->validate($request, Post::$rules);

        $post = new Post();
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = 1;
        $post->save();

        Log::info($post);


        $request->session()->flash("successMessage" , "Your post was saved successfully");

        return \Redirect::action('PostsController@index');
    }

    /**t
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        
        $data['post'] = $post;   

        Log::info('Post ' . $post->id . ' was viewed');

        return view('posts.show', $data);
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

        $data['post'] = $post;



        return view('posts.edit', $data);
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
         $result = $this->validate($request, Post::$rules);

        $post = Post::findOrFail($id);


        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = 1;

        $post->save();

        Log::info('Post ' . $post->id . ' was edited');

        $request->session()->flash("successMessage" , "Your post was updataed successfully");


        return \Redirect::action('PostsController@show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::findOrFail($id);


        $post->delete();

         Log::info('Post ' . $post->id . ' was deleted');

        $request->session()->flash("successMessage" , "Your post was successfully destroyed");

        return \Redirect::action('PostsController@index');
    }
}
