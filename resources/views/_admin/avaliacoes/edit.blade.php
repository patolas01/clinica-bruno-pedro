@extends('layouts.admin')

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Avaliação
        </div>
        <div class="card-body">

			<form method="POST" action="{{route('admin.avaliacoes.update', $avaliaco)}}" class="form-group" enctype="multipart/form-data">
                @csrf
                @method('PUT')
				@include('_admin.avaliacoes.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('admin.avaliacoes.index')}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection
