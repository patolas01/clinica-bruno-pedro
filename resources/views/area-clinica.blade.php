@extends('layouts.master')
@section('title', 'Área Clinica - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/areaclinica.css') }}">
@endsection


<div class="banner">

</div>

<div class="titulo">Serviços</div>

<div class="categorias">

    <div class="rowcategoria">

    <div class="cardcategoria">
        <div class="imgcat">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        </div>
        <div class="categoria-conteudo">
        <h2>Card 1</h2>
        <p>Conteúdo do Card 1</p>
        </div>
    </div>

    <div class="cardcategoria">
        <div class="imgcat">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        </div>
        <div class="categoria-conteudo">
        <h2>Card 1</h2>
        <p>Conteúdo do Card 1</p>
        </div>
    </div>

    <div class="cardcategoria">
        <div class="imgcat">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        </div>
        <div class="categoria-conteudo">
        <h2>Card 1</h2>
        <p>Conteúdo do Card 1</p>
        </div>
    </div>

    </div>



<div class="rowequipa">

    <div class="cardequipa">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        <div class="card-conteudo">
        <h2>Card 1</h2>
        <p>Conteúdo do Card 1</p>
        </div>
    </div>

    <div class="cardequipa">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        <div class="card-conteudo">
        <h2>Card 1</h2>
        <p>Conteúdo do Card 1</p>
        </div>
    </div>

    <div class="cardequipa">
        <img src="{{ asset('img/perfil.jpg') }}" alt="Musculação">
        <div class="card-conteudo">
        <h2>Card 1</h2>
        <p>Conteúdo do Card 1</p>
        </div>
    </div>

    <div class="cardequipa">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        <div class="card-conteudo">
        <h2>Card 1</h2>
        <p>Conteúdo do Card 1</p>
        </div>
    </div>

    <div class="cardequipa">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        <div class="card-conteudo">
        <h2>Card 1</h2>
        <p>Conteúdo do Card 1</p>
        </div>
    </div>

    <div class="cardequipa">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        <div class="card-conteudo">
        <h2>Card 1</h2>
        <p>Conteúdo do Card 1</p>
        </div>
    </div>

</div>


@section('moreScripts')
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
@endsection
