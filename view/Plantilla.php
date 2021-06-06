<?php

session_start();
include_once 'model/Conexion.php';

if (isset($_GET["ubicacion"])) { ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Dashboard</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="view/presentacion/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="view/presentacion/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="view/presentacion/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="view/presentacion/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="view/presentacion/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="view/presentacion/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="view/presentacion/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="view/presentacion/plugins/summernote/summernote-bs4.min.css">
        <link rel="stylesheet" href="view/presentacion/css/sweetalert2.min.css">
    </head>

    <?php
    if ($_GET["ubicacion"] == "Login") {
        if (empty($_SESSION['rol'])) {
            //header("Location: Login");
        }
        include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
    } else if ($_GET["ubicacion"] == "Administracion" || $_GET["ubicacion"] == "Categoria"
    || $_GET["ubicacion"] == "Ver-personal" || $_GET["ubicacion"] == "Registrar-personal" || $_GET["ubicacion"] == "Salir"
    || $_GET["ubicacion"] == "Perfil" || $_GET["ubicacion"] == "Producto") { ?>

        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">
                <?php
                include_once "modulos/header.php";
                include_once "modulos/menu.php";
                if (empty($_SESSION['rol'])) {
                    header("Location: Login");
                }
                ?>
                <div class="content-wrapper">
                    <?php include "modulos/navegacion/" . $_GET["ubicacion"] . ".php"; ?>
                </div>
                <?php
                include_once "modulos/footer.php";
                ?>
            </div>
        <?php } ?>
        <!-- jQuery -->
        <script src="view/presentacion/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="view/presentacion/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- jquery-validation -->
        <script src="view/presentacion/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="view/presentacion/plugins/jquery-validation/additional-methods.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="view/presentacion/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="view/presentacion/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="view/presentacion/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="view/presentacion/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="view/presentacion/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="view/presentacion/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="view/presentacion/plugins/moment/moment.min.js"></script>
        <script src="view/presentacion/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="view/presentacion/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="view/presentacion/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="view/presentacion/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="view/presentacion/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="view/presentacion/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="view/presentacion/js/pages/dashboard.js"></script>

        <script src="view/presentacion/js/sweetalert2.min.js"></script>
        <script src="view/presentacion/js/alertas.js"></script>
        <script src="view/presentacion/js/registrar.js"></script>
        <script src="view/presentacion/js/login.js"></script>
        </body>

    </html>
<?php
} else {
    header('location: Login');
}
