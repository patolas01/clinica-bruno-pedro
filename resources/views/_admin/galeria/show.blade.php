@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação da Modalidade
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <strong>Imagem:</strong>
                        <img class="img-fluid" src="{{asset('storage/galeria_imagens/'. $galerium->imagem )}}"
                            alt="Imagem da galeria">
                    </div>

                    <div class="col-md-9">
                        <div class="mb-3">
                            <strong>Nome:</strong> {{ $galerium->nome }}
                        </div>

                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
