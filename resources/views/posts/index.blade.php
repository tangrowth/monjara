<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p>
                    <a href="">{{ $post->category->name }}</a>
                </div>
            @endforeach
        </div>
            [<a href='/posts/create'>create</a>]
    </body>
</html>
