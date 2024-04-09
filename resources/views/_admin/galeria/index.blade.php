@extends ("layouts.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Galeria</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ route('admin.galeria.create') }}">
                    <i class="fas fa-plus"></i> Nova Imagem da Galeria
                </a>
            </div>
            <div class="card-body">
                @if ($galerias !== null && count($galerias))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Nome</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($galerias as $galeria)
                                    <tr>
                                        <td> <img height='100' src="{{ asset('storage/galeria_imagens/' . $galeria->icon) }}" alt="Imagem do Post"></td>
                                        <td>{{$galeria->nome}}</td>
                                        <td>{{$galeria->curta_desc}}</td>

                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.galeria.show',$galeria)}}"><i class="fas fa-eye fa-xs"></i></a>
                                            <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.galeria.edit',$galeria)}}"><i class="fas fa-pen fa-xs"></i></a>
                                            <form method="POST" action="{{route('admin.galeria.destroy',$galeria)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar esta galeria?');">
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
                    <h6>Não existem galeria registados</h6>
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
