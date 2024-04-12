@extends('layouts.master')
@section('title', 'Guia Saúde - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/guiasaude.css') }}">
@endsection

@section('content')

<div class="banner">
    <div class="content">
        <div class="title">Guia de Saúde</div>
        <div class="subtitle">Tratamentos de qualidade ao nivel da Medicina Oral.</div>
        <div class="subtitle1">Onde cada Doente é um Amigo e o sorriso é levado muito a sério.</div>
        <a href="{{ route('contactos') }}" class="button1">Saber Mais</a>
    </div>
</div>

<div class="titulo1">Guia de Saúde</div>
<div class="divisorbloco">
    <div class="linha"></div>
</div>

<div class="categorias">

    <div class="rowcategoria">
        @if (!is_null($posts) && count($posts) > 0)
        @foreach ($posts as $post)
    <div class="cardcategoria">
        <div class="imgcat">
        <img src="{{ asset('storage/post_imagens/'. $post->imagem) }}" alt="Post">
        </div>
        <div class="categoria-conteudo">
        <h3>{{ $post->nome }}</h3>
        <p>{{ $post->descricao }}</p>
        </div>
    </div>
    @endforeach
    @else
        <p class="erro-message">Nenhum post disponível no momento.</p>
    @endif
    </div>
</div>
@endsection
@section('moreScripts')
        <script src="{{ asset('js/form.js') }}"></script>
        <script src="{{ asset('js/upbuton.js') }}"></script>
    @endsection
