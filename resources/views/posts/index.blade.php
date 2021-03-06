@extends('layouts.layout')

@section('main')
    @foreach ($posts as $post)
      <div class="box">
        <a href="{{route('posts.show', $post)}}"><h2>{{$post->title}} di {{$post->author}}</h2></a>
        <p>{{$post->description}}</p>
        <img src="{{$post->img}}" alt="">
        <a href="{{route('posts.edit', $post)}}">Modifica Post</a>
        <form class="" action="{{route('posts.destroy', $post)}}" method="post">
          <button type="submit" name="button">Cancella Post</button>
          @csrf
          @method('DELETE')
        </form>

      </div>
    @endforeach
@endsection
