<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <hr></hr>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h3><a href = "/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
            [<a href='/posts/create'>create</a>]
           <div class = 'pagination'>
               {{ $posts->links() }}
           </div>
        </div>
    </body>
</html>