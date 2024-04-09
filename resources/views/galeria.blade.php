@extends('layouts.master')

@section('title', 'Galeria - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
<link rel="stylesheet" href="{{ asset('css/galeria.css') }}">
@endsection

@section('content')
<div class="titulo">Galeria</div>
<div class="divisorbloco">
    <div class="linha"></div>
</div>

<div class="subtitulo">Clique nas miniaturas abaixo para aumentar a imagem.</div>

<div class="gallery">
    <div class="main-image">
        <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Main Image">
    </div>

    <div class="thumbnails">
        <div class="thumbnail">
            <img src="{{ asset('img/endodontia.jpg') }}" alt="Thumbnail 1">
        </div>
        <div class="thumbnail">
            <img src="{{ asset('img/cirurgiaoral.jpg') }}" alt="Thumbnail 2">
        </div>
        <div class="thumbnail">
            <img src="{{ asset('img/periodontologia.jpg') }}" alt="Thumbnail 3">
        </div>
        <div class="thumbnail">
            <img src="{{ asset('img/higieneoral.jpg') }}" alt="Thumbnail 4">
        </div>
        <div class="thumbnail">
            <img src="{{ asset('img/implantes.jpg') }}" alt="Thumbnail 5">
        </div>
    </div>
</div>

{{--
<div class="wrapper">
    <!-- filter Items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all">Todas</span>
        <span class="item" data-name="Dentisteria">Dentisteria</span>
        <span class="item" data-name="Estética">Estética</span>
        <span class="item" data-name="Endodontia">Endodontia</span>
        <span class="item" data-name="Higiene Oral">Higiene Oral</span>
        <span class="item" data-name="Periodontologia">Periodontologia</span>
        <span class="item" data-name="Prótese Fixa">Prótese Fixa</span>
        <span class="item" data-name="Prótese Removível">Prótese Removível</span>
        <span class="item" data-name="Ortodontia">Ortodontia</span>
        <span class="item" data-name="Odontopediatria">Odontopediatria</span>
        <span class="item" data-name="Odontogeriatria">Odontogeriatria</span>
        <span class="item" data-name="Cirurgia Oral">Cirurgia Oral</span>
        <span class="item" data-name="Implantes">Implantes</span>
      </div>
    </nav>
    <!-- filter Images -->
    <div class="gallery">
      <div class="image" data-name="Dentisteria"><span><img src="https://images.pexels.com/photos/417074/pexels-photo-417074.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="Endodontia"><span><img src="https://images.pexels.com/photos/2335126/pexels-photo-2335126.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="Higiene Oral"><span><img src="https://images.pexels.com/photos/210186/pexels-photo-210186.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="Estética"><span><img src="https://images.pexels.com/photos/33041/antelope-canyon-lower-canyon-arizona.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="Endodontia"><span><img src="images/headphone-2.jpg" alt=""></span></div>
      <div class="image" data-name="Endodontia"><span><img src="https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span></div>
      <div class="image" data-name="Estética"><span><img src="images/shoe-2.jpg" alt=""></span></div>
      <div class="image" data-name="Higiene Oral"><span><img src="images/camera-2.jpg" alt=""></span></div>
    </div>
</div>

  <!-- fullscreen img preview box -->
  <div class="preview-box">
    <div class="details">
      <span class="title">Galeria: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>


 <div class="gallery2">
    <div class="gallery2-item">
        <a href="#">
            <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        </a>
    </div>
    <div class="gallery2-item">
        <a href="#">
            <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        </a>
    </div>
    <div class="gallery2-item">
        <a href="#">
            <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        </a>
    </div>
    <div class="gallery2-item">
        <a href="#">
            <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        </a>
    </div>
    <div class="gallery2-item">
        <a href="#">
            <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        </a>
    </div>
    <div class="gallery2-item">
        <a href="#">
            <img src="{{ asset('img/dentist-2589771.jpg') }}" alt="Musculação">
        </a>
    </div>
</div> --}}

@endsection
@section('moreScripts')
        <script src="{{ asset('js/gallery.js') }}"></script>
        <script src="{{ asset('js/upbuton.js') }}"></script>
    @endsection
