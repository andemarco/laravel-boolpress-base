@extends('layouts.layout')

@section('main')
      <div class="box">
        <a href="#"><h2>{{$post->title}} di {{$post->author}}</h2></a>
        <p>{{$post->description}}</p>
        <img src="{{$post->img}}" alt="">
        <a href="{{route('posts.edit', $post)}}">Modifica Post</a>
        <form class="" action="{{route('posts.destroy', $post)}}" method="post">
          <button type="submit" name="button">Cancella Post</button>
          @csrf
          @method('DELETE')
        </form>
      </div>
@endsection
