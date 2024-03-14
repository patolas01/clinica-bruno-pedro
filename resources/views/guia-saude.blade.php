@extends('layouts.master')
@section('title', 'Guia Saúde - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/guiasaude.css') }}">
@endsection

@section('content')
<div class="banner">
    <div class="content">
        <div class="title">Guia de saúde</div>
        <div class="subtitle">Tratamentos de qualidade ao nivel da Medicina Oral.</div>
        <div class="subtitle1">Onde cada Doente é um Amigo e o sorriso é levado muito a sério.</div>
        <div class="button-wrapper">
            <a href="" class="button1">Saber Mais</a>
        </div>
    </div>
</div>

<div class="titulo">Guia de saude</div>
<div class="divisorbloco">
    <div class="linha"></div>
</div>

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



@endsection
@section('moreScripts')
        <script src="{{ asset('js/form.js') }}"></script>
        <script src="{{ asset('js/upbuton.js') }}"></script>
    @endsection
