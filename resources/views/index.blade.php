@extends('layouts.master')

@section('title', 'Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection


@section('content')

    <div class="banner">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="banner">
    </div>


    <div class="slider">


        <div class="slider-track">
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
        </div>

        <!-- Botões de navegação -->
        <button class="slider-btn left">&lt;</button>
        <button class="slider-btn right">&gt;</button>

        <div class="slider-nav-dots">
            <!-- Indicadores serão adicionados dinamicamente pelo JavaScript -->
        </div>
    </div>

    {{-- <div class="slider-dot"></div> --}}


    {{-- <div class="container-cards">
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


    </div> --}}

    <h1>Teste</h1>

@endsection

@section('moreScripts')
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
@endsection
