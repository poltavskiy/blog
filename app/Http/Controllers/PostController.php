<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller{
    
    public function index(Post $post){
        //$res = Post::where('active', 1)->get();
        $res = $post->getPublished();
        return view('posts.list',['posts' => $res]);
    }

    public function post($id){
        $res = Post::find($id);
        return view('posts.detail', ['post' => $res]);
    }

    public function ratingPlus(Request $request){
        $postId = $request->input('id');
        $post = Post::find($postId);
        $post->rating += 1;
        $post->save();
        return json_encode(['rating' => $post->rating]);
    }

    public function ratingMinus(Request $request){
        $postId = $request->input('id');
        $post = Post::find($postId);
        $post->rating -= 1;
        $post->save();
        return json_encode(['rating' => $post->rating]);
    }
}
