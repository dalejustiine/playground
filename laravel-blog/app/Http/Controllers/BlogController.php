<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
    	$posts = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->paginate(5);
    	return view('blog.index', ['posts' => $posts]);
    }

    public function show($id){
    	try {

            $post = Post::findOrFail($id);

            return view('blog.show', ['post' => $post]);

        } catch (ModelNotFoundException $ex) {
            if ($ex instanceof ModelNotFoundException) {
                return response()->view('errors.404');
            }
        }
    }
}
