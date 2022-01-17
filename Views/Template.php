<!doctype html>
<html lang="es">
    <head>
        <title></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/ff77c957bf.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Sweet Alert 2 -->
        <link rel="stylesheet" href="http://localhost/inventario_equipos/Assets/plugins/SweetAlert/dist/sweetalert2.min.css">

    </head>
    <body>
        <!-- Menu de Navegación -->
        <?php
            require_once('./Views/Components/NavbarGeneral.php');
        ?>

        <!-- Page Content -->

        <div class="container-sm">
            <br>
            <?php include_once("Router.php"); ?>
        </div>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- JavaScrip -->
        <script src="http://localhost/inventario_equipos/Assets/js/globalJs.js"></script>
        <!-- SwetAlert 2 JavaScript -->
        <script src="http://localhost/inventario_equipos/Assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>