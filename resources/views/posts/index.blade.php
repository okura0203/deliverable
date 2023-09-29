<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laymana</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet"href="{{ secure_asset('css/style.css') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <!--ここからメニュー-->
            <div class="menu-content">
                <ul>
                    <li>
                        <a href="#">ログイン</a>
                    </li>
                    <li>
                        <a href="#">設定</a>
                    </li>
                </ul>
            </div>
            <!--ここまでメニュー-->
        </div>
        <style>
            
        </style>
    </head>    

    <body class="antialiased">
        <h1>LayMana</h1>
        #ナビゲーション
        <nav>
            <ul class="gnav-navi-1">
            <li><a href="#">Home<br>ホーム</a></li>
            <li><a href="#">SERVICE<br>サービスについて</a></li>
            <li><a href="#">INFORMATION<br>探し物</a></li>
            <li><a href="#">BLOG<br>ブログ</a></li>
            <li><a href="#">CONTACT<br>ログイン/新規登録</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <style>
            *{box-sizing: border-box;}
    
            ul.gnav-navi-1{
            background: #1159a2;
            padding: 0;
            text-align: center;
            }
            ul.gnav-navi-1 li{
            display: inline-block;
            }
            
            
            ul.gnav-navi-1 li a{
            display: block;
            padding: 1em;
            color: #e2f0fd;
            text-decoration: none;
            }
            ul.gnav-navi-1 a::first-line{
            font-size: 16px;
            font-weight: bold;
            }
            ul.gnav-navi-1 li:hover{
            background: #00BFFF;
            }
        </style>
        <div class="container-fluid img-hidden" id="bigimage">
            <img src="{{ asset('img/picture.jpg' )}}" class="img-fulied w-100">
        </div>
        <style>
            #bigimage {
            height: auto;
            width: 100%;
            }
        </style>
        
       
        
        
        
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        #フッダー
        <footer class=”footer”>© 2023 Deliverables</footer>
    </body>
</html>