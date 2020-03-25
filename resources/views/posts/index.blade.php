@extends('layouts.layout')

@section('main')
    @foreach ($posts as $post)
      <div class="box">
        <a href="#"><h2>{{$post->title}} di {{$post->author}}</h2></a> 
        <p>{{$post->description}}</p>
        <img src="{{$post->img}}" alt="">
        <a href="#">Modifica Post</a>
        <form class="" action="" method="post">
          <button type="submit" name="button">Cancella Post</button>
        </form>
      </div>
    @endforeach
@endsection
