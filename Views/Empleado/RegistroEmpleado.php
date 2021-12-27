<!doctype html>
<html lang="es">
    <head>
        <title>Registro de Empresas</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/ff77c957bf.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <!-- Menu de Navegación -->
        <?php
            require_once('../Components/NavbarGeneral.php');
        ?>
        <!-- Page Content -->
        
        <!-- Page Content -->
        <div class="container-sm">
            <br>
            <div class="card text-dark bg-light">
                <div class="card-header" style="background-color:#317EB5; color:#FFFFFF;">
                    <h3 class="card-title">Registro para Empresas</h3>
                </div>
                <div class="card-body">
                    <div class="container-sm">                        
                        <form action="" method="post">

                            <input type="number" name="ID_EMPLEADO" id="ID_EMPLEADO" value="" hidden disable>

                            <div class="container-md">
                                <div class="mb-3">
                                    <label for="ID_EMPRESA_FK" class="form-label">Empresa a la que Corresponde</label>
                                    <input type="text" class="form-control" id="ID_EMPRESA_FK" placeholder=" Empresa...">
                                </div>

                                <div class="mb-3">
                                    <label for="NOMBRE_COMPLETO_EMPLEADO" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="NOMBRE_COMPLETO_EMPLEADO" placeholder=" Nombre Completo...">
                                </div>

                                <div class="mb-3">
                                    <label for="CORREO_EMPLEADO" class="form-label">Correo Empleado</label>
                                    <input type="email" class="form-control" id="CORREO_EMPLEADO" placeholder=" Example@exam.ple...">
                                </div>

                                <div class="mb-3">
                                    <label for="TIPO_DOCUMENTO_EMPLEADO" class="form-label">Identificación Empleado</label>
                                    <input type="text" class="form-control" id="TIPO_DOCUMENTO_EMPLEADO" placeholder=" Codigo Postal...">
                                </div>

                                <div class="mb-3">
                                    <label for="NUMERO_DOCUMENTO_EMPLEADO" class="form-label">Numero de Identificación Empleado</label>
                                    <input type="number" class="form-control" id="NUMERO_DOCUMENTO_EMPLEADO" placeholder=" Codigo Postal...">
                                </div>

                                <div class="mb-3">
                                    <label for="FECHA_NACIMIENTO_EMPLEADO" class="form-label">Fecha de Nacimiento Empleado</label>
                                    <input type="date" class="form-control" id="FECHA_NACIMIENTO_EMPLEADO" >
                                </div>

                                <div class="mb-3">
                                    <label for="NUMERO_CELULAR_EMPLEADO" class="form-label">Telefono Celular Empleado</label>
                                    <input type="number" class="form-control" id="NUMERO_CELULAR_EMPLEADO" placeholder=" Codigo Postal...">
                                </div>

                                <div class="mb-3">
                                    <label for="NUMERO_FIJO_EMPLEADO" class="form-label">Telefono Fijo Empleado</label>
                                    <input type="number" class="form-control" id="NUMERO_FIJO_EMPLEADO" placeholder=" Codigo Postal...">
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-danger" type="button" id="btn_set_company" >Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('../Components/Scripts.php') ?>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>