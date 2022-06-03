<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\rc;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = Post::with('comments')->get();
        $posts = Post::all();
        return view('posts',compact('posts'));
    }


    public function show($id)
    {
        $post = Post::with('comments')->where('id',$id)->first();
//        return $post;
        return view('post_details',compact('post'));

    }

    public function commmentPost($id)
    {
        $comment = Comment::with('post')->where('id',$id)->first();
        return $comment;
//        return view('post_details',compact('post'));

    }

}
