<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>AL PIE DEL MISTI</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href=" ">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    



</head>

<body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div id="main-wrapper">

        <!--**********************************
           Support ticket button start
        ***********************************-->
        <?php

        if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

            //echo '<div class="wrapper">';
        
            /*=============================================
            CABEZOTE - MENU
            =============================================*/

            include "views/loyaud/misti_rozent/navbar.php";

            /*=============================================
            
            =============================================*/
            /*=============================================
            CONTENIDO
            =============================================*/

            if (isset($_GET["ruta"])) {

                if (
                    $_GET["ruta"] == "inicio" ||
                    $_GET["ruta"] == "usuario" ||
                    $_GET["ruta"] == "categorias" ||
                    $_GET["ruta"] == "productos" ||
                    $_GET["ruta"] == "clientes" ||
                    $_GET["ruta"] == "venta" ||
                    $_GET["ruta"] == "crear-venta" ||
                    $_GET["ruta"] == "editar-venta" ||
                    $_GET["ruta"] == "reportes" ||
                    $_GET["ruta"] == "salir"
                ) {

                    include "views/" . $_GET["ruta"] . "/" . $_GET["ruta"] . ".php";

                } else {

                    include "modulos/404.php";

                }

            } else {

                include "views/clientes/Clientes.php";

            }

            /*=============================================
            FOOTER
            =============================================*/

            include "views/loyaud/misti_rozent/footer.php";

            //echo '</div>';
        
        } else {

            include "views/login/login.php";

        }

        ?>
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
    <script src="vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="js/custom.min.js"></script>

    <script src="vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>

    <!-- Vectormap -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morris/morris.min.js"></script>


    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="vendor/flot/jquery.flot.js"></script>
    <script src="vendor/flot/jquery.flot.resize.js"></script>

    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    <!-- Owl Carousel -->
    <script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Form step init -->
    <script src="js/plugins-init/jquery-steps-init.js"></script>

    
    <script src="views/login/js/login.js"></script>
    <script src="views/venta/js/multiStepForm.js"></script>
    <script src="views/venta/js/venta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="js/sweetalert2/sweetalert2.all.js"></script>
    
</body>

</html>