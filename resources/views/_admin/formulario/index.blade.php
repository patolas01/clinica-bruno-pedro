@extends ("layouts.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Formulários</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ route('_admin.formulario.create') }}">
                    <i class="fas fa-plus"></i> Novo Formulário
                </a>
            </div>
            <div class="card-body">
                @if ($formularios !== null && count($formularios))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Contacto</th>
                                    <th>Especialidade</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formularios as $formulario)
                                    <tr>
                                        <td>{{ $formulario->id }}</td>
                                        <td>{{ $formulario->nome }}</td>
                                        <td>{{ $formulario->email }}</td>
                                        <td>{{ $formulario->contacto }}</td>
                                        <td>{{ $formulario->especialidade_id }}</td>
                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p"
                                                href="{{ route('formularios.show', $formulario) }}"><i
                                                    class="fas fa-eye fa-xs"></i></a>
                                            <a class="btn btn-xs btn-warning btn-p"
                                                href="{{ route('formularios.edit', $formulario) }}"><i
                                                    class="fas fa-pen fa-xs"></i></a>
                                            <form method="POST"
                                                action="{{ route('formularios.destroy', $formulario) }}" role="form"
                                                class="inline"
                                                onsubmit="return confirm('Confirma que pretende eliminar este formulário?');">
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
                    <h6>Não existem formulários registados</h6>
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
                null,
                null,
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
