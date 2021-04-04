<?php

namespace App\Http\Controllers;


use App\Category;
use App\Post;
use App\Http\Requests\PostRequest;
=======
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index(Post $post)
  {
    return view('index')->with(['posts' => $post->getPaginate]);
  }
  public function show(Post $post)
  {
    return view('show')->with(['post' => $post]);
  }
=======
  dev_basis02
  public function index(Post $post)
  {
    return view('index')->with(['posts' => $post->getPaginateByLimit(1)]);
  } 


}
