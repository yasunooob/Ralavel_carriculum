<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>記事詳細</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <hr></hr>
        <h1 class='title'>{{ $post->title }}</h2>
        <div class ='content'>
            <div class='content_post'>
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
                <p>{{ $post->updated_at }}</p>
            </div>
        </div>
        <div class = 'footer'>
            <a href = "/">戻る</a>
            <a href = "/posts/{{ $post->id }}/edit">編集</a>
        </div>
        </div>
    </body>
</html>

