<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <title>Dashboard - PulseHub</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel=" stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

            <ul class="navbar-nav dark sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                    <img src="{{ asset('img/Logo-PulseHub-Branco.png') }}" alt="" class="img-fluid">
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">



                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
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
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
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
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                        data-target="#collapseModalidades" aria-expanded="true" aria-controls="collapseModalidades">
                        <i class="fas fa-running"></i>
                        <span>Modalidades</span>
                    </a>
                    <div id="collapseModalidades" class="collapse" aria-labelledby="headingModalidades"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Nova Modalidade</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                        data-target="#collapseEventos" aria-expanded="true" aria-controls="collapseEventos">
                        <i class="fas fa-bell"></i>
                        <span>Eventos</span>
                    </a>
                    <div id="collapseEventos" class="collapse" aria-labelledby="headingEventos"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Novo Evento</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                        data-target="#collapseServicos" aria-expanded="true" aria-controls="collapseServicos">
                        <i class="fas fa-lightbulb"></i>
                        <span>Serviços</span>
                    </a>
                    <div id="collapseServicos" class="collapse" aria-labelledby="headingServicos"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Novo Serviço</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                        data-target="#collapsePlanos" aria-expanded="true" aria-controls="collapsePlanos">
                        <i class="fas fa-hourglass"></i>
                        <span>Planos</span>
                    </a>
                    <div id="collapsePlanos" class="collapse" aria-labelledby="headingPlanos"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Novo Plano</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
                        aria-expanded="true" aria-controls="collapseBlog">
                        <i class="fas fa-pencil-alt"></i>
                        <span>Blog</span>
                    </a>
                    <div id="collapseBlog" class="collapse" aria-labelledby="headingBlog"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Novo Post</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStaff"
                        aria-expanded="true" aria-controls="collapseStaff">
                        <i class="fas fa-hard-hat"></i>
                        <span>Staff</span>
                    </a>
                    <div id="collapseStaff" class="collapse" aria-labelledby="headingStaff"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="">Listagem</a>
                            <a class="collapse-item" href="">Novo Staff</a>
                        </div>
                    </div>
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

                    <!-- Topbar Navbar -->
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

                    </ul>

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
                        <span>Copyright &copy; PulseHub</span>
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
