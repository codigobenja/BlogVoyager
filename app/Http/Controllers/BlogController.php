<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class BlogController extends Controller
{
  public function index(){
    $posts=Post::SimplePaginate(2);
    return view('index',['posts'=>$posts]);
  }
  public function show($slug){
    $post=Post::findBySlug($slug);
    return view('post.show',['post'=>$post]);
  }
}
