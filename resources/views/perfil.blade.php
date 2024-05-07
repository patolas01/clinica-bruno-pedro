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

                <div class="form">
                    <div class="perfildados">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                @if ($user->img)
                                    <img src="{{ asset('storage/users_fotos/' . $user->img) }}" alt="User Image"
                                        class="userimage">
                                @else
                                    <img src="{{ asset('user.png') }}" alt="Default Image" class="userimage">
                                @endif

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
                                    <input type="text" class="form-control" id="nome" name="nome"
                                        value="{{ $user->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ $user->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="contacto" class="contacto">Contacto</label>
                                    <input type="tel" class="form-control" id="contacto" name="contacto"
                                        value="">
                                </div>
                            </div>
                            <div class="text-right mt-3">
                                <button type="button" class="botao">Save changes</button>&nbsp;
                                <button type="button" class="botao">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>



@endsection

@section('moreScripts')

    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
