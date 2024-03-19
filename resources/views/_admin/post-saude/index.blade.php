@extends ("layouts.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Posts Saúde</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ route('_admin.post-saude.create') }}">
                    <i class="fas fa-plus"></i> Novo Post Saúde
                </a>
            </div>
            <div class="card-body">
                @if ($posts_saude->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($postsSaude as $postSaude)
                                    <tr>
                                        <td>{{ $postSaude->id }}</td>
                                        <td>{{ $postSaude->nome }}</td>
                                        <td>{{ $postSaude->descricao }}</td>
                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p"
                                                href="{{ route('_admin.post-saude.show', $postSaude) }}"><i
                                                    class="fas fa-eye fa-xs"></i></a>
                                            <a class="btn btn-xs btn-warning btn-p"
                                                href="{{ route('_admin.post-saude.edit', $postSaude) }}"><i
                                                    class="fas fa-pen fa-xs"></i></a>
                                            <form method="POST"
                                                action="{{ route('_admin.post-saude.destroy', $postSaude) }}" role="form"
                                                class="inline"
                                                onsubmit="return confirm('Confirma que pretende eliminar este post de saúde?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger btn-p"><i
                                                        class="fas fa-trash fa-xs"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <h6>Não existem posts de saúde registados</h6>
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
            "columns": [{
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
