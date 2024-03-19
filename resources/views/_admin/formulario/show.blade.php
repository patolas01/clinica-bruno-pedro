@extends('layout.admin')

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
                        <img class="img-fluid" src=""
                            alt="Imagem da modalidade">
                    </div>

                    <div class="col-md-9">
                        <div class="mb-3">
                            <strong>Nome:</strong>
                        </div>
                        <div class="mb-3">
                            <strong>Categoria:</strong>
                        </div>
                        <div class="mb-3">
                            <strong>Descrição:</strong>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                            <div class="mb-3">
                                <strong>Staff associado à modalidade:</strong>
                                <ul class="list-unstyled">

                                        <li></li>

                                </ul>
                            </div>
                      
                    </div>

                    <div class="col-md-6">

                            <div class="mb-3">
                                <strong>Duração dos planos associados à modalidade:</strong>
                                <ul class="list-unstyled">

                                        <li></li>

                                </ul>
                            </div>

                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
