@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>


        <div class="card shadow mb-4">
            <div class="card-header pt-4">
                <form method="GET" action="{{ route('admin.users.index') }}" class="form-group form-inline"
                    style="width: 100%">
                    <div class="form-group col-3">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control mx-2" name="name" id="inputName"
                            value="{{ request()->get('name') }}" />
                    </div>
                    <div class="form-group col-3">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control mx-2" name="email" id="inputEmail"
                            placeholder="Email address" value="{{ request()->get('email') }}" />
                    </div>
                    <div class="form-group col-3">
                        <label for="inputRole">Role</label>
                        <select name="role" id="inputRole" class="form-control mx-2">
                            <option value="">All</option>
                            <option value="A" {{ request()->get('role') == 'A' ? 'selected' : '' }}>Admin</option>
                            <option value="N" {{ request()->get('role') == 'N' ? 'selected' : '' }}>Normal</option>
                        </select>
                    </div>

                    <div class="form-group col-3">
                        <button type="submit" class="btn btn-success">Search</button>
                        &nbsp;

                        @can('create', App\Models\User::class)
                            <a class="btn btn-primary" href="{{ route('admin.users.create') }}">
                                <i class="fas fa-plus"></i> Add User
                            </a>
                            {{--  @else
                            <span class="btn btn-secondary disabled"> Add User
                            </span> --}}
                        @endcan
                </form>
            </div>
            <div class="card-body p-5">
                <div class="row">
                    @if (count($users))
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>img</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                @if ($user->img)
                                                    <img src="{{ asset('storage/users_fotos/' . $user->img) }}"
                                                        class="img-post" alt="User photo" height="80">
                                                @else
                                                    <img src="{{ asset('img/default_user.jpg') }}" class="img-post"
                                                        alt="User photo">
                                                @endif
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->roleToStr() }}</td>
                                            <td nowrap>
                                                <a class="btn btn-xs btn-primary btn-p"
                                                    href="{{ route('admin.users.show', $user) }}"><i
                                                        class="fas fa-eye fa-xs"></i></a>
                                                @can('update', $user)
                                                    <a class="btn btn-xs btn-warning btn-p"
                                                        href="{{ route('admin.users.edit', $user) }}">
                                                        <i class="fas fa-pen fa-xs"></i>
                                                    </a>
                                                @else
                                                    <span class="btn btn-xs btn-secondary btn-p disabled">
                                                        <i class="fas fa-pen fa-xs"></i>
                                                    </span>
                                                @endcan
                                                @can('delete', $user)
                                                    <form method="POST" action="{{ route('admin.users.destroy', $user) }}"
                                                        role="form" class="inline"
                                                        onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-xs btn-danger btn-p"><i
                                                                class="fas fa-trash fa-xs"></i></button>
                                                    </form>
                                                @else
                                                    <span class="btn btn-xs btn-secondary btn-p disabled">
                                                        <i class="fas fas fa-trash fa-xs"></i>
                                                    </span>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h6>Não existem utilizadores registados.</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@section('moreScripts')
    <script>
        $('#dataTable').dataTable({
            destroy: true,
            "bFilter": false,
            "order": [
                [1, 'asc']
            ],
            "columns": [{
                    "orderable": false
                },
                null,
                null,
                null,
                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
