<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ROL-Al pie del misti</title>
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
        <div class="content-body" style="min-height: 500px;">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>ROL</h4>
                            <span class="ml-1">Registro de roles activos</span>
                        </div>
                    </div>

                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-5 col-xl-4 col-xxl-5 col-md-5">
                        <div class="card">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form action="index.html">
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label><strong>Nombre del rol:</strong></label>
                                                <input type="text" class="form-control"
                                                    placeholder="Ejemplo: Administrado">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label><strong>Estado</strong></label>
                                                <select class="form-control" name="" id="">
                                                    <option value="1">Activo</option>
                                                    <option value="0">Inactivo</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="d-flex justify-content-between bd-highlight mb-2 mt-4">
                                                    <div><button type="button" class="btn btn-danger"
                                                        style="color: black; width: 150px; display: none;" data-dismiss="modal">Cancelar</button></div>
                                                    <div><button type="submit" class="btn btn-primary"
                                                            style="color: black; width: 150px; float: right;">Guardar</button></div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-4 col-xxl-7 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 500px;">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Estado</th>
                                                <th>Fecha</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #454545;">
                                            <tr>
                                                <td>Administrador</td>
                                                <td><span class="badge badge-success">Activo</span></td>
                                                <td>15/02/2023</td>
                                                <td>
                                                    <button class="btn btn-primary ti-pencil"></button>
                                                    <button class="btn btn-danger ti-trash"></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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