@extends ("layouts.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tipo de Post</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('detalhe-esp.create')}}">
        <i class="fas fa-plus"></i> Novo Tipo de Post
      </a>
    </div>
    <div class="card-body">
      @if ($detalhes_esps !== null && count($detalhes_esps))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>Imagem</th>
            <th>Descrição</th>
            <th>Id</th>
            <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($detalhes_esps as  $detalhe_esp)
            <tr>
                <td> <img height='100' src="{{ asset('storage/detalheesp_imagens/' . $detalhe_esp->imagem) }}" alt="Imagem do Post"></td>
                <td>{{ $detalhe_esp->descriçao}}</td>
                <td>{{ $detalhe_esp->especialidade->id }}</td>
              <td nowrap>
                    <a class="btn btn-xs btn-primary btn-p" href="{{route('detalhe-esp.show', $detalhe_esp)}}"><i class="fas fa-eye fa-xs"></i></a>
                    <a class="btn btn-xs btn-warning btn-p" href="{{route('detalhe-esp.edit', $detalhe_esp)}}"><i class="fas fa-pen fa-xs"></i></a>
                    <form method="POST" action="{{route('detalhe-esp.destroy', $detalhe_esp)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este detalhe da especilidade?');">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-xs btn-danger btn-p">
                    <i class="fas fa-trash fa-xs"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @else
      <h6>Não detalhes de modalidades registados</h6>
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
      {
        "orderable": false
      }
    ]
  });
    </script>
@endsection
