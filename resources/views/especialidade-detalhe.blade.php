@extends('layouts.master')
@section('title', 'Área Clinica - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/detalhe.css') }}">
@endsection
@section('content')


<div class="titulo">{{ $especialidade->nome }}</div>
<div class="divisorbloco">
    <div class="linha"></div>
</div>


 <section id="main">
    <div id="detalhe">
        @if($detalhes->count() > 0)
            @foreach($detalhes as $detalhe)
                <img class="det" src="{{ asset('storage/detalheesp_imagens/' . $detalhe->imagem) }}" alt="Imagem do Detalhe">
                <div id="infodetalhe">
                    <div class="info-bloco">
                        <div class="info-content">
                            <h3 class="info-titulo">{{ $especialidade->nome }}</h3>
                            <p>{{ $detalhe->descriçao }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nenhum detalhe disponível para esta especialidade.</p>
        @endif

</section>
@endsection



@section('moreScripts')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/animation-scroll.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
