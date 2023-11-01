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
        <nav>
            <ul class="gnav-navi-1">
<<<<<<< HEAD
            <li class="flex-item1" ><a href="home">Home<br>ホーム</a></li>
                <div>
                    <a href="/home"></a>
                </div>
            <li class="flex-item1"><a href="#">SERVICE<br>サービスについて</a></li>
            <li class="flex-item1"><a href="search">INFORMATION<br>探し物</a></li>
                <div>
                    <a href="/search" ></a>
                </div>
            <li class="flex-item1"><a href="#">BLOG<br>ブログ</a></li>
            <li class="flex-item1" ><a href="dashboard">CONTACT<br>ログイン/ログアウト/新規登録</a>
=======
            <li><a href="home">Home<br>ホーム</a></li>
            <li><a href="#">SERVICE<br>サービスについて</a></li>
            <li><a href="search">INFORMATION<br>探し物</a></li>
            <li><a href="#">BLOG<br>ブログ</a></li>
            <li><a href="dashboard">CONTACT<br>ログイン/ログアウト/新規登録</a>
>>>>>>> origin/master
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                    @endauth
                </div>
            </li>
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
            display: flex;
            }
            ul.gnav-navi-1 li{
            
            }
            .flex-item1 {
                flex-basis: 1000px; /* flexアイテムの幅を自動で調整 */
                }
            
            ul.gnav-navi-1 li a{
            
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
<<<<<<< HEAD
        <div class="button011">
        	<a href="entry">探し物の登録</a>
=======
        
        <div class="button">
	        <a href="/entry">探し物登録</a>
        </div>
        
        <form method="GET" action="{{ route('search') }}">
            <input type="search" placeholder="ユーザー名を入力" name="keyword" value="@if (isset($search)) {{ $search }} @endif">
            <div>
                <button type="submit">検索</button>
                <button>
                    <a href="{{ route('search') }}" class="text-white">
                        クリア
                    </a>
                </button>
            </div>
        </form>
        
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                    <img src="{{ $post->image_url }}" >
                </div>
            @endforeach
        </div>
        
        
        
        
<<<<<<< HEAD
        <div class="button">
	        <a href="/entry">探し物登録</a>
>>>>>>> origin/master
        </div>
=======
        
>>>>>>> origin/master
        <style>
            .button011 a {
                position: relative;
                display: flex;
                justify-content: space-around;
                align-items: center;
                margin-left: 80%;
                max-width: 240px;
                padding: 10px 25px;
                color: #313131;
                transition: 0.3s ease-in-out;
                font-weight: 600;
                background: #eee;
                overflow:hidden;
            }
            .button011 a:before {
                position: absolute;
                top: 0;
                left: 0;
                width: 150%;
                height: 500%;
                content: "";
                -webkit-transition: all 0.5s ease-in-out;
                transition: all 0.5s ease-in-out;
                -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
                transform: translateX(-98%) translateY(-25%) rotate(45deg);
                background: #6bb6ff;
                opacity: 0.2;
            }
            .button011 a:hover:before {
                -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
                transform: translateX(-9%) translateY(-25%) rotate(45deg);
            }
            
            
        </style>
<<<<<<< HEAD
        @if($post->image_url)
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
            </div>
        @endif
=======
        
>>>>>>> origin/master
        #フッダー
        <footer class=”footer”>© 2023 Deliverables</footer>
    </body>
</html>