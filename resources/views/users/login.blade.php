<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ログインフォーム</title>

        <link rel="stylesheet"　type="text/css" href="login.css">

        
    </head>
    
    <body>
        <form name="login_form">
          <div class="login_form_top">
            <h1>LOGIN</h1>
            <p>UserID、Passwordをご入力の上、「LOGIN」ボタンをクリックしてください。</p>
          </div>
          <div class="login_form_btm">
            <input type="id" name="user_id" placeholder="UserID">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="botton" value="LOGIN">
          </div>
        </form>
    </body>
</html>