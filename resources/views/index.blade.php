@extends('layouts.master')

@section('title', 'Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection


@section('content')

    <div class="banner">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="banner">
    </div>

    <div class="container-cards">
        <!--slider------------------->
        <ul id="autoWidth" class="cs-hidden">
            <!--1------------------------------>
            <li class="item-a">
                <!--slider-box-->
                <div class="box">

                    <!--model-->
                    <img class="model" src="{{ asset('img/Ant-Man.png') }}">
                    <!--details-->
                    <p class="marvel">MARVEL</p>

                    <div class="details">
                        <!--logo-character-->
                        <!--character-details-->
                        <p>Bruce Bayne invite deadpool to kill the enemy how make distrub bat To the Kill The Anymens How
                            MaKE him will be ie.</p>
                    </div>

                </div>
            </li>
            <!--2------------------------------>
            <li class="item-a">
                <!--slider-box-->
                <div class="box">

                    <!--model-->
                    <img class="model" src="{{ asset('img/dentist-2589771.jpg') }}">
                    <!--details-->
                    <p class="marvel">MARVEL</p>


                </div>
            </li>
            <!--3------------------------------>
            <li class="item-a">
                <!--slider-box-->
                <div class="box">
                    <p class="marvel">MARVEL</p>
                    <!--model-->
                    <img class="model" src="{{ asset('img/SpiderMan.png') }}">
                    <!--details-->
                    <div class="details">
                        <!--logo-character-->
                        <!--character-details-->
                        <p>Bruce Bayne invite deadpool to kill the enemy how make distrub bat To the Kill The Anymens How
                            MaKE him will be ie.</p>
                    </div>

                </div>
            </li>
            <!--4------------------------------>
            <li class="item-a">
                <!--slider-box-->
                <div class="box">
                    <p class="marvel">MARVEL</p>
                    <!--model-->
                    <img class="model" src="{{ asset('img/Venom.png') }}">
                    <!--details-->
                    <div class="details">
                        <!--logo-character-->
                        <!--character-details-->
                        <p>Bruce Bayne invite deadpool to kill the enemy how make distrub bat To the Kill The Anymens How
                            MaKE him will be ie.</p>
                    </div>

                </div>
            </li>
            <!--5------------------------------>
            <li class="item-a">
                <!--slider-box-->
                <div class="box">
                    <p class="marvel">MARVEL</p>
                    <!--model-->
                    <img class="model" src="{{ asset('img/Thor.png') }}">
                    <!--details-->
                    <div class="details">
                        <!--logo-character-->
                        <!--character-details-->
                        <p>Bruce Bayne invite deadpool to kill the enemy how make distrub bat To the Kill The Anymens How
                            MaKE him will be ie.</p>
                    </div>

                </div>
            </li>
            <!--6------------------------------>
            <li class="item-a">
                <!--slider-box-->
                <div class="box">
                    <p class="marvel">MARVEL</p>
                    <!--model-->
                    <img class="model" src="{{ asset('img/IronMan.png') }}">
                    <!--details-->
                    <div class="details">
                        <!--logo-character-->
                        <!--character-details-->
                        <p>Bruce Bayne invite deadpool to kill the enemy how make distrub bat To the Kill The Anymens How
                            MaKE him will be ie.</p>
                    </div>

                </div>

            </li>

        </ul>

        <div class="carousel__nav">
            <button class="carousel__indicator current-slide"></button>
            <button class="carousel__indicator"></button>
            <button class="carousel__indicator"></button>
            <button class="carousel__indicator"></button>
            <button class="carousel__indicator"></button>
        </div>


    </div>


    {{--
<div>
    <h1>Carousel</h1>
    <div>
      <div class="carousel">
        <button class="carousel__button carousel__button--left is-hidden">
          <img src="https://www.iconpacks.net/icons/2/free-arrow-left-icon-3099-thumb.png" alt="left" />
        </button>
        <div class="carousel__track-container">
          <ul class="carousel__track">
            <li class="carousel__slide current-slide">
              <img
                class="carousel__images"
                src="https://images.pexels.com/photos/19682307/pexels-photo-19682307/free-photo-of-pink-flowers-on-a-shrub.jpeg"
                alt="background-image"
              />
            </li>
            <li class="carousel__slide">
              <img
                class="carousel__images"
                src="https://images.pexels.com/photos/17617625/pexels-photo-17617625/free-photo-of-pink-chrysanthemum-flowers.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                alt="background-image"
              />
            </li>
            <li class="carousel__slide">
              <img
                class="carousel__images"
                src="https://images.pexels.com/photos/17617625/pexels-photo-17617625/free-photo-of-pink-chrysanthemum-flowers.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                alt="background-image"
              />
            </li>
            <li class="carousel__slide">
              <img
                class="carousel__images"
                src="https://images.pexels.com/photos/19682307/pexels-photo-19682307/free-photo-of-pink-flowers-on-a-shrub.jpeg"
                alt="background-image"
              />
            </li>
            <li class="carousel__slide">
              <img
                class="carousel__images"
                src="https://images.pexels.com/photos/19598202/pexels-photo-19598202/free-photo-of-pink-hyndrangea-flowers.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load"
                alt="background-image"
              />
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
--}}
    <h1>Teste</h1>

@endsection

@section('moreScripts')
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
@endsection
