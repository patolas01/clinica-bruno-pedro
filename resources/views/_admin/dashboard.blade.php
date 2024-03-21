@extends ("layouts.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>

    </div>
    {{-- <a href="{{ route('especialidades.index') }}" class="button2">1</a>
    <a href="{{ route('formularios.index') }}" class="button2">2</a>
    <a href="{{ route('posts-saude.index') }}" class="button2">3</a>
    <a href="{{ route('avaliacoes.index') }}" class="button2">4</a>
    <a href="" class="button2">5</a>
    <a href="" class="button2">6</a> --}}






    <!-- DONUT CHART BLOCK (LEFT-CONTAINER) -->
    <div class="donut-chart-block block">
        <h2 class="titular">OS AUDIENCE STATS</h2>
        <div class="donut-chart">
            <!-- PORCIONES GRAFICO CIRCULAR
          ELIMINADO #donut-chart
          MODIFICADO CSS de .donut-chart -->
            <div id="porcion1" class="recorte">
                <div class="quesito ios" data-rel="21"></div>
            </div>
            <div id="porcion2" class="recorte">
                <div class="quesito mac" data-rel="39"></div>
            </div>
            <div id="porcion3" class="recorte">
                <div class="quesito win" data-rel="31"></div>
            </div>
            <div id="porcionFin" class="recorte">
                <div class="quesito linux" data-rel="9"></div>
            </div>
            <!-- FIN AÑADIDO GRÄFICO -->
            <p class="center-date">JUNE<br><span class="scnd-font-color">2013</span></p>
        </div>
        <ul class="os-percentages horizontal-list">
            <li>
                <p class="ios os scnd-font-color">iOS</p>
                <p class="os-percentage">21<sup>%</sup></p>
            </li>
            <li>
                <p class="mac os scnd-font-color">Mac</p>
                <p class="os-percentage">39<sup>%</sup></p>
            </li>
            <li>
                <p class="linux os scnd-font-color">Linux</p>
                <p class="os-percentage">9<sup>%</sup></p>
            </li>
            <li>
                <p class="win os scnd-font-color">Win</p>
                <p class="os-percentage">31<sup>%</sup></p>
            </li>
        </ul>
    </div>
@endsection
