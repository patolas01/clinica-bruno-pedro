<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <title>Dashboard - Clínica Dentária Bruno & Pedro</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel=" stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    @yield('moreCSS')
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <ul class="navbar-nav dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
                <img src="{{ asset('img/Logo BrunoPedro.png') }}" alt="" class="img-fluid">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
                        aria-expanded="true" aria-controls="collapseUsers">
                        <i class="fas fa-users"></i>
                        <span>Utilizadores</span>
                    </a>
                    <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">

                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Novo Utilizador</a>
                        </div>
                    </div>
                </li> --}}
            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts"
                        aria-expanded="true" aria-controls="collapsePosts">
                        <i class="fas fa-fw fa-list"></i>
                        <span>Tipos</span>
                    </a>
                    <div id="collapsePosts" class="collapse" aria-labelledby="headingPosts"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">Tipo Eventos/Mod:</h6>
                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Novo Tipo
                                Event/Mod</a>
                            <h6 class="collapse-header">Tipo Post:</h6>
                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Novo Tipo Post</a>
                            <h6 class="collapse-header">Tipo Planos:</h6>
                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Novo Tipo
                                Planos</a>
                        </div>
                    </div>
                </li> --}}

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAvaliacoes"
                    aria-expanded="true" aria-controls="collapseAvaliacoes">
                    <i class="fas fa-pencil-alt"></i>
                    <span>Avaliações</span>
                </a>
                <div id="collapseAvaliacoes" class="collapse" aria-labelledby="headingAvaliacoes"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('avaliacoes.index') }}">Listagem</a>
                        <a class="collapse-item" href="{{ route('avaliacoes.create') }}">Nova Avaliação</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseEspecialidades" aria-expanded="true" aria-controls="collapseEspecialidades">
                    <i class="fas fa-tag"></i>
                    <span>Especialidades</span>
                </a>
                <div id="collapseEspecialidades" class="collapse" aria-labelledby="headingEspecialidades"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('especialidades.index') }}">Listagem</a>
                        <a class="collapse-item" href="{{ route('especialidades.create') }}">Nova Especialidade</a>
                    </div>
                </div>
            </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                        data-target="#collapseDetalhesEspecialidade" aria-expanded="true" aria-controls="collapseDetalhesEspecialidade">
                        <i class="fas fa-asterisk"></i>
                        <span>Detalhes Especialidade</span>
                    </a>
                    <div id="collapseDetalhesEspecialidade" class="collapse" aria-labelledby="headingDetalhes Especialidade"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('detalhes.index') }}">Listagem</a>
                            <a class="collapse-item" href="{{ route('detalhes.create') }}">Novo Detalhes Esp.</a>
                        </div>
                    </div>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('formularios.index') }}" data-toggle="collapse"
                        data-target="#collapseFormulário" aria-expanded="true" aria-controls="collapseFormulário">
                        <i class="fas fa-fw fa-list-ul"></i>
                        <span>Formulário</span>
                    </a>
                    <div id="collapseFormulário" class="collapse" aria-labelledby="headingFormulário"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('formularios.index') }}">Listagem</a>
                            <a class="collapse-item" href="{{ route('formularios.create') }}">Novo Formulário</a>
                        </div>
                    </div>
                </li> --}}

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('posts-saude.index') }}" data-toggle="collapse"
                    data-target="#collapseGuiaSaude" aria-expanded="true" aria-controls="collapseGuiaSaude">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Guia Saúde</span>
                </a>
                <div id="collapseGuiaSaude" class="collapse" aria-labelledby="headingGuiaSaude"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('posts-saude.index') }}">Listagem</a>
                        <a class="collapse-item" href="{{ route('posts-saude.create') }}">Nova Publicação</a>
                    </div>
                </div>
            </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGaleria"
                        aria-expanded="true" aria-controls="collapseGaleria">
                        <i class="fas fa-image"></i>
                        <span>Galeria</span>
                    </a>
                    <div id="collapseGaleria" class="collapse" aria-labelledby="headingGaleria"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="">Listagem de Fotos </a>
                            <a class="collapse-item" href="">Adicionar Foto</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('formularios.index') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i> <span>Formulário</span></a>
                    {{-- <a href="{{ route('formularios.index') }}" data-toggle="collapse"
                        data-target="#collapseFormulário" aria-expanded="true" aria-controls="collapseFormulário">
                        <i class="fas fa-fw fa-list-ul"></i>
                        <span>Formulário</span>
                    </a>
                    <div id="collapseFormulário" class="collapse" aria-labelledby="headingFormulário"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('formularios.index') }}">Listagem</a>
                            <a class="collapse-item" href="{{ route('formularios.create') }}">Novo Formulário</a>
                        </div>
                    </div> --}}
                </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-nav dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    {{-- <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-200 small">

                                    </span>

                                        <img class="img-profile rounded-circle" alt="User Photo"
                                            src="{{ asset('storage/users_fotos/' ) }}">

                                        <img class="img-profile rounded-circle" alt="User Photo"
                                            src="{{ asset('storage/users_fotos/' ) }}">

                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Perfil
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>

                                <a href="">
                                    <span
                                        class="mr-2 d-none d-lg-inline
                                text-gray-200 small">Login</span>
                                </a>

                        </li>

                    </ul> --}}

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">

                </div>

                <!-- Begin Page Content -->
                @yield('content')


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © 2024 Clínica Dentária Bruno & Pedro, lda. Todos os direitos reservados.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->




    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('vendor/jquery/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    @yield('scripts')

</body>

</html>
