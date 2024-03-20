@extends('layouts.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação da Avaliação
		</div>

		<div class="card-body">

			<div><strong>Classificação: </strong>{{$avaliacoes->classificacao}}</div>
			<div><strong>Comentário: </strong>{!! $avaliacoes->texto !!}</div>
			</div>
			<a href="{{route('avaliacoes.index')}}" class="btn btn-default">Voltar</a>
		</div>
	</div>
</div>
@endsection
