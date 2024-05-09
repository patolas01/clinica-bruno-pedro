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
            <p>A Clínica foi fundada em <strong>18 de setembro de 2005</strong> com o compromisso de proporcionar tratamentos de
                <strong>qualidade</strong> na área da <strong>Medicina Oral</strong>. Cada paciente é recebido como um
                amigo, e aqui levamos o sorriso muito a sério.</p>

            <p>Oferecemos uma ampla gama de serviços, incluindo <strong>Dentisteria</strong>, <strong>Estética</strong>,
                <strong>Endodontia</strong>, <strong>Higiene Oral</strong>, <strong>Periodontologia</strong>,
                <strong>Prótese Fixa</strong>, <strong>Prótese Removível</strong>, <strong>Ortodontia</strong>,
                <strong>Odontopediatria</strong>, <strong>Odontogeriatria</strong>, <strong>Cirurgia Oral</strong> e
                <strong>Implantes</strong>.</p>

            <p>Localizada na <strong>Rua Fonte da Vila, nº 922, 3100-012 Abiul</strong>, estamos sempre disponíveis para
                atender às suas necessidades. Entre em contato connosco pelo telefone <strong>236 922 431</strong> para
                agendar a sua consulta. Estamos aqui para cuidar do seu sorriso!</p>

        </div>
    </section>

@endsection
@section('moreScripts')
    <script src="{{ asset('js/form.js') }}"></script>
    <script src="{{ asset('js/upbuton.js') }}"></script>
@endsection
