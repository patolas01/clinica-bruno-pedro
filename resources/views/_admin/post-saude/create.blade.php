@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Novo Post Saúde
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('_admin.post-saude.store') }}" class="form-group"
                    enctype="multipart/form-data">
                    @csrf
                    @include('_admin.post-saude.partials.add-edit')
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="ok">Salvar</button>
                        <a href="{{ route('_admin.post-saude.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
