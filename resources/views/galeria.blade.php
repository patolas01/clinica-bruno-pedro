@extends('layouts.master')

@section('title', 'Galeria - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
<link rel="stylesheet" href="{{ asset('css/galeria.css') }}">
@endsection

@section('content')
<div class="titulo1">Galeria</div>
<div class="divisorbloco">
    <div class="linha"></div>
</div>


<ul class="listagaleria">
    @foreach ($galerias as $galeria)
        <li>
            <a href="">
                <figure>
                    <img src="{{ asset('storage/galeria_imagens/' . $galeria->imagem) }}" alt="{{ $galeria->nome }}" class="imggallery">
                    <figcaption class="figcaption">{{ $galeria->nome }}</figcaption>
                </figure>
            </a>
        </li>
    @endforeach
</ul>


@endsection
@section('moreScripts')
        <script src="{{ asset('js/gallery.js') }}"></script>
        <script src="{{ asset('js/upbuton.js') }}"></script>
    @endsection
