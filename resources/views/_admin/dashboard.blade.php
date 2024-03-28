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
                    @php
                        $colors = ['#e9724d', '#d6d727', '	#92cad1', '#79ccb3', '	#868686'];
                        $colorIndex = 0; // Initialize color index
                    @endphp
                    {{-- iterate over the data --}}
                    @foreach ($formularioData as $especialidadeId => $total)
                        {{-- get the nome of especialidade --}}
                        @php
                            $especialidadeNome = $especialidades[$especialidadeId];
                            // Calculate percentage
                            $percentage = ($total / $formularioData->sum()) * 100;
                        @endphp
                        {{-- each bar --}}
                        <div class="graph-info-item">
                            {{-- title of the item --}}
                            <p class="graph-info-title">{{ $especialidadeNome }}</p>
                            {{-- horizontal bar with value --}}
                            <div class="graph-info-bar"
                                style="width: {{ $percentage }}%; background-color: {{ $colors[$colorIndex % count($colors)] }};">
                                <p class="graph-info-value">{{ $total }}</p>
                            </div>
                        </div>
                        {{-- increment color index --}}
                        @php
                            $colorIndex++;
                        @endphp
                    @endforeach
                </div>
            </div>


            {{-- each graph --}}
            <div class="graph bar">
                {{-- main title --}}
                <h3 class="graph-title">Avaliações</h3>
                {{-- bars section --}}
                <div class="graph-info">
                    @php
                        $colors = ['#e9724d', '#d6d727', '	#92cad1', '#79ccb3', '	#868686'];
                        $colorIndex = 0; // Initialize color index
                    @endphp
                    {{-- iterate over the data --}}
                    @foreach ($avaliacaoData as $classificacao => $total)
                        {{-- each bar --}}
                        <div class="graph-info-item">
                            {{-- title of the item --}}
                            <p class="graph-info-title">
                                @for ($i = 0; $i < $classificacao; $i++)
                                    ⭐
                                @endfor
                            </p>
                            {{-- horizontal bar with value --}}
                            <div class="graph-info-bar"
                                style="width: {{ ($total / $avaliacaoData->sum()) * 100 }}%; background-color: {{ $colors[$colorIndex % count($colors)] }};">
                                <p class="graph-info-value">{{ $total }}</p>
                            </div>
                        </div>
                        {{-- increment color index --}}
                        @php
                            $colorIndex++;
                        @endphp
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
