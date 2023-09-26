<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laymana</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../css/style.css">
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
            <li><a href="#">CONTACT<br>新規登録</a></li>
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
        
        #ビックイメージ
        <div class="container-fluid img-hidden">
            <img src="picture.jpg" class="img-fulied">
        </div>
        <style>
            div.img-hidden {
            height: 300px;
            overflow: hidden;
            }
        </style>
        
        #カード
        <div class="container container-m">
        <div class="card-deck">
          <div class="card">
           <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src=".../100px200/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src=".../100px200/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        </div>
        <style>
            div.container-m {
            margin-top: 80px;
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