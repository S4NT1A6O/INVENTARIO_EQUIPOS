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
                    <h3 class="card-title">Asignación de Computadores</h3>
                </div>
                <div class="card-body">
                    <div class="container-sm">                        
                        <form action="" method="POST">

                            <input type="number" name="ID_PRESTAMO" id="ID_PRESTAMO" value="" hidden disable>

                            <div class="container-md">

                                <div class="mb-3">
                                    <label for="ID_EMPLEADO_FK" class="form-label">Empleado Prestatario</label>
                                    <select class="form-control" name="ID_EMPLEADO_FK" id="ID_EMPLEADO_FK">
                                        <option disabled selected > Seleccione al Empleado </option>
                                        <?php foreach ($data['list-empleados'] as $empleado) : ?>
                                            <option value="<?= $empleado['ID_EMPLEADO'] ?>"><?= $empleado['NOMBRE_COMPLETO_EMPLEADO'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="ID_PC_FK" class="form-label">Computador </label>
                                    <select class="form-control" name="ID_PC_FK" id="ID_PC_FK">
                                        <option disabled selected > Seleccione el Computador </option>
                                        <?php foreach ($data['list-computadores'] as $computador) : ?>
                                            <option value="<?= $computador['ID_PC'] ?>"><?= $computador['MODELO_PC'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="FECHA_INICIO_PRESTAMO" class="form-label">Fecha Inicio Prestado</label>
                                    <input type="datetime-local" class="form-control" name="FECHA_INICIO_PRESTAMO" id="FECHA_INICIO_PRESTAMO">
                                </div>

                                <div class="mb-3">
                                    <label for="FECHA_FIN_PRESTAMO" class="form-label">Fecha Fin Prestado</label>
                                    <input type="datetime-local" class="form-control" name="FECHA_FIN_PRESTAMO" id="FECHA_FIN_PRESTAMO">
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-danger" type="submit" id="btn_set_loan" >Registrar</button>
                                </div>            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>