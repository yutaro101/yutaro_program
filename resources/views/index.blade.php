<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Bolg</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    </head>
    <body>
       <h1>Blog Name</h1>
       <div class='posts'>
             @foreach ($posts as $post)
           <div class='post'>
               <h2 class='title'>{{ $post->title }}</h2>
               <p class='body'>{{ $post->body }}</p>
               </div>
               @endforeach
               </div>
    </body>
</html>
