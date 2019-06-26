<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Post;
use App\Comment;
use DB;
class PagesController extends Controller
    
{  
 public function posts()
    {
        $posts=Post::all();
        
    return view('content.posts',compact('posts'));
    }
    
public function postone(Post $post)
    {
        //$post=DB::table('posts')->find($body);
        
    return view('content.postone',compact('post'));
    }
public function store(Request $request)
    {   
    if (!Auth::user()){
           return view('users.login_register');
    }
    else{
   /*$this->validate($request,
                    [
        'title'=>'required',
         'body'=>'required',
      'url'=>'image|mimes:jpg,jpeg,gif,png|max:2048']);*/
  //$url=$request->file('url');
$img_name=time() . '.' . $request->url->getClientOriginalExtension();
       
    $post=new Post;
        $post->title=request('title');
        $post->body=request('body');
        $post->url=$img_name;
        $post->save();
    
   $request->url->move(public_path('content'),$img_name);
    return redirect('/posts')->with('url',$img_name);
    }
    }
}