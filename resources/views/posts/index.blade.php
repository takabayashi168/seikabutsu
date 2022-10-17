<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>本のレビューサイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')　　　　　　　　　　　　　　　　　　
        
        @section('content')
        
        <h1>本のレビューサイト</h1>
        <h2>投稿一覧</h2>
        
        <div class='posts'>
　　　　@foreach ($posts as $post)
            <div class='post'>
                <!--ユーザー名-->
                <h3>{{Auth::user()->name}}</a></h3> //ユーザー名
                <p>{{ $books->name }}</a><br>//本のタイトル
                {{ $chosya->name }}</a><br>//著者
                {{ $syuppannsya->name }}</a><br>//出版社
                <h4 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $review->title }}</a>
                </h4> //レビュータイトル
                <p>{{ $review->body }}</a></p>//レビュー
            </div>
            //削除ボタン
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button> 
            </form>
        @endforeach
        </div>
        
        [<a href='/posts/create'>create</a>]//作成ページリンク
       
        

      
    @endsection
    </body>
</html

