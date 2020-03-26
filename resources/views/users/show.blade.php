<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li>{{$user->name}} - {{$user->email}}</li>
      @foreach ($user->photo as $photo)
        <ul>
          <li>NOME FOTO:{{$photo->img_title}}<img src="{{$photo->img_path}}" alt=""></li>
        </ul>
      @endforeach
    </ul>
  </body>
</html>
