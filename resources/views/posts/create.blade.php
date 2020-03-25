@extends('layouts.layout')
@section('main')
  <div class="form">
    <form class="" action="{{route('posts.store')}}" method="post">
      <label for="title">Inserisci Titolo</label>
      <input type="text" name="title" value="">
      <label for="author">Inserisci Autore</label>
      <input type="text" name="author" value="">
      <label for="description">Inserisci Corpo Articolo</label>
      <textarea type="text" name="description" value=""></textarea>
      <label for="img">Inserisci URL immagine</label>
      <input type="text" name="img" value="">
      <button type="submit" name="button">Inserisci</button>
      @csrf
      @method('POST')
    </form>
  </div>
@endsection
