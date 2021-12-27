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
        <div class="container-sm">
            <br>
            <div class="card text-dark bg-light">
                <div class="card-header" style="background-color:#317EB5; color:#FFFFFF;">
                    <h3 class="card-title">Registro para Empresas</h3>
                </div>
                <div class="card-body">
                    <div class="container-sm">                        
                        <form action="" method="post">

                            <input type="number" name="ID_PC" id="ID_PC" value="" hidden disable>
                            
                            <div class="row row-cols-2">  
                                <div class="container-sm">
                                    <div class="mb-3">
                                        <label for="MARCA_PC" class="form-label">Marca </label>
                                        <input type="text" class="form-control" id="MARCA_PC" placeholder=" Marca...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="MODELO_PC" class="form-label">Modelo </label>
                                        <input type="text" class="form-control" id="MODELO_PC" placeholder=" Modelo...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="SERIAL_PC" class="form-label">Serial </label>
                                        <input type="text" class="form-control" id="SERIAL_PC" placeholder=" Serial...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="PROCESADOR_PC" class="form-label">Procesador </label>
                                        <input type="text" class="form-control" id="PROCESADOR_PC" placeholder=" Procesador...">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="RAM_PC" class="form-label">Cantidad de RAM </label>
                                        <input type="number" class="form-control" id="RAM_PC" placeholder=" Razon social...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="UNIDAD_RAM_PC" class="form-label">Unidad de RAM </label>
                                        <input type="number" class="form-control" id="UNIDAD_RAM_PC" placeholder=" Unidad...">
                                    </div>

                                </div>

                                <div class="container-sm">
                                    <div class="mb-3">
                                        <label for="ALMACENAMIENTO_PC" class="form-label">Almacenamiento </label>
                                        <input type="text" class="form-control" id="ALMACENAMIENTO_PC" placeholder=" Almacenamiento...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="UNIDAD_ALMACENAMIENTO_PC" class="form-label">Unidad Almacenamiento</label>
                                        <input type="text" class="form-control" id="UNIDAD_ALMACENAMIENTO_PC" placeholder=" Unidad...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="TIPO_SISTEMA_PC" class="form-label">Tipo de Sistema</label>
                                        <input type="text" class="form-control" id="TIPO_SISTEMA_PC" placeholder=" Tipo...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="SISTEMA_OPERATIVO_PC" class="form-label">Unidad Almacenamiento</label>
                                        <input type="text" class="form-control" id="SISTEMA_OPERATIVO_PC" placeholder=" Unidad...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="VERSION_SO_PC" class="form-label">Version Sistema Operativo</label>
                                        <input type="text" class="form-control" id="VERSION_SO_PC" placeholder=" Version...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="DISPONIBILIDAD_PC" class="form-label">Disponibilidad Equipo</label>
                                        <input type="text" class="form-control" id="DISPONIBILIDAD_PC" placeholder=" Disponibilidad...">
                                    </div>
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