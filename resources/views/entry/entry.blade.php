<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <!-- formタグにenctypeを追加 -->
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <!-- ここから追加 -->
            <div class="image">
                <input type="file" name="image">
            </div>
            <!-- ここまで追加 -->
            <input type="submit" value="store"/>
            
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
           
    </body>
</html>