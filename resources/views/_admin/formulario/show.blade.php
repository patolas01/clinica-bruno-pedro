@extends('layouts.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Formulário
		</div>
		<div class="card-body">
            <div><strong>Contacto:</strong> {{$formulario->contacto}}</div>
			<div><strong>Nome:</strong> {{$formulario->nome}}</div>
			<div><strong>Email:</strong> {{$formulario->email}}</div>
			<div><strong>Especialidade:</strong> {{$formulario->especialidade}}</div>
		</div>
	</div>
</div>
@endsection
