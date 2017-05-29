<?php

namespace App\Http\Controllers;
use App\Topic;
use App\Post;
use App\Like;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    //Add the method
  public function store(Request $request, Topic $topic, Post $post){

  	  $like = new Like;
  	  $like->user()->associate($request->user());

  	  //dd($like);
  	    
  	    $post->likes()->save($like);

  	    return response(null, 204);
  	    }
}
