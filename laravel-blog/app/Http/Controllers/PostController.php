<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Datatables;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->status = $request->status;
        $result = $post->save();

        $request->session()->flash('alert-success', 'Post was successfully created!');
        return redirect()->action('HomeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            $post = Post::findOrFail($id);

            return view('admin.post.show', ['post' => $post]);

        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.404');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            
            $post = Post::findOrFail($id);

            return view('admin.post.edit', ['post' => $post]);

        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.404');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        try {
            
            $post = Post::findOrFail($id);
            $post->title = $request->title;
            $post->content = $request->content;
            $post->status = $request->status;
            $result = $post->save();

            $request->session()->flash('alert-success', 'Post was successfully updated!');
            return redirect()->action('HomeController@index');

        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.404');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            
            $post = Post::findOrFail($id);
            $result = $post->delete();

            $request->session()->flash('alert-info', 'Post was deleted!');
            return redirect()->action('HomeController@index');

        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.404');
            }
        }
    }

    public function getAllPosts(){
        $posts = Post::select('title', 'status', 'created_at', 'id')->orderBy('created_at', 'desc')->get();
        return Datatables::of($posts)->make();
    }

    public function showDelete($id){
        try {

            $post = Post::findOrFail($id);

            return view('admin.post.delete', ['post' => $post]);

        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.404');
            }
        }
    }
}
