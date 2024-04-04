@extends('layouts.master')
@section('title', 'Área Clinica - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/areaclinica.css') }}">
@endsection
@section('content')

<h1>{{ $especialidade->nome }}</h1>
{{--
<p>Descrição: {{ $especialidade->descricao }}</p>
 --}}
@if($detalhes->count() > 0)
    <h2>Detalhes</h2>
    <ul>
        @foreach($detalhes as $detalhe)
            <li>
                <img src="{{ asset('storage/detalheesp_imagens/' . $detalhe->imagem) }}" alt="Imagem do Detalhe">
                <p>Descrição: {{ $detalhe->descriçao }}</p>
            </li>
        @endforeach
    </ul>
@else
    <p>Nenhum detalhe disponível para esta especialidade.</p>
@endif
@endsection



@section('moreScripts')
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/animation-scroll.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
