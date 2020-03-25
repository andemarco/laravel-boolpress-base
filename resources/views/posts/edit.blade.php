@extends('layouts.layout')
@section('main')
  <div class="form">
    <form class="" action="{{route('posts.update', $post->id)}}" method="post">
      <label for="title">Inserisci Titolo</label>
      <input type="text" name="title" value="{{$post->title}}">
      <label for="author">Inserisci Autore</label>
      <input type="text" name="author" value="{{$post->author}}">
      <label for="description">Inserisci Corpo Articolo</label>
      <textarea type="text" name="description" value="">{{$post->description}}</textarea>
      <label for="img">Inserisci URL immagine</label>
      <input type="text" name="img" value="{{$post->img}}">
      <button type="submit" name="button">Inserisci</button>
      @csrf
      @method('PATCH')
    </form>
  </div>
@endsection
