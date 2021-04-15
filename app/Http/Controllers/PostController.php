<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Post;
use App\Category;
>>>>>>> db59516be85105842e62c8dd170e1dfd2f2b3abb
use App\Post;
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest; // useする

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginate()]);
    }

<<<<<<< HEAD
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
=======
  public function index(Post $post)

  {//$post = new Post();

  {
    return view('index')->with(['posts' => $post->getPaginateByLimit()]);
  }
  public function show(Post $post)
  {
    return view('show')->with(['post' => $post]);
  }

public function create()
{
    return view('create');
}
>>>>>>> db59516be85105842e62c8dd170e1dfd2f2b3abb

    public function create()
    {
        return view('create');
    }

    public function store(Post $post, PostRequest $request) // 引数をRequest->PostRequestにする
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
