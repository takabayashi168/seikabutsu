<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>本のレビューサイト</title>
    </head>
    <body>
        @extends('layouts.app')　　　　　　　　　　　　　　　　　　
        
        @section('content')
        <h1>レビュー作成画面</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>本のタイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>あらすじ</h2>
                <textarea name="post[body]" placeholder="あらすじ"></textarea>
            </div>
            <div class="auther">
                <h2>著者</h2>
                <input type="text" name="post[auther]" placeholder="著者"/>
            </div>
            <div class="publisher">
                <h2>出版社</h2>
                <input type="text" name="post[publisher]" placeholder="出版社"/>
            </div>
            <input type="hidden" name="post[user_id]" value={{Auth::user()->id}}/>

            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        
        @endsection
    </body>
</html>