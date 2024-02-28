@extends('partials.master')
@include('partials.navbar')
@section('title', 'Página Inicial')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection


@section('content')


    <h1>Teste</h1>
    <p>
    <p>ola</p>
    </p>

    <div class="banner">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="banner">
    </div>

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
