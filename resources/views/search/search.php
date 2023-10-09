<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>laymana</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            <div class='post'>
                <h2 class='title'>Title</h2>
                <p class='body'>This is a sample body.</p>
            </div>
        </div>
    </body>
</html>