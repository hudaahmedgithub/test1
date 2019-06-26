<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\User;
use App\Comment;
use App\Post;
use DB;
class CommentsController extends Controller
{
    public function store(Post $post)
    {   
    //$post=DB::table('posts')->find($id);
   Comment::create([
      
        'post_id'=>$post->id,
        'description'=>request('description')
   ]);
        return back();
    }
}

