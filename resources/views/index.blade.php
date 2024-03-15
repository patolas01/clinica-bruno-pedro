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
            <a href="{{ route('contactos') }}#formtodo" class="button">Pedido de Marcação</a>
        </div>
    </div>

    <h1 class="titulo1">As nossas Especialidades</h1>

    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
          <li class="card">
            <div class="img"><img src="{{ asset('img/dentisteria.jpg') }}" alt="img" draggable="false"></div>
            <h3>Dentisteria</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/estetica.jpg') }}" alt="img" draggable="false"></div>
            <h3>Estética</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/endodontia.jpg') }}" alt="img" draggable="false"></div>
            <h3>Endodontia</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/higieneoral.jpg') }}" alt="img" draggable="false"></div>
            <h3>Higiene Oral</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/periodontologia.jpg') }}" alt="img" draggable="false"></div>
            <h3>Periodontologia</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/protesefixa.jpg') }}" alt="img" draggable="false"></div>
            <h3>Prótese Fixa</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/proteseremovivel.jpg') }}" alt="img" draggable="false"></div>
            <h3>Prótese Removível</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/ortodontia.jpg') }}" alt="img" draggable="false"></div>
            <h3>Ortodontia</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/odontopediatria.jpg') }}" alt="img" draggable="false"></div>
            <h3>Odontopediatria</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/odontogeriatria.jpg') }}" alt="img" draggable="false"></div>
            <h3>Odontogeriatria</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/cirurgiaoral.jpg') }}" alt="img" draggable="false"></div>
            <h3>Cirurgia Oral</h3>
          </li>
          <li class="card">
            <div class="img"><img src="{{ asset('img/implantes.jpg') }}" alt="img" draggable="false"></div>
            <h3>Implantes</h3>
          </li>
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

            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="{{ asset('img/favicon preto.png') }}" alt="">
                        <span>Ana Filipe Faveiro</span>
                    </div>
                </div>
                <ul class="stars">
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                </ul>
                <article>
                    <p class="review">Profissional e atencioso, 5 estrelas!</p>
                    <p>01 Fev. 2019</p>
                </article>
            </div>

            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="{{ asset('img/favicon preto.png') }}" alt="">
                        <span>Sonia Pereira</span>
                    </div>
                </div>
                <ul class="stars">
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-regular fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                </ul>
                <article>
                    <p class="review">uma clinica com dentistas espetaculares, que continuem assim</p>
                    <p>15 Jan. 2019</p>
                </article>
            </div>

            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="{{ asset('img/favicon preto.png') }}" alt="">
                        <span>Serginho Santos</span>
                    </div>
                </div>
                <ul class="stars">
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B; margin-left: 5px;"></i>
                </ul>
                <article>
                    <p class="review">5 estrelas ⭐️ nada a apontar !!</p>
                    <p>29 Jul. 2019</p>
                </article>
            </div>
        </div>
    </div>


@endsection

@section('moreScripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/animation-scroll.js') }}"></script>

@endsection
@section('moreScripts')
    <script src="{{ asset('js/form.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
