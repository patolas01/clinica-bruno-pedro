<!-- Custom fonts for this template -->
{{-- <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel=" stylesheet" type="text/css"> --}}
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->


<!-- Custom styles for this page -->
{{-- <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}

<nav class="barra-nav">
    <div class="container-nav">
        <a href="{{ route('index') }}">
            <div class="logo">
                <img src="{{ asset('img/Logo BrunoPedro.png') }}" alt="logo website branco">
            </div>
        </a>
        <div class="toggle_btn"><i class="fa-solid fa-bars"></i></div>
        <div class="all-list">
            <ul class="list">
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'areaClinica') active @endif"
                    href="{{ route('areaClinica') }}">Área Clínica</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'guiaSaude') active @endif"
                        href="{{ route('guiaSaude') }}">Guia Saúde</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'galeria') active @endif"
                         href="{{ route('galeria') }}">Galeria</a></li>
                         {{--
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'equipa') active @endif"
                        href="{{ route('equipa') }}">Equipa</a></li>
                        --}}
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'equipa') active @endif"
                        href="{{ route('sobre') }}">Sobre</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'contactos') active @endif"
                        href="{{ route('contactos') }}">Contactos</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'dashboard') active @endif"
                            href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </div>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class=" flex-column nav-wrapper-flex">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-nav dark topbar  static-top shadow">


                    <!-- Topbar Navbar -->
                    {{-- <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                       <li class="nav-item dropdown no-arrow">
                            @if (auth()->check())
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-200 small">
                                        @php
                                            $fullName = auth()->user()->name;
                                            $nameParts = explode(' ', $fullName);
                                            $firstName = $nameParts[0];
                                            $lastName = end($nameParts);
                                            echo $firstName . ' ' . $lastName;
                                        @endphp
                                    </span>
                                    @if (empty(auth()->user()->img))
                                        <img class="img-profile rounded-circle" alt="User Photo"
                                            src="{{ asset('storage/users_fotos/user.svg') }}">
                                    @else
                                        <img class="img-profile rounded-circle" alt="User Photo"
                                            src="{{ asset('storage/users_fotos/' . auth()->user()->img) }}">
                                    @endif
                                </a>


                                <!-- Dropdown - User Information -->

                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.users.edit', auth()->user()) }}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Perfil
                                    </a>
                                    @if (Auth::user()->perm == 'A')
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Dashboard
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="button-nav">Login</a>
                            @endif
                        </li>

                    </ul>--}}

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    @if ($errors->any())
                        @include ('layout.partials.error')
                    @endif
                    @if (!empty(session('success')))
                        @include ('layout.partials.success')
                    @endif
                </div>




            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

{{--
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terminar Sessão?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Clique no botão "Logout" se confirma que pretende terminar a sua sessão nesta
                    página.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
--}}



    <div class="dropdown_menu open">
        <div class="subnav">
            <div class="logo">
                <img src="{{ asset('img/Logo BrunoPedro.png') }}" alt="logo website branco">
            </div>
            <div class="close_btn"><i class="fa-solid fa-xmark"></i></div>
        </div>

        <ul class="list">
            <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'areaClinica') active @endif"
                href="{{ route('areaClinica') }}">Área Clínica</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'guiaSaude') active @endif"
                    href="{{ route('guiaSaude') }}">Guia Saúde</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'galeria') active @endif"
                     href="{{ route('galeria') }}">Galeria</a></li>
                     {{--
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'equipa') active @endif"
                    href="{{ route('equipa') }}">Equipa</a></li>
                    --}}
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'equipa') active @endif"
                    href="{{ route('sobre') }}">Sobre</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'contactos') active @endif"
                    href="{{ route('contactos') }}">Contactos</a></li>
        </ul>
    </div>


</nav>

@yield('scripts')
