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
            <li><a href="home">Home<br>ホーム</a></li>
                <div>
                    <a href="/home"></a>
                </div>
            <li><a href="#">SERVICE<br>サービスについて</a></li>
            <li><a href="search">INFORMATION<br>探し物</a></li>
                <div>
                    <a href="/search" ></a>
                </div>
            <li><a href="#">BLOG<br>ブログ</a></li>
            <li><a href="dashboard">CONTACT<br>ログイン/ログアウト/新規登録</a>
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
        
        <form action="/" method="get">
            <div style="text-align:center">
                <input type="search" name="search" placeholder="キーワードを入力">
                <input type="submit" name="submit" value="検索">
            </div>
        </form>
        
        <div class="button">
	        <a href="/entry">探し物登録</a>
        </div>
        <style>
            .button a {
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
            .button a:before {
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
            .button a:hover:before {
                -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
                transform: translateX(-9%) translateY(-25%) rotate(45deg);
            }
        </style>
        #フッダー
        <footer class=”footer”>© 2023 Deliverables</footer>
    </body>
</html>