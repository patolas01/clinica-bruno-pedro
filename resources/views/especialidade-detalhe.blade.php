@extends('layouts.master')
@section('title', 'Área Clinica - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/areaclinica.css') }}">
@endsection
@section('content')

<h1>{{ $especialidade->nome }}</h1>
<img src="" alt="Detalhes">
<p></p>
@endsection



@section('moreScripts')
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/animation-scroll.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
