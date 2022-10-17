<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //投稿一覧
    public function index(Post $post)
    {
    return view('posts/index')->with(['posts' => $post->get()]);  
    }
    
    //投稿詳細画面
    public function show(Post $post)
    {
    return view('posts/show')->with(['post' => $post]);
    }
    
    //投稿作成画面
    public function create()
    {
    return view('posts/create');
    }
    
    public function store(Request $request, Post $post)
    {
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
    }
    
    //投稿編集画面
    public function edit(Post $post)
    {
    return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
    $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
    }
    
    //投稿削除
    public function delete(Post $post)
    {
    $post->delete();
    return redirect('/');
    }
}
