@extends('layouts.master')

@section('title', 'Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection


@section('content')

    <div class="banner">
        <div class="content">
            <div class="title">Clínica Dentária Bruno & Pedro</div>
            <div class="subtitle">Tratamentos de qualidade ao nivel da Medicina Oral.</div>
            <div class="subtitle1">Onde cada Doente é um Amigo e o sorriso é levado muito a sério.</div>
            <a href="{{ route('contactos') }}#formtodo" class="button1">Pedido de Marcação</a>
        </div>
    </div>

    <h1 class="titulo1">As nossas Especialidades</h1>

    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
            @foreach ($especialidades as $especialidade)
                <li class="card">
                    @if (isset($detalhesByEspecialidade[$especialidade->id]))
                        <!-- Use <a> como link em volta da <div> da imagem -->
                        <a href="{{ route('especialidadeDetalhe', $especialidade) }}">
                            <div class="img">
                                <img src="{{ asset('storage/detalheesp_imagens/' . $detalhesByEspecialidade[$especialidade->id]->imagem) }}"
                                    alt="{{ $especialidade->nome }}" draggable="false">
                            </div>
                            <h3>{{ $especialidade->nome }}</h3>
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>

    {{-- <div class="divisorblocoprincipal">
        <div class="linhaprincipal"></div>
    </div> --}}

    <section id="main2">
        <div id="seccaoprincipal2">
            <div id="infoseccaoprincipal2">
                <h6 id="nomeseccaoprincipal2">Sobre a Clínica</h6>
                <div class="divisorbloco">
                    <div class="linha"></div>
                </div>
                <div id="descricaoseccaoprincipal2">
                    <p>Esta Clinica tem um texto de exemplo pois ainda não foi feito o estudo sobre a história da clinica.
                        Foi fundada talvez num ano qualquer por exemplo 1988, na zona de Pombal.</p>
                </div>
                <a href="{{ route('sobre') }}" class="vermais2">Saber mais ></a>
            </div>
            <img src="{{ asset('img/Logo BrunoPedro escuro.png') }}" alt="Secção Principal" id="imgseccaoprincipal2">
        </div>
    </section>

    <div class="container">
        <h2>Opiniões dos nossos Clientes</h2>
        <p class="description">Onde cada Doente é um Amigo!</p>

        <div class="reviewSection">

            @if (!is_null($avaliacoes) && count($avaliacoes) > 0)
                @foreach ($avaliacoes as $avaliaco)
                    <div class="reviewItem">
                        <div class="top">
                            <div class="clientImage">
                                <img src="{{ asset('img/favicon preto.png') }}" alt="estrela">
                                <span>{{ $avaliaco->nome }}</span>

                            </div>
                        </div>
                        <ul class="stars">
                            @for ($i = 0; $i < $avaliaco->classificacao; $i++)
                                <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                            @endfor
                        </ul>
                        <article>
                            <p class="review">{{ $avaliaco->texto }}</p>
                        </article>
                    </div>
                @endforeach
            @else
                <p class="erro-message">Nenhuma avaliação disponível no momento.</p>
            @endif
        </div>
    </div>


@endsection

@section('moreScripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/animation-scroll.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>
@endsection
@section('moreScripts')

@endsection
