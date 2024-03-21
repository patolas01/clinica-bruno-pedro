@extends('layouts.admin')

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Detalhe da especialidade
        </div>
        <div class="card-body">

			<form method="POST" action="{{route('detalhe-esp.update', $tipopost)}}" class="form-group">
                @csrf
                @method('PUT')
				@include('_admin.detalhe-esp.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('detalhe-esp.index')}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection
