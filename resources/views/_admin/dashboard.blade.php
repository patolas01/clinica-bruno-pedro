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

<a href="{{ route('especialidades.index') }}" class="button2">1</a>
<a href="{{ route('formularios.index') }}" class="button2">2</a>
<a href="{{ route('posts-saude.index') }}" class="button2">3</a>
<a href="" class="button2">4</a>
<a href="" class="button2">5</a>
<a href="{{ route('_admin.avaliacoes') }}" class="button2">6</a>
@endsection


@section('moreScripts')
        <script src="{{ asset('js/form.js') }}"></script>
        <script src="{{ asset('js/upbuton.js') }}"></script>
    @endsection
