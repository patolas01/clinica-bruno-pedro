@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação da Avaliação
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-9">
                        <div class="mb-3">
                            <strong>Nome:</strong> {{ stars($avaliaco->nome) }}
                        </div>
                        <div class="mb-3">
                            <strong>Classificação:</strong> {{ stars($avaliaco->classificacao) }}
                        </div>
                        <div class="mb-3">
                            <strong>Comentário:</strong> {{$avaliaco->texto}}
                        </div>
                        <a href="{{route('avaliacoes.index')}}" class="btn btn-default">Voltar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @php
        function stars($rating) {
            $stars = '';
            for ($i = 0; $i < $rating; $i++) {
                $stars .= '⭐';
            }
            return $stars;
        }
    @endphp

@endsection
