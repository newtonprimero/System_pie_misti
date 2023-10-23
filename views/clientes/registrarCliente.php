<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="./../../vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./../../css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="./../loyaud/misti_rozent/template.php" class="brand-logo">
                <img class="logo-abbr" src="./../../images/logo-misti.png" alt="">
                <span class="logo-compact" style="margin-left: 15px;">AL PIE DEL MISTI</span>
                <span class="brand-title" style="margin-left: 15px;">AL PIE DEL MISTI</span>
                <!--<img class="logo-abbr" src="./../../../images/logo.png" alt="">
                <img class="logo-compact" src="./../../../images/logo-text.png" alt="">
                <img class="brand-title" src="./../../../images/logo-text.png" alt="">-->
            </a>

            <div class="nav-control">
                <div class="hamburger" style="margin-bottom: 15px;">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search" style="margin-bottom: -10px;">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as
                                                        unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">MENU PRINCIPAL</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-home-minimal"></i><span class="nav-text">HOME</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./../loyaud/misti_rozent/template.php"><i
                                        class="icon icon-chart-bar-33"></i>INICIO</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">ACCIONES</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon-note"></i><span class="nav-text">CLIENTES</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html"><i class="icon-user-female"></i>REGISTRAR</a></li>
                            <li><a href="./app-calender.html"><i class="icon-book-open"></i>MOSTRAR</a></li>
                            <li><a href="#"><i class="icon-doc"></i>REPORTE</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-cart-simple"></i><span class="nav-text">VENTAS</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html"><i class="icon icon-window-add"></i> NUEVA VENTA</a></li>
                            <li><a href="./chart-chartjs.html"><i class="icon icon-settings-gear-64"></i>CONFIGURAR</a>
                            </li>
                            <li><a href="./chart-morris.html"><i class="icon-book-open"></i>MOSTRAR VENTAS</a></li>
                            <li><a href="./chart-chartjs.html"><i class="icon-doc"></i>REPORTE</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">ADMINISTRACIÓN</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon-user"></i><span class="nav-text">USUARIOS</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">REGISTRAR USUARIO</a></li>
                            <li><a href="./ui-accordion.html">ROL</a></li>
                            <li><a href="./ui-alert.html">MOSTRAR TODOS</a></li>
                            <li><a href="./ui-badge.html">CAJEROS</a></li>
                            <li><a href="./ui-button.html">VENTAS POR CAJA</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-list"></i><span
                                class="nav-text">PRODUCTOS</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">REGISTRAR PRODUCTO</a></li>
                            <li><a href="./ui-alert.html">MOSTRAR TODOS</a></li>
                            <li><a href="./ui-badge.html">TIPO DE PRODUCTO</a></li>
                            <li><a href="./ui-button.html">STOCKS PRODUCTOS</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-list"></i><span
                                class="nav-text">ALMACEN</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">NUEVO PRODUCTO ALMACEN</a></li>
                            <li><a href="./ui-alert.html">MOSTRAR TODOS</a></li>

                        </ul>
                    </li>
                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>CLIENTES</h4>
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>

                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <button type="button" data-toggle="modal" data-target="#modalGrid"
                            class="btn btn-outline-primary">Nuevo Cliente</button>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Registrar Cliente</h4>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12" style="display: flex; justify-content: center;">
                                    <div class="col-xl-8">
                                        <div class="auth-form">
                                            <h4 class="text-center mb-4">Sign up your account</h4>
                                            <form action="index.html">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Nombres</strong></label>
                                                        <input type="text" class="form-control" placeholder="Nombres">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Apellidos</strong></label>
                                                        <input type="text" class="form-control" placeholder="Apellidos">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label><strong>Tipo de deocumento</strong></label>
                                                        <select class="form-control" name="" id="">
                                                            <option value="">DNI</option>
                                                            <option value="">Pasaporte</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <label><strong>NRO Documento</strong></label>
                                                        <input type="text" class="form-control" placeholder="nro">
                                                    </div>
                                                    <hr style="height: 10%;">
                                                    <div class="form-group col-sm-6">
                                                        <label><strong>Ciudad</strong></label>
                                                        <select class="form-control" name="" id="">
                                                            <option value="">Arequipa</option>
                                                            <option value="">Cayma</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label><strong>Distrito</strong></label>
                                                        <select class="form-control" name="" id="">
                                                            <option value="">Alto Selva Alegre</option>
                                                            <option value="">Cayma</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label><strong>Direccion</strong></label>
                                                        <input type="text" class="form-control" placeholder="Direccion">
                                                        <hr>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-4">
                                                        <label><strong>Telefono</strong></label>
                                                        <input type="text" class="form-control" placeholder="Telefono">
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <label><strong>Email</strong></label>
                                                        <input type="email" class="form-control"
                                                            placeholder="hello@example.com">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="d-flex justify-content-between bd-highlight mb-2 mt-4">
                                                            <button type="submit" class="btn btn-danger"
                                                                style="color: black; width: 150px;">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                style="color: black; width: 150px;">Guardar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modalGrid">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-4">.col-md-4</div>
                                                        <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                                                        <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-9">Level 1: .col-sm-9
                                                            <div class="row">
                                                                <div class="col-8 col-sm-6">Level 2: .col-8 .col-sm-6
                                                                </div>
                                                                <div class="col-4 col-sm-6">Level 2: .col-4 .col-sm-6
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./../../vendor/global/global.min.js"></script>
    <script src="./../../js/quixnav-init.js"></script>
    <script src="./../../js/custom.min.js"></script>



    <!-- Datatable -->
    <script src="./../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./../../js/plugins-init/datatables.init.js"></script>

</body>

</html>