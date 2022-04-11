<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='title'>{{ $post->title }}</h1>
        <div class="content">
            <div class="content_post">
                <P>{{ $post->body }}</P>
            </div>
        </div>
        <a href="">{{ $post->category->name }}</a>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form" method="post" style="display:inline">
            @csrf
            @method('delete')
        </form>
        <button id="btn" type="submit">delete</button>
        
        <script>
            const btn=document.getElementById('btn');
            const form=document.getElementById('form');
            btn.addEventListener('click', function(){
                const choice = window.confirm('本当に削除しますか？\r\nこの作業は取り消せません。');
                if(choice){
                    form.submit();
                }
            });
        </script>
        
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
