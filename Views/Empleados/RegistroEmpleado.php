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
        <!-- Page Content -->
        <div class="container-sm">
            <br>
            <div class="card text-dark bg-light">
                <div class="card-header" style="background-color:#317EB5; color:#FFFFFF;">
                    <h3 class="card-title">Registro para Empleados</h3>
                </div>
                <div class="card-body">
                    <div class="container-sm">                        
                        <form action="" method="POST">
                            <div class="row row-cols-2">  
                                <div class="container-sm">

                                    <div class="mb-3">
                                        <label for="ID_EMPRESA_FK" class="form-label">Empresa Correspondient</label>
                                        <select class="form-control" name="ID_EMPRESA_FK" id="ID_EMPRESA_FK">
                                            <option disabled selected > Seleccione la Empresa </option>
                                            <?php foreach ($data['list-empresas'] as $empresa) : ?>
                                                <option value="<?= $empresa['ID_EMPRESA'] ?>"><?= $empresa['RAZON_SOCIAL_EMPRESA'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="NOMBRE_COMPLETO_EMPLEADO" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" name="NOMBRE_COMPLETO_EMPLEADO" id="NOMBRE_COMPLETO_EMPLEADO" placeholder=" Nombre Completo...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="CORREO_EMPLEADO" class="form-label">Correo Empleado</label>
                                        <input type="email" class="form-control" name="CORREO_EMPLEADO" id="CORREO_EMPLEADO" placeholder=" Example@exam.ple...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="TIPO_DOCUMENTO_EMPLEADO" class="form-label">Tipo Documento Identificación</label>
                                        <select class="form-control" name="TIPO_DOCUMENTO_EMPLEADO" id="TIPO_DOCUMENTO_EMPLEADO">
                                            <option disabled selected > Seleccione el Tipo de Documentos </option>
                                            <option value="TI">Tarjeta de Identidad</option>
                                            <option value="CC">Cedula de Ciudadania</option>
                                            <option value="CE">Cedula de Extranjeria</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="container-sm">
                                    
                                    <div class="mb-3">
                                        <label for="NUMERO_DOCUMENTO_EMPLEADO" class="form-label">Numero de Identificación Empleado</label>
                                        <input type="number" class="form-control" name="NUMERO_DOCUMENTO_EMPLEADO" id="NUMERO_DOCUMENTO_EMPLEADO" placeholder=" Numero de Identificación...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="FECHA_NACIMIENTO_EMPLEADO" class="form-label">Fecha de Nacimiento Empleado</label>
                                        <input type="date" class="form-control" name="FECHA_NACIMIENTO_EMPLEADO" id="FECHA_NACIMIENTO_EMPLEADO" >
                                    </div>

                                    <div class="mb-3">
                                        <label for="NUMERO_CELULAR_EMPLEADO" class="form-label">Telefono Celular Empleado</label>
                                        <input type="number" class="form-control" name="NUMERO_CELULAR_EMPLEADO" id="NUMERO_CELULAR_EMPLEADO" placeholder=" Telefono Celular...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="NUMERO_FIJO_EMPLEADO" class="form-label">Telefono Fijo Empleado</label>
                                        <input type="number" class="form-control" name="NUMERO_FIJO_EMPLEADO" id="NUMERO_FIJO_EMPLEADO" placeholder=" Telefono Fijo...">
                                    </div>

                                </div>                                

                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input name="" id="btn_set_computer" class="btn btn-danger" type="submit" value="Registrar Equipo">
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