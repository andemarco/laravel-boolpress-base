<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @foreach ($posts as $post)
      <div class="box">
        <h2>{{$post->title}} di {{$post->author}}</h2>
        <p>{{$post->description}}</p>
        <img src="{{$post->img}}" alt="">
      </div>
    @endforeach
  </body>
</html>
