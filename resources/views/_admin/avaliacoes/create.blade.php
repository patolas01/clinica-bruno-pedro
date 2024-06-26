@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            Nova Avaliação
        </div>
        <div class="card-body">

            <form method="POST" action="{{ route('admin.avaliacoes.store') }}" class="form" enctype="multipart/form-data">
                @csrf
                @include('_admin.avaliacoes.partials.add-edit')
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Salvar</button>
                    <a href="{{ route('admin.avaliacoes.index') }}" class="btn btn-default">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
