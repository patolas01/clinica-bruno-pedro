@extends('layouts.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Novo Detalhe da especialidade
		</div>
		<div class="card-body">

			<form method="POST" action="{{ route('detalhes-esp.store') }}" class="form-group">
				@csrf
				@include('_admin.detalhe-esp.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Salvar</button>
					<a href="{{ route('detalhes-esp.index') }}" class="btn btndefault">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
