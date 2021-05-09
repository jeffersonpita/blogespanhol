@extends('site.layouts.basico')

@section('conteudo')

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/img01.jpg')}}" alt="Espanhol para você">
      <div class="carousel-caption d-none d-md-block">
        <h5>Aprenda espanhol com a gente!</h5>
        <p>É a língua mais falada da América Latina</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/img02.jpg')}}" alt="Espanhol para você">
      <div class="carousel-caption d-none d-md-block">
        <h5>Espanhol para viajar...</h5>
        <p>Prepare-se para conhecer a América Latina e seu povo</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/img04.jpg')}}" alt="Espanhol para você">
      <div class="carousel-caption d-none d-md-block">
        <h5>Espanhol para estudar</h5>
        <p>Aprenda espanhol e estude nas melhores faculdades do mundo gratuitamente</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div class="container">
  <div class="row">
    <div class="col col-md-10 offset-md-1">

      @include('site.include.blog')

    </div>

  </div>
</div>





@endsection
