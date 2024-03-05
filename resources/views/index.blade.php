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


    <div class="slider" id="specialties-slider">
        <div class="slider-track" id="slider-track">
        </div>
        <button class="slider-btn left"><img src="{{ asset('img/white-arrow-left.svg') }}" alt="left button"></button>
        <button class="slider-btn right"><img src="{{ asset('img/white-arrow-right.svg') }}" alt="right button"></button>

        <div class="slider-nav-dots">
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
