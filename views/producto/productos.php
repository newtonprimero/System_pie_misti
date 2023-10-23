<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PRODUCTOS - PDM</title>
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
                            <h4>PRODUCTO</h4>
                            <span class="ml-1">Registro de productos</span>
                        </div>
                    </div>

                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <button type="button" data-toggle="modal" data-target="#modalGrid"
                            class="btn btn-outline-primary">Nuevo Producto</button>
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
                            </div>
                            <div>
                                <h5 class="col-md-12" style="margin-left: 5%; text-align: center;">Flitros</h5>
                                <div class="col-md-12" style="display: flex; justify-content: center;">
                                    <div class="col-md-3">
                                        <label for="">Fecha inicio:</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Fecha Fecha Fin:</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Nombre:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Tipo:</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">Jugo</option>
                                            <option value="">Sandwich</option>
                                            <option value="">Desayuno</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-primary"
                                            style="margin-top:28px; width: 110%;">Filtrar</button>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #454545;">
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal fade" id="modalGrid">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Nuevo Producto</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <form action="index.html">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label><strong>Nombres</strong></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Nombres">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label><strong>Descripción</strong></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Descripción">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label><strong>Tipo</strong></label>
                                                                <select class="form-control" name="" id="">
                                                                    <option value="">Jugo</option>
                                                                    <option value="">Sandwich</option>
                                                                    <option value="">Desayuno</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-8">
                                                                <label><strong>Codigo</strong></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="J-00...">
                                                            </div>
                                                            <hr style="height: 10%;">
                                                            <div class="form-group col-md-6">
                                                                <label><strong>Costo</strong></label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="0.00">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label><strong>Precio de venta</strong></label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="0.00">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label><strong>Cantidad</strong></label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="0">
                                                            </div>
                                                            <div class="form-group col-md-8">
                                                            <label><strong>Seleccione imagen</strong></label>
                                                                <input type="file" class=" form-group"
                                                                    id="">
                                                            </div>
                                                            <input type="text" class="id_usu" hidden>
                                                            <input type="text" class="id_sede" hidden>
                                                            <div class="form-group col-md-12">
                                                                <div
                                                                    class="d-flex justify-content-between bd-highlight mb-2 mt-4">
                                                                    <button type="button" class="btn btn-danger"
                                                                        style="color: black; width: 150px;"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="submit" class="btn btn-primary"
                                                                        style="color: black; width: 150px;">Guardar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!--
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>-->
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
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2022</p>
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