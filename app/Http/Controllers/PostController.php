<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(){
        // $comment = new Comment(array('msg' => 'Good comment.'));
        // $post = Post::find(2);
        // $comment = $post->comments()->save($comment);
        $posts = Post::all();
        return view('posts', compact('posts'));
    }
}
