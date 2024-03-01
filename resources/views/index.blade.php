@extends('layouts.master')

@section('title', 'Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection


@section('content')

        <div class="banner">
            <div class="content">
                <div class="title">Clínica Dentária Bruno & Pedro</div>
                <div class="subtitle">Tratamentos de qualidade ao nivel da Medicina Oral.</div>
                <div class="subtitle1">Onde cada Doente é um Amigo e o sorriso é levado muito a sério.</div>
                <a href="{{ route('contactos') }}#formtodo" class="button">Pedido de Marcação</a>
            </div>
        </div>


    <div class="slider">
        <div class="slider-track">
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
            <div class="slider-item">
                <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="image">
                <p class="slider-text">Teste</p>
            </div>
        </div>
        <button class="slider-btn left">&lt;</button>
        <button class="slider-btn right">&gt;</button>

        <div class="slider-nav-dots">
        </div>
    </div>


@endsection

@section('moreScripts')
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
@endsection
