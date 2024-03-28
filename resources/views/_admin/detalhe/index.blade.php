@extends ("layouts.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detalhes da Especialidade</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ route('detalhes.create') }}">
                    <i class="fas fa-plus"></i> Novo detalhe Especialidade
                </a>

            </div>
            <div class="card-body">
                @if ($detalhes !== null && count($detalhes))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Descrição</th>
                                    <th>Especialidade ID</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($detalhes as $detalhe)
                                    <tr>
                                        <td> <img height='100' src="{{ asset('storage/detalheesp_imagens/' . $detalhe->imagem) }}" alt="Imagem do Post"></td>
                                        <td>{{$detalhe->descriçao}}</td>
                                        <td>{{ $detalhe->especialidades->id ?? 'N/A' }}</td>

                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p" href="{{route('detalhes.show',$detalhe)}}"><i class="fas fa-eye fa-xs"></i></a>
                                            <a class="btn btn-xs btn-warning btn-p" href="{{route('detalhes.edit',$detalhe)}}"><i class="fas fa-pen fa-xs"></i></a>
                                            <form method="POST" action="{{route('detalhes.destroy',$detalhe)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar esta especialidade?');">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-xs btn-danger btn-p"> <i class="fas fa-trash fa-xs"> </i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <h6>Não existem detalhes registados</h6>
                    @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#dataTable').dataTable({
            destroy: true,
            "order": [
                [0, 'asc']
            ],
            "columns": [
                {
                    "orderable": false
                },
                null,
                null,

                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
