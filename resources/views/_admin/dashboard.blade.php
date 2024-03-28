@extends ("layouts.admin")


@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/graphs.css') }}">
@endsection

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


    <div class="container-fluid">




        {{-- graph section (top) --}}
        <div class="top-graphs">

            {{-- each graph --}}
            <div class="graph bar">
                {{-- main title --}}
                <h3 class="graph-title">Formulários</h3>
                {{-- bars section --}}
                <div class="graph-info">
                    {{-- iterate over the data --}}
                    @foreach ($data as $especialidadeId => $total)
                        {{-- get the nome of especialidade --}}
                        @php
                            $especialidadeNome = $especialidades[$especialidadeId];
                        @endphp
                        {{-- each bar --}}
                        <div class="graph-info-item">
                            {{-- title of the item --}}
                            <p class="graph-info-title">{{ $especialidadeNome }}</p>
                            {{-- horizontal bar with value --}}
                            <div class="graph-info-bar" style="width: {{ $total }}%;">
                                <p class="graph-info-value">{{ $total }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>




            <!--

                           {{-- {{-- each graph --}}
                            <div class="graph bar">
                                {{-- main title --}}
                                <h3 class="graph-title">Graph 1</h3>
                                {{-- bars section --}}
                                <div class="graph-info">

                                    {{-- each bar --}}
                                    <div class="graph-info-item">
                                        {{-- title of the item --}}
                                        <p class="graph-info-title">Value 1</p>
                                        {{-- horizontal bar with value --}}
                                        <div class="graph-info-bar">
                                            <p class="graph-info-value">12345</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        !-->

        </div>








        {{-- graph section (middle) --}}
        <div class="mid-graphs">
            {{-- timeline graph --}}
            <div class="graph timeline"></div>
        </div>




    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/graphs.js') }}"></script>
@endsection
