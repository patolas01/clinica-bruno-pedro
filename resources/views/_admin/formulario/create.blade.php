@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            Novo Formulário
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('_admin.formulario.store') }}" class="form-group" enctype="multipart/form-data">
                @csrf
                <!-- Adicione aqui os campos do formulário -->
                <div class="form-group">
                    <label for="contacto">Contacto:</label>
                    <input type="text" name="contacto" class="form-control" id="contacto">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="especialidade_id">Especialidade:</label>
                    <select name="especialidade_id" class="form-control" id="especialidade_id">
                        <!-- Preencha esta opção com as especialidades disponíveis -->
                    </select>
                </div>
                <!-- Adicione os outros campos conforme necessário -->

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                    <a href="{{ route('_admin.formulario.index') }}" class="btn btn-default">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
