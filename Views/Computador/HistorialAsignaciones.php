<!doctype html>
<html lang="es">
    <head>
        <title>Asignaciones</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/ff77c957bf.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <!-- Page Content -->
        <div class="container-sm">
            <br>
            <div class="card text-dark bg-light">
                <div class="card-header" style="background-color:#317EB5; color:#FFFFFF;">
                    <h3 class="card-title">Asignaciones</h3>
                </div>
                <div class="card-body">
                    <div class="container">
                        <br>
                        <h3>Lista de Asignaciones</h3>
                        <div class="container">
                            <br>
                            <a name="" id="" class="btn btn-warning" href="?controlador=Asignaciones&accion=AsignarComputador" role="button">Asignar Equipos</a>
                            <br>

                            <table id="assingmentTable" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"> ID</th>
                                        <th scope="col"> Empleado</th>
                                        <th scope="col"> Computador</th>
                                        <th scope="col"> Inicio Prestamo</th>
                                        <th scope="col"> Fin Prestamo</th>
                                        <th scope="col"> Registrado</th>
                                        <th scope="col"> Actualizado</th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($asignaciones as $asignacion){?>
                                        <tr>
                                            <th scope="row"><?php echo $asignacion->ID_PRESTAMO; ?></th>
                                            <td><?php echo $asignacion->ID_EMPLEADO_FK; ?></td>
                                            <td><?php echo $asignacion->ID_PC_FK; ?></td>
                                            <td><?php echo $asignacion->FECHA_INICIO_PRESTAMO; ?></td>
                                            <td><?php echo $asignacion->FECHA_FIN_PRESTAMO; ?></td>
                                            <td><?php echo $asignacion->CREATED_AT; ?></td>
                                            <td><?php echo $asignacion->UPDATED_AT; ?></td>
                                            <!-- btn's acciones -->
                                            <td>
                                                <div class="btn-group" role="group" aria-label="">
                                                    <a href="#" class="btn btn-info"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                                    <a href="?controlador=Asignaciones&accion=BorrarAsignacion&ID=<?php echo $asignacion->ID_EMPLEADO_FK; ?>" class="btn btn-danger"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> </a>
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
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>