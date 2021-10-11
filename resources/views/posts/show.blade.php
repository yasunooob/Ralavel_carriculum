<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
        </div>
        </div>
    </body>
</html>

