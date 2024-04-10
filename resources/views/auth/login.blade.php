@extends('layouts.app')

@section('content')

        <div class="center">
            <img src="{{ asset('img/Logo BrunoPedro escuro.png') }}" alt="Logo Login" id="logologin">
            <h1>Login</h1>
            <p>Faça login ou registre-se para aceder:</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="txt_field">
                    <input type="text" class="@error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span></span>
                    <label>Email</label>
                    <a class=" mail"><i class="fa-solid fa-envelope"></i></a>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="txt_field">
                    <input type="password" id="pass" class="@error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password">
                    <span></span>
                    <label>Password</label>
                    <button type="button" class="eye1"><i class="fa-solid fa-eye-slash" id="eye"></i></button>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <input type="submit" value="Login">
            </form>
            <div class="forget">
                @if (Route::has('password.request'))
                <a class="pass" href="{{ route('password.request') }}">
                    Esqueceste-te da password?
                </a>
                @endif
            </div>
            <div class="signup_link">
                Não tem conta? <a href="{{ route('register') }}">Registar</a>
            </div>
        </div>

@endsection

@section('moreScripts')

@endsection
