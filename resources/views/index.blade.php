@extends('layouts.master')

@section('title', 'Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection


@section('content')

    <div class="banner">
        <div class="content">
            <div class="title">Clínica Dentária Bruno & Pedro</div>
            <div class="subtitle">Tratamentos de qualidade ao nivel da Medicina Oral.</div>
            <div class="subtitle1">Onde cada Doente é um Amigo e o sorriso é levado muito a sério.</div>
            <a href="{{ route('contactos') }}#formtodo" class="button">Pedido de Marcação</a>
        </div>
    </div>

    <h1 class="titulo1">As nossas Especialidades</h1>
    <div class="slider" id="specialties-slider">

        <div class="slider-track" id="slider-track">
        </div>
        <button class="slider-btn left"><img src="{{ asset('img/white-arrow-left.svg') }}" alt="left button"></button>
        <button class="slider-btn right"><img src="{{ asset('img/white-arrow-right.svg') }}" alt="right button"></button>

        <div class="slider-nav-dots">
        </div>
    </div>

    {{-- <div class="divisorblocoprincipal">
        <div class="linhaprincipal"></div>
    </div> --}}

    <section id="main2">
        <div id="seccaoprincipal2">
            <div id="infoseccaoprincipal2">
                <h6 id="nomeseccaoprincipal2">Sobre a Clínica</h6>
                <div class="divisorbloco">
                    <div class="linha"></div>
                </div>
                <div id="descricaoseccaoprincipal2">
                    <p>Esta Clinica tem um texto de exemplo pois ainda não foi feito o estudo sobre a história da clinica. Foi fundada talvez num ano qualquer por exemplo 1988, na zona de Pombal.</p>
                </div>
                <a href="{{ route('sobre') }}" class="vermais2">Saber mais ></a>
            </div>
            <img src="{{asset('img/Logo BrunoPedro escuro.png')}}" alt="Secção Principal" id="imgseccaoprincipal2">
        </div>
        </section>

    <div class="container">
        <h2>Opiniões dos nossos Clientes</h2>
        <p class="description">Onde cada Doente é um Amigo!</p>

        <div class="reviewSection">

            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="{{asset('img/favicon preto.png')}}" alt="">
                        <span>Ana Filipe Faveiro</span>
                    </div>
                </div>
                <ul class="stars">
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                </ul>
                <article>
                    <p class="review">Profissional e atencioso, 5 estrelas!</p>
                    <p>01 Fev. 2019</p>
                </article>
            </div>

            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="{{asset('img/favicon preto.png')}}" alt="">
                        <span>Sonia Pereira</span>
                    </div>
                </div>
                <ul class="stars">
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-regular fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                </ul>
                <article>
                    <p class="review">uma clinica com dentistas espetaculares, que continuem assim</p>
                    <p>15 Jan. 2019</p>
                </article>
            </div>

            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="{{asset('img/favicon preto.png')}}" alt="">
                        <span>Serginho Santos</span>
                    </div>
                </div>
                <ul class="stars">
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                </ul>
                <article>
                    <p class="review">5 estrelas ⭐️ nada a apontar !!</p>
                    <p>29 Jul. 2019</p>
                </article>
            </div>
        </div>
    </div>


@endsection

@section('moreScripts')
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Lista de especialidades
            var specialties = [
                "Dentisteria",
                "Estética",
                "Endodontia",
                "Higiene Oral",
                "Periodontologia",
                "Prótese Fixa",
                "Prótese Removível",
                "Ortodontia",
                "Odontopediatria",
                "Odontogeriatria",
                "Cirurgia Oral",
                "Implantes"
            ];

            // Elemento do slider track
            var sliderTrack = document.getElementById("slider-track");

            // Para cada especialidade, cria um slide e adiciona ao slider track
            specialties.forEach(function(specialty) {
                var slide = createSlide(specialty);
                sliderTrack.appendChild(slide);
            });

            specialties.forEach(function(specialty) {
                var slide = createSlide(specialty);
                sliderTrack.appendChild(slide);
            });

            // Função para criar um slide com base na especialidade
            function createSlide(specialty) {
                var slide = document.createElement("div");
                slide.className = "slider-item";

                var gradientOverlay = document.createElement("div");
                gradientOverlay.className = "gradient-overlay";
                slide.appendChild(gradientOverlay);

                var image = document.createElement("img");
                image.src = "{{ asset('img/dentist-2589771.jpg') }}"; // Substitua pelo caminho real da imagem
                image.alt = "image";
                slide.appendChild(image);

                var text = document.createElement("p");
                text.className = "slider-text";
                text.textContent = specialty;
                slide.appendChild(text);

                return slide;
            }
        });
    </script>
@endsection
@section('moreScripts')
    <script src="{{ asset('js/form.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
