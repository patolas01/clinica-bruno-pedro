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
                            <strong>Classificação:</strong> {{ $avaliaco->classificacao }}
                        </div>
                        <div class="mb-3">
                            <strong>Comentario</strong> {{$avaliaco->texto}}
                        </div>

                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
