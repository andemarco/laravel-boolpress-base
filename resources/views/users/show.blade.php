<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <img src="{{$user->avatar['avatar_path']}}" alt="">
      <h2>{{$user->name}} aka {{$user->avatar['avatar_name']}}</h2>
    </div>
    <div class="">
      @foreach ($user->photo as $photo)
        <h3>NOME FOTO:{{$photo->img_title}}</h3>
        <img src="{{$photo->img_path}}" alt="">
      @endforeach
    </div>
  </body>
</html>
