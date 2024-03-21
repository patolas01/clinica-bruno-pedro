@extends ("layouts.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Avaliações</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('avaliacoes.create')}}">
        <i class="fas fa-plus"></i>Nova Avaliação
      </a>
    </div>
    <div class="card-body">
      @if (count($avaliacoes))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Classificação</th>
              <th>Comentário</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($avaliacoes as $avaliaco)
            <tr>
              <td>{{$avaliaco->classificacao}}</td>
              <td>{{$avaliaco->texto}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('avaliacoes.show',$avaliaco)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('avaliacoes.edit',$avaliaco)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('avaliacoes.destroy',$avaliaco)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar esta avaliação?');">
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
      <h6>Não existem avaliações registadas</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@section("scripts")

<script>
  $('#dataTable').dataTable({
    destroy: true,
    "order": [
      [0, 'asc']
    ],
    "columns": [
      null,
      null,
      {
        "orderable": false
      }
    ]
  });
</script>
@endsection
