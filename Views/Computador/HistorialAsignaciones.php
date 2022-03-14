<!-- Header -->
<?php include('./Views/Components/Header.php'); ?>

<!-- Sidebar -->
<?php include('./Views/Components/Sidebar.php'); ?>

<!-- Topbar -->
<?php include('./Views/Components/Topbar.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Prestamos</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- CARD PC -->
    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Computadores Prestados</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">

                <table id="assingmentTable" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="font-size: small;"> ID</th>
                            <th scope="col" style="font-size: small;"> Empleado</th>
                            <th scope="col" style="font-size: small;"> Computador</th>
                            <th scope="col" style="font-size: small;"> Inicio Prestamo</th>
                            <th scope="col" style="font-size: small;"> Fin Prestamo</th>
                            <!-- <th scope="col" style="font-size: small;"> Registrado</th>
                            <th scope="col" style="font-size: small;"> Modificado</th> -->
                            <th scope="col" style="font-size: small;"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($asignaciones as $asignacion){?>
                            <tr>
                                <th scope="row" style="font-size: small;"><?php echo $asignacion->ID_PRESTAMO; ?></th>
                                <td style="font-size: small;"><?php echo $asignacion->ID_EMPLEADO_FK; ?></td>
                                <td style="font-size: small;"><?php echo $asignacion->ID_PC_FK; ?></td>
                                <td style="font-size: small;"><?php echo $asignacion->FECHA_INICIO_PRESTAMO; ?></td>
                                <td style="font-size: small;"><?php echo $asignacion->FECHA_FIN_PRESTAMO; ?></td>
                                <!-- <td style="font-size: small;"><?php echo $asignacion->CREATED_AT; ?></td>
                                <td style="font-size: small;"><?php echo $asignacion->UPDATED_AT; ?></td> -->
                                <!-- btn's acciones -->
                                <td>
                                    <div class="btn-group" role="group" aria-label="">
                                        <a href="#" class="btn btn-info" style="font-size: small;"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                        <a class="btn btn-danger"style="font-size: small;"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> <input class="btn val" type="hidden" value="<?php echo $asignacion->ID_EMPLEADO_FK; ?>"></a>
                                    </div>
                                </td>                                      
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- END CARD PC -->

</div>
<!-- /.container-fluid -->

<!-- Footer -->
<?php include('./Views/Components/Footer.php'); ?>