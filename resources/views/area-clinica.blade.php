@extends('layouts.master')
@section('title', 'Área Clinica - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/areaclinica.css') }}">
@endsection

@section('content')

    <div class="banner">
        <div class="content">
            <div class="title">Área Clínica</div>
            <div class="subtitle">Tratamentos de qualidade ao nivel da Medicina Oral.</div>
            <div class="subtitle1">Onde cada Doente é um Amigo e o sorriso é levado muito a sério.</div>
            <div class="button-wrapper">
                <a href="" class="button1">Saber Mais</a>
            </div>
        </div>
    </div>



    <div class="titulo">Especialidades</div>
    <div class="divisorbloco">
        <div class="linha"></div>
    </div>

    <section class="servicos">
        <div class="container flex-center">
            <div class="grid-servicos">
                @if (!is_null($especialidades) && count($especialidades) > 0)
                    @foreach ($especialidades as $especialidade)
                        <div class="servicos-card">
                            <img src="{{ asset('storage/especialidade_imagens/' . $especialidade->icon) }}" alt="icon de corpo laranja">
                            <div></div>
                            <h5>{{ $especialidade->nome }}</h5>
                            <p>{{ $especialidade->curta_desc }}</p>
                            <div class="button-wrapper">
                                <a href="{{ route('especialidadeDetalhe', $especialidade) }}" class="button">Saber Mais</a>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <p class="erro-message">Nenhuma especialidade disponível no momento.</p>
                        @endif
            </div>
        </div>
    </section>
    
@endsection



@section('moreScripts')
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/animation-scroll.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
