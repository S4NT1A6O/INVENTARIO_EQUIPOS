<!doctype html>
<html lang="es">
    <head>
        <title>Empleados</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/ff77c957bf.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <!-- Page Content -->
        <br>
        <div class="card text-dark bg-light">
            <div class="card-header" style="background-color:#317EB5; color:#FFFFFF;">
                <h3 class="card-title">Lista de Empleados</h3>
            </div>
            <div class="card-body">
                <a name="" id="" class="btn btn-warning" href="?controlador=Empleados&accion=RegistroEmpleado" role="button">Registrar Empleado</a>
                <div class="container">
                    <br>
                    <div class="container">
                        <table id="employeesTable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" style="font-size: small;"> ID </th>
                                    <th scope="col" style="font-size: small;"> Empresa </th>
                                    <th scope="col" style="font-size: small;"> Empleado </th>
                                    <th scope="col" style="font-size: small;"> Correo </th>
                                    <th scope="col" style="font-size: small;" colspan="2"> Documento </th>
                                    <th scope="col" style="font-size: small;"> Fecha Nacimiento </th>
                                    <th scope="col" style="font-size: small;"> N° Celular </th>
                                    <th scope="col" style="font-size: small;"> N° Fijo </th>
                                    <!-- <th scope="col" style="font-size: small;"> Registrado</th>
                                    <th scope="col" style="font-size: small;"> Modificado</th> -->
                                    <th scope="col" style="font-size: small;"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($empleados as $empleado){?>
                                <tr>
                                    <th scope="row" style="font-size: small;"><?php echo $empleado->ID_EMPLEADO ?></th>
                                    <td style="font-size: small;"><?php echo $empleado->ID_EMPRESA_FK ?></td>
                                    <td style="font-size: small;"><?php echo $empleado->NOMBRE_COMPLETO_EMPLEADO ?></td>
                                    <td style="font-size: small;"><?php echo $empleado->CORREO_EMPLEADO ?></td>
                                    <td style="font-size: small;"><?php echo $empleado->TIPO_DOCUMENTO_EMPLEADO ?></td>
                                    <td style="font-size: small;"><?php echo $empleado->NUMERO_DOCUMENTO_EMPLEADO ?></td>
                                    <td style="font-size: small;"><?php echo $empleado->FECHA_NACIMIENTO_EMPLEADO ?></td>
                                    <td style="font-size: small;"><?php echo $empleado->NUMERO_CELULAR_EMPLEADO ?></td>
                                    <td style="font-size: small;"><?php echo $empleado->NUMERO_FIJO_EMPLEADO ?></td>
                                    <!-- <td style="font-size: small;"><?php echo $empleado->CREATED_AT ?></td>
                                    <td style="font-size: small;"><?php echo $empleado->UPDATED_AT ?></td> -->
                                    <!-- btn's acciones -->
                                    <td>
                                        <div class="btn-group" role="group" aria-label="">
                                            <a style="font-size: small;" href="#" class="btn btn-info"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                            <a style="font-size: small;"class="btn btn-danger"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> <input class="btn val" type="hidden" value="<?php echo $empleado->ID_EMPLEADO ?>"></a>
                                        </div>
                                    </td> 
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>