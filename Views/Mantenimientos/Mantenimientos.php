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
        <br>
        <div class="card text-dark bg-light">
            <div class="card-header" style="background-color:#317EB5; color:#FFFFFF;">
                <h3 class="card-title">Lista de Mantenimientos</h3>
            </div>
            <div class="card-body">
                <a name="" id="" class="btn btn-warning" href="?controlador=Empresas&accion=RegistroEmpresa" role="button">Registrar Empresa</a>
                <div class="container">
                    <br>
                    <div class="container-sm">
                        <table id="companyTable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" style="font-size: small;"> ID </th>
                                    <th scope="col" style="font-size: small;"> Serial Computador </th>
                                    <th scope="col" style="font-size: small;"> Descripción Falla/Mantenimiento </th>
                                    <th scope="col" style="font-size: small;"> Estado </th>
                                    <!-- <th scope="col" style="font-size: small;"> Creado </th>
                                    <th scope="col" style="font-size: small;"> Modificado </th> -->
                                    <th scope="col" style="font-size: small;">  </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($mantenimientos as $mantenimiento){?>
                                    <tr>
                                        <!-- datos -->
                                        <th scope="row" style="font-size: small;"><?php echo $mantenimiento->ID_MANTENIMIENTO; ?></th>
                                        <td style="font-size: small;"><?php echo $mantenimiento->ID_PC_FK; ?></td>
                                        <td style="font-size: small;"><?php echo $mantenimiento->DESCRIPCION_MANTENIMIENTO; ?></td>
                                        <td style="font-size: small;"><?php echo $mantenimiento->ESTADO; ?></td>
                                        <!-- <td style="font-size: small;"><?php echo $mantenimiento->CREATED_AT; ?></td>
                                        <td style="font-size: small;"><?php echo $mantenimiento->UPDATED_AT; ?></td> -->

                                        <!-- btn's acciones -->
                                        <td>
                                            <div class="btn-group" role="group" aria-label="">
                                                <a href="#" class="btn btn-info" style="font-size: small;"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                                <a class="btn btn-danger" style="font-size: small;"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> <input class="btn val" type="hidden" value="<?php echo $mantenimiento->ID_MANTENIMIENTO; ?>"></a>
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