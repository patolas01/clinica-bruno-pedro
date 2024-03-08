@extends('layouts.master')
@section('title', 'Área Clinica - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/areaclinica.css') }}">
@endsection


<div class="banner">

</div>

<div class="titulo">Serviços</div>

<section class="servicos">
    <div class="container flex-center">
        <div class="grid-servicos">
            <div class="servicos-card">
                <img src="{{ asset('img/denteicon.svg') }}" alt="icon de corpo laranja">
                <div></div>
                <h5>condicionamento Físico</h5>
                <p>Programas de condicionamento físico específicos para diferentes níveis de aptidão.</p>
                <div class="button-wrapper">
                <a href="" class="button">Saber mais</a>
                </div>
            </div>

            <div class="servicos-card">
                <img src="{{ asset('img/denteicon.svg') }}" alt="icon de corpo laranja">
                <h5>nutrição</h5>
                <p>O Pulse Hub oferece serviços de aconselhamento nutricional.</p>
                <div class="button-wrapper">
                    <a href="" class="button">Saber mais</a>
                    </div>
            </div>


            <div class="servicos-card">
                <img src="{{ asset('img/denteicon.svg') }}" alt="icon de corpo laranja">
                <h5>testes de desempenho</h5>
                <p>Realizar avaliações físicas iniciais e periódicas para rastrear o progresso dos membros.</p>
                <div class="button-wrapper">
                    <a href="" class="button">Saber mais</a>
                    </div>
            </div>


            <div class="servicos-card">
                <img src="{{ asset('img/denteicon.svg') }}" alt="icon de corpo laranja">
                <h5>plano PERSONALIZADO</h5>
                <p>Planos de treino ajustados aos objetivos pessoais.</p>
                <div class="button-wrapper">
                    <a href="" class="button">Saber mais</a>
                    </div>
            </div>
        </div>
    </div>
</section>

{{--
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
