@extends('layouts.master')

@section('title', 'Contactos - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
<link rel="stylesheet" href="{{ asset('css/contactos.css') }}">
@endsection

@section('content')
<div class="titulo">Contactos</div>
<div class="divisorbloco">
    <div class="linha"></div>
</div>

<section id="main">
    <div id="contactos2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3062.025158114526!2d-8.541598724317756!3d39.87367437153199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd227cb9753e463d%3A0xf46d2fac71a20e7f!2sBruno%20%26%20Pedro%20Lda!5e0!3m2!1spt-PT!2spt!4v1709211847777!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div id="infocontactos2">
            <div class="info-bloco">
                <i class="fas fa-map-marker-alt" style="color: #9a89f4;"></i>
                <div class="info-content">
                    <h6 class="info-titulo">Morada</h6>
                    <p>Rua Fonte da Vila, n 922 3100-012 Abiul</p>
                </div>
            </div>
            <div class="info-bloco">
                <i class="fas fa-phone" style="color: #9a89f4;"></i>
                <div class="info-content">
                    <h6 class="info-titulo">Contacto</h6>
                    <p>236 922 431</p>
                    <p>bruno_pedro.lda@hotmail.com</p>
                </div>
            </div>
            <div class="info-bloco">
                <i class="far fa-calendar-alt" style="color: #9a89f4;"></i>
                <div class="info-content">
                    <h6 class="info-titulo">Horário</h6>
                    <p>Ter - Sex: 9:00h - 19:00h</p>
                    <p>Sáb: 9:00h - 12:30h</p>
                    <p>Seg - Dom: FECHADO</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="formtodo">
<div class="tudoform">
<div class="titulo2">Marque já a sua consulta</div>
<div class="subtitulo">Especialistas prontos para o ajudar.</div>


<div class="container">
    <form action="#" method="post">
        <div class="form-row">
            <div class="form-column">
                <label for="nome">Nome</label>
                <input type="text" id="name" name="nome" placeholder="Nome" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-column">
                <label for="contacto">Contacto</label>
                <input type="tel" id="contacto" name="contacto" placeholder="Contacto" required>

                <label for="especialidade">Especialidade</label>
                <select id="especialidade" name="especialidade">
                    <option value="" disabled selected>Selecione a especialidade</option>
                    <option value="Especialidade1">Especialidade 1</option>
                    <option value="Especialidade2">Especialidade 2</option>
                    <option value="Especialidade3">Especialidade 3</option>
                    <option value="Especialidade4">Especialidade 4</option>
                    <option value="Especialidade5">Especialidade 5</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" placeholder="Mensagem" required></textarea>
        </div>
        <button class="centralizarbotao" type="submit">Enviar Pedido de Marcação</button>
    </form>
</div>
</div>
</div>

@endsection

@section('moreScripts')
        <script src="{{ asset('js/form.js') }}"></script>
        <script src="{{ asset('js/upbuton.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let inputNome = document.getElementById('name');
                inputNome.addEventListener('input', function(event) {
                    // Remove qualquer número que seja inserido no campo "Nome"
                    this.value = this.value.replace(/[0-9]/g, '');
                });
                let inputContacto = document.getElementById('contacto');
                inputContacto.addEventListener('input', function(event) {
                    // Remove qualquer caractere que não seja número do campo "Contacto"
                    this.value = this.value.replace(/\D/g, '');
    });
            });
            </script>
    @endsection
