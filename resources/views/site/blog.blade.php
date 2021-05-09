@extends('site.layouts.basico')

@section('conteudo')

  <div class="container">
    <div class="row">
      <div class=" col col-md-10 offset-md-1">

      <h2>Blog</h2>

      <br><br>
      @include('site.include.blog')

    </div>
    </div>
  </div>

@endsection
