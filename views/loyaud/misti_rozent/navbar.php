 <!--**********************************
            Nav header start
        ***********************************-->
<div class="nav-header">
    <a href="template.php" class="brand-logo">
        <img class="logo-abbr" src="images/logo-misti.png" alt="">
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
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                    style="margin-bottom: -10px;">
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <div class="pulse-css" style="display: none;"></div>
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
                                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
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
                                <span class="ml-2">Perfil </span>
                            </a>
                            <a href="./email-inbox.html" class="dropdown-item">
                                <i class="icon-envelope-open"></i>
                                <span class="ml-2">Mensajes</span>
                            </a>
                            <a href="salir" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Cerrar Session</span>
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
                    <li><a href="./template.php"><i class="icon icon-chart-bar-33"></i>INICIO</a></li>
                </ul>
            </li>
            <li class="nav-label">ACCIONES</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-note"></i><span
                        class="nav-text">CLIENTES</span></a>
                <ul aria-expanded="false">
                    <!--<li><a href="./app-profile.html"><i class="icon-user-female"></i>REGISTRAR</a></li>-->
                    <li><a href="clientes"><i class="icon-book-open"></i>MOSTRAR</a></li>
                    <!--<li><a href="./index"><i class="icon-doc"></i>REPORTE</a></li>-->
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-cart-simple"></i><span class="nav-text">VENTAS</span></a>
                <ul aria-expanded="false">
                    <li><a href="venta"><i class="icon icon-window-add"></i> NUEVA VENTA</a></li>
                    <li><a href="./chart-chartjs.html"><i class="icon icon-settings-gear-64"></i>CONFIGURAR</a></li>
                    <li><a href="./chart-morris.html"><i class="icon-book-open"></i>MOSTRAR VENTAS</a></li>
                    <li><a href="./chart-chartjs.html"><i class="icon-doc"></i>REPORTE</a></li>
                </ul>
            </li>
            <li class="nav-label">ADMINISTRACIÓN</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-user"></i><span
                        class="nav-text">USUARIOS</span></a>
                <ul aria-expanded="false">
                    <!--<li><a href="./ui-accordion.html">REGISTRAR USUARIO</a></li>-->
                    <li><a href="./ui-accordion.html">ROL</a></li>
                    <li><a href="usuario">MOSTRAR TODOS</a></li>
                    <li><a href="./ui-badge.html">CAJEROS</a></li>
                    <li><a href="./ui-button.html">VENTAS POR CAJA</a></li>

                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-list"></i><span
                        class="nav-text">PRODUCTOS</span></a>
                <ul aria-expanded="false">
                    <!--<li><a href="./ui-accordion.html">REGISTRAR PRODUCTO</a></li>-->
                    <li><a href="./ui-alert.html">MOSTRAR TODOS</a></li>
                    <li><a href="./ui-badge.html">TIPO DE PRODUCTO</a></li>
                    <!--<li><a href="./ui-button.html">STOCKS PRODUCTOS</a></li>-->

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

