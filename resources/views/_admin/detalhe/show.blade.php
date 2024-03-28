@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do detalhe
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <strong>Imagem:</strong>
                        <img class="img-fluid" src="{{asset('storage/detalheesp_imagens/'. $detalhe->imagem )}}"
                            alt="Imagem da especialidade">
                    </div>

                    <div class="col-md-9">
                        <div class="mb-3">
                            <strong>Descrição:</strong> {{ $detalhe->descriçao }}
                        </div>

                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
