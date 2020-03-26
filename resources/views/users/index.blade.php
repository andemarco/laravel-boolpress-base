<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    I NOSTRI FOTOGRAFI SONO:
    <ul>
    @foreach ($users as $user)
      <li><a href="{{route('users.show', $user)}}">{{$user->name}}</a></li>
    @endforeach
    </ul>
  </body>
</html>
