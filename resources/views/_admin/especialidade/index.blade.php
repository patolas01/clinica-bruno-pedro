@extends ("layouts.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Especialidade</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ route('especialidades.create') }}">
                    <i class="fas fa-plus"></i> Nova Especialidade
                </a>
                <a class="btn btn-primary" href="">
                    <i class="fas fa-plus"></i> Novo detalhe especialidade
                </a>
            </div>
            <div class="card-body">
                @if ($especialidades !== null && count($especialidades))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                    <th>Nome</th>
                                    <th>Curta_Desc</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($especialidades as $especialidade)
                                    <tr>
                                        <td> <img height='100' src="{{ asset('storage/especialidade_imagens/' . $especialidade->icon) }}" alt="Imagem do Post"></td>
                                        <td>{{$especialidade->nome}}</td>
                                        <td>{{$especialidade->curta_desc}}</td>
                                      
                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p" href="{{route('especialidades.show',$especialidade)}}"><i class="fas fa-eye fa-xs"></i></a>
                                            <a class="btn btn-xs btn-warning btn-p" href="{{route('especialidades.edit',$especialidade)}}"><i class="fas fa-pen fa-xs"></i></a>
                                            <form method="POST" action="{{route('especialidades.destroy',$especialidade)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar esta especialidade?');">
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
                    <h6>Não existem especialidades registados</h6>
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
                [1, 'asc']
            ],
            "columns": [
                {
                    "orderable": false
                },
                null,
                null,
                null,
                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
