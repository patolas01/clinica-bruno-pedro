@extends('layouts.master')
@section('title', 'Sobre - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/sobre.css') }}">
@endsection

@section('content')

    <div class="titulo">Sobre Nós</div>
    <div class="divisorbloco">
        <div class="linha"></div>
    </div>

    <section id="main2">
        <div class="informacao about-us">
            <p>A Clínica foi fundada em <strong>18 de setembro de 2005</strong> com o compromisso de proporcionar
                tratamentos de
                <strong>qualidade</strong> na área da <strong>Medicina Oral</strong>. Cada paciente é recebido como
                um
                amigo, e aqui levamos o sorriso muito a sério.
            </p>

            <p>Oferecemos uma ampla gama de serviços, incluindo:
            <ul>
                <li><a href="">Dentisteria</a></li>
                <li><a href="">Estética</a></li>
                <li><a href="">Endodontia</a></li>
                <li><a href="">Higiene Oral</a></li>
                <li><a href="">Periodontologia</a></li>
                <li><a href="">Prótese Fixa</a></li>
                <li><a href="">Prótese Removível</a></li>
                <li><a href="">Ortodontia</a></li>
                <li><a href="">Odontopediatria</a></li>
                <li><a href="">Odontogeriatria</a></li>
                <li><a href="">Cirurgia
                        Oral</a></li>
                <li><a href="">Implantes</a></li>
            </ul>
            </p>
            <p>Localizada na <a href="https://maps.app.goo.gl/QmeayfJtorh9GmiZ9" target="_blank">Rua Fonte da Vila, nº 922, 3100-012 Abiul</a>, estamos sempre disponíveis
                para
                atender às suas necessidades. Entre em contato connosco pelo telefone <a href="tel:236 922 431">236 922 431</a> para
                agendar a sua consulta.<br> Estamos aqui para cuidar do seu sorriso!</p>

        </div>
    </section>

@endsection
@section('moreScripts')
    <script src="{{ asset('js/form.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
