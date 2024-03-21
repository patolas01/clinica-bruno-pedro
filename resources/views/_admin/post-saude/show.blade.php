@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do Post Saúde
            </div>
            <div class="card-body">
                <div><strong>Nome:</strong> {{ $postSaude->nome }}</div>
                <div><strong>Descrição:</strong> {{ $postSaude->descricao }}</div>
                <div><strong>Imagem:</strong> <br> <img src="{{ asset('storage/post_imagens/' . $postSaude->imagem) }}"
                        alt="Imagem do Post Saúde"></div>
            </div>
        </div>
    </div>
@endsection
