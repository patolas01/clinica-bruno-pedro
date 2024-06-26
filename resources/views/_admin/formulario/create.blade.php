@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Novo Formulário
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.formularios.store') }}" class="form-group" enctype="multipart/form-data">
                    @csrf

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
                            @foreach ($especialidades as $especialidade)
                                <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                 

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                        <a href="{{ route('admin.formularios.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
