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
                    @foreach ($especialidades as $especialidades)
                        <div class="servicos-card">
                            <img src="{{ asset('storage/especialidade_imagens/' . $especialidades->icon) }}" alt="icon de corpo laranja">
                            <div></div>
                            <h5>{{ $especialidades->nome }}</h5>
                            <p>{{ $especialidades->curta_desc }}</p>
                            <div class="button-wrapper">
                                <a href="" class="button">Saber Mais</a>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <p>Nenhuma especialidade disponível no momento.</p>
                        @endif
            </div>
        </div>
    </section>
    {{--
                <div class="servicos-card">
                    <img src="{{ asset('img/HigieneOralicon.svg') }}" alt="icon de corpo laranja">
                    <h5>Higiene Oral</h5>
                    <p>O Pulse Hub oferece serviços de aconselhamento nutricional.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>


                <div class="servicos-card">
                    <img src="{{ asset('img/Cirugiaoral.svg') }}" alt="icon de corpo laranja">
                    <h5>Cirugia Oral</h5>
                    <p>Realizar avaliações físicas iniciais e periódicas para rastrear o progresso dos membros.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>


                <div class="servicos-card">
                    <img src="{{ asset('img/endodontiaa.svg') }}" alt="icon de corpo laranja">
                    <h5>Endodontia</h5>
                    <p>Planos de treino ajustados aos objetivos pessoais.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>

                <div class="servicos-card">
                    <img src="{{ asset('img/Implantes.svg') }}" alt="icon de corpo laranja">
                    <h5>Implantes</h5>
                    <p>Planos de treino ajustados aos objetivos pessoais.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>

                <div class="servicos-card">
                    <img src="{{ asset('img/denteicon.svg') }}" alt="icon de corpo laranja">
                    <h5>Odontogeriatria</h5>
                    <p>Planos de treino ajustados aos objetivos pessoais.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>

                <div class="servicos-card">
                    <img src="{{ asset('img/Periodontologia.svg') }}" alt="icon de corpo laranja">
                    <h5>Periodontologia</h5>
                    <p>Planos de treino ajustados aos objetivos pessoais.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>

                <div class="servicos-card">
                    <img src="{{ asset('img/ortopediatria.svg') }}" alt="icon de corpo laranja">
                    <h5>Odontopediatria</h5>
                    <p>Planos de treino ajustados aos objetivos pessoais.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>

                <div class="servicos-card">
                    <img src="{{ asset('img/proteses.svg') }}" alt="icon de corpo laranja">
                    <h5>Próteses</h5>
                    <p>Planos de treino ajustados aos objetivos pessoais.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>

                <div class="servicos-card">
                    <img src="{{ asset('img/chair.svg') }}" alt="icon de corpo laranja">
                    <h5>Estética</h5>
                    <p>Planos de treino ajustados aos objetivos pessoais.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>

                <div class="servicos-card">
                    <img src="{{ asset('img/toothbrush.svg') }}" alt="icon de corpo laranja">
                    <h5>Dentisteria</h5>
                    <p>Planos de treino ajustados aos objetivos pessoais.</p>
                    <div class="button-wrapper">
                        <a href="" class="button">Saber Mais</a>
                    </div>
                </div>

                --}}


@endsection



@section('moreScripts')
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/animation-scroll.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
