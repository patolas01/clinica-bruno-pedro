@extends('layouts.master')
@section('title', 'Perfil - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

@endsection

@section('content')
<div class="container light-style flex-grow-1 container-p-y">
    <h4 class="titulo1">
        Perfil
    </h4>
    <div class="carduser">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 pt-0">
                <div class="list-group list-group-flush account-settings-links">
                    <a class="list-group-item list-group-item-action active" data-toggle="list"
                        href="#account-general">General</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list"
                        href="#account-change-password">Change password</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="perfildados">
                    <div class="tab-pane fade active show" id="account-general">
                        <div class="card-body media align-items-center">

                            <img src="{{ asset('https://bootdey.com/img/Content/avatar/avatar1.png') }}" alt
                                class="userimage">
                            <div class="botoes1">
                                <label class="custom-file-input">
                                    Inserir Arquivo
                                    <input type="file" class="botaoins">
                                </label>

                                <button type="button" class="botaoins">Reset</button>
                                <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                            </div>
                        </div>
                        <hr class="border-light m-0">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nome" class="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>

                            <div class="form-group">
                                <label for="email" class="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="contacto" class="contacto">Contacto</label>
                                <input type="tel" class="form-control" id="contacto" name="contacto">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    <div class="text-right mt-3">
        <button type="button" class="botao">Save changes</button>&nbsp;
        <button type="button" class="botao">Cancel</button>
    </div>
</div>
</div>



@endsection

@section('moreScripts')

        <script src="{{ asset('js/upbuton.js') }}"></script>
    @endsection
