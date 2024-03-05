@extends('layouts.master')

@section('title', 'Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/equipa.css') }}">
@endsection

<div class="titulo">Equipa</div>



        {{--
        @if (!is_null($tiposplanos) && count($tiposplanos) > 0)
            @foreach ($tiposplanos as $tipoplano)
                @if (strtolower($tipoplano->classe) == 'normal')
                 --}}


        {{--
                @endif
            @endforeach
        @else
            <p>Nenhum tipo de plano disponível no momento.</p>
        @endif
 --}}

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
