<!doctype html>
<html lang="es">
    <head>
        <title>Empresas</title>
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
                    <h3 class="card-title">Empresas</h3>
                </div>
                <div class="card-body">
                    <div class="container-sm">
                        <br>
                        <h3>Lista de Empresas</h3>
                        <div class="container">
                            <br>
                            <a name="" id="" class="btn btn-warning" href="?controlador=Empresas&accion=RegistroEmpresa" role="button">Registrar Empresa</a>
                            <br>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"> ID </th>
                                        <th scope="col"> Nombre </th>
                                        <th scope="col"> NIT </th>
                                        <th scope="col"> Dirección </th>
                                        <th scope="col"> Cod. Postal </th>
                                        <th scope="col"> Creado </th>
                                        <th scope="col"> Modificado </th>
                                        <th scope="col">  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($empresas as $empresa){?>
                                        <tr>
                                            <!-- datos -->
                                            <th scope="row"><?php echo $empresa->ID_EMPRESA; ?></th>
                                            <td><?php echo $empresa->RAZON_SOCIAL_EMPRESA; ?></td>
                                            <td><?php echo $empresa->NIT_EMPRESA; ?></td>
                                            <td><?php echo $empresa->DIRECCION_EMPRESA; ?></td>
                                            <td><?php echo $empresa->CODIGO_POSTAL_EMPRESA; ?></td>
                                            <td><?php echo $empresa->CREATED_AT; ?></td>
                                            <td><?php echo $empresa->UPDATED_AT; ?></td>

                                            <!-- btn's acciones -->
                                            <td>
                                                <div class="btn-group" role="group" aria-label="">
                                                    <a href="#" class="btn btn-info"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                                    <a class="btn btn-danger"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> <input class="btn val" type="hidden" value="<?php echo $empresa->ID_EMPRESA; ?>"></a>
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