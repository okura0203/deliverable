<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laymana</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>    
    <style>
        *{box-sizing: border-box;}

        ul.gnav-navi-1{
        background: #c71585;
        padding: 0;
        text-align: center;
        }
        ul.gnav-navi-1 li{
        display: inline-block;
        }
        
        
        ul.gnav-navi-1 li a{
        display: block;
        padding: 1em;
        color: #fff;
        text-decoration: none;
        }
        ul.gnav-navi-1 a::first-line{
        font-size: 16px;
        font-weight: bold;
        }
        ul.gnav-navi-1 li:hover{
        background: #FF7F50;
        }
    </style>
    
    
    
    
    
    <body class="antialiased">
        <h1>LayMana</h1>
        <form action="https://bfe73509768a4563aea3b9cdee914648.vfs.cloud9.us-east-1.amazonaws.com/" method="get">
            <input type="search" name="search" placeholder="キーワード入力">
            <input type="submit" name="submit" value="検索">
        </form>
        <nav>
        <ul class="gnav-navi-1">
            <li><a href="#">Home<br>ホーム</a></li>
            <li><a href="#">Layout<br>レイアウト</a></li>
            <li><a href="#">Inventory Control<br>在庫管理</a></li>
            <li><a href="#">Blog<br>ブログ</a></li>
        </ul>
        </nav>
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>