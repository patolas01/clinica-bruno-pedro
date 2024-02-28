@extends('layouts.master')

@section('title', 'Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/dentist-2589771.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/dentist-2589771.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/dentist-2589771.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="carousel-item">
    <img src="..." alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>...</h5>
      <p>...</p>
    </div>
  </div>
{{--
    <div class="banner">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="banner">
    </div>
--}}
    <h1>Teste</h1>

    <div>
        <div class="carousel">
            <button class="carousel__button carousel__button--left is-hidden">
                <img src="https://www.iconpacks.net/icons/2/free-arrow-left-icon-3099-thumb.png" alt="left" />
            </button>
            <div class="carousel__track-container">
                <ul class="carousel__track">
                    <li class="carousel__slide current-slide">
                        <img class="carousel__images"
                            src="https://images.pexels.com/photos/19682307/pexels-photo-19682307/free-photo-of-pink-flowers-on-a-shrub.jpeg"
                            alt="background-image" />
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__images"
                            src="https://images.pexels.com/photos/17617625/pexels-photo-17617625/free-photo-of-pink-chrysanthemum-flowers.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                            alt="background-image" />
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__images"
                            src="https://images.pexels.com/photos/17617625/pexels-photo-17617625/free-photo-of-pink-chrysanthemum-flowers.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                            alt="background-image" />
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__images"
                            src="https://images.pexels.com/photos/19682307/pexels-photo-19682307/free-photo-of-pink-flowers-on-a-shrub.jpeg"
                            alt="background-image" />
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__images"
                            src="https://images.pexels.com/photos/19598202/pexels-photo-19598202/free-photo-of-pink-hyndrangea-flowers.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                            alt="background-image" />
                    </li>
                </ul>
            </div>
            <button class="carousel__button carousel__button--right">
                <img src="https://www.iconpacks.net/icons/2/free-arrow-left-icon-3099-thumb.png" alt="right" />
            </button>
            <div class="carousel__nav">
                <button class="carousel__indicator current-slide"></button>
                <button class="carousel__indicator"></button>
                <button class="carousel__indicator"></button>
                <button class="carousel__indicator"></button>
                <button class="carousel__indicator"></button>
            </div>
        </div>



    @endsection

    @section('moreScripts')
        <script src="{{ asset('js/carousel.js') }}"></script>
    @endsection
