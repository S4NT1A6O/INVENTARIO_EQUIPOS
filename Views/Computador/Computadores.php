<!doctype html>
<html lang="es">
    <head>
        <title>Computadores</title>
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
                <h3 class="card-title">Computadores</h3>
            </div>
            <div class="card-body">
                <br>
                <h3>Lista de Computadores</h3>
                <div class="container">
                    <br>
                    <a name="" id="" class="btn btn-warning" href="?controlador=Computador&accion=RegistroComputador" role="button">Registrar Computador</a>
                    <br>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: small;"> ID</th>
                                <th scope="col" style="font-size: small;"> Marca</th>
                                <th scope="col" style="font-size: small;"> Modelo</th>
                                <th scope="col" style="font-size: small;"> Serial</th>
                                <th scope="col" style="font-size: small;"> Procesador</th>
                                <th scope="col" style="font-size: small;"> RAM</th>
                                <th scope="col" style="font-size: small;"> Espacio</th>
                                <th scope="col" style="font-size: small;"> Tipo</th>
                                <th scope="col" style="font-size: small;"> SO</th>
                                <th scope="col" style="font-size: small;"> Version SO</th>
                                <th scope="col" style="font-size: small;"> Estado</th>
                                <th scope="col" style="font-size: small;"> Registrado</th>
                                <th scope="col" style="font-size: small;"> Editado</th>
                                <th scope="col" style="font-size: small;"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($computadores as $computador){?>
                                <tr>
                                    <th scope="row" style="font-size: small;"><?php echo $computador->ID_PC ?></th>
                                    <td style="font-size: small;"><?php echo $computador->MARCA_PC ?></td>
                                    <td style="font-size: small;"><?php echo $computador->MODELO_PC ?></td>
                                    <td style="font-size: small;"><?php echo $computador->SERIAL_PC ?></td>
                                    <td style="font-size: small;"><?php echo $computador->PROCESADOR_PC ?></td>
                                    <td style="font-size: small;"><?php echo $computador->RAM_PC ?><?php echo $computador->UNIDAD_RAM_PC ?></td>
                                    <!-- <td></td> -->
                                    <td style="font-size: small;"><?php echo $computador->ALMACENAMIENTO_PC ?><?php echo $computador->UNIDAD_ALMACENAMIENTO_PC ?></td>
                                    <!-- <td></td> -->
                                    <td style="font-size: small;">x<?php echo $computador->TIPO_SISTEMA_PC ?></td>
                                    <td style="font-size: small;"><?php echo $computador->SISTEMA_OPERATIVO_PC ?></td>
                                    <td style="font-size: small;"><?php echo $computador->VERSION_SO_PC ?></td>
                                    <td style="font-size: small;"><?php echo $computador->DISPONIBILIDAD_PC ?></td>
                                    <td style="font-size: small;"><?php echo $computador->CREATED_AT ?></td>
                                    <td style="font-size: small;"><?php echo $computador->UPDATED_AT ?></td>
                                    <!-- btn's acciones -->
                                    <td>
                                        <div class="btn-group" role="group" aria-label="">
                                            <a href="#" class="btn btn-info"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                            <a href="?controlador=Computador&accion=BorrarComputador&ID=<?php echo $computador->ID_PC ?>" class="btn btn-danger"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>