<!-- Header -->
<?php include('./Views/Components/Header.php'); ?>

<!-- Sidebar -->
<?php include('./Views/Components/Sidebar.php'); ?>

<!-- Topbar -->
<?php include('./Views/Components/Topbar.php'); ?>


<!-- <?php
// include_once('./Views/Components/Topbar.php');
?> -->
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Empleados</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Empleados</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table id="employeesTable" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="font-size: small;"> ID </th>
                            <th scope="col" style="font-size: small;"> Area </th>
                            <th scope="col" style="font-size: small;"> Empleado </th>
                            <th scope="col" style="font-size: small;"> Correo </th>
                            <th scope="col" style="font-size: small;" colspan="2"> Documento </th>
                            <th scope="col" style="font-size: small;"> Fecha Nacimiento </th>
                            <th scope="col" style="font-size: small;"> N° Celular </th>
                            <th scope="col" style="font-size: small;"> N° Fijo</th>
                            <!-- <th scope="col" style="font-size: small;"> Modificado</th> -->
                            <th scope="col" style="font-size: small;"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($empleados as $empleado){?>
                        <tr>
                            <th scope="row" style="font-size: small;"><?php echo $empleado->ID_USUARIO ?></th>
                            <td style="font-size: small;"><?php echo $empleado->ID_EMPRESA_FK ?></td>
                            <td style="font-size: small;"><?php echo $empleado->NOMBRE_COMPLETO_USUARIO ?></td>
                            <td style="font-size: small;"><?php echo $empleado->CORREO_USUARIO ?></td>
                            <td style="font-size: small;"><?php echo $empleado->TIPO_DOCUMENTO_USUARIO ?></td>
                            <td style="font-size: small;"><?php echo $empleado->NUMERO_DOCUMENTO_USUARIO ?></td>
                            <td style="font-size: small;"><?php echo $empleado->FECHA_NACIMIENTO_USUARIO ?></td>
                            <td style="font-size: small;"><?php echo $empleado->NUMERO_CELULAR_USUARIO ?></td>
                            <td style="font-size: small;"><?php echo $empleado->NUMERO_FIJO_USUARIO ?></td>
                            <!-- btn's acciones -->
                            <td>
                                <div class="btn-group" role="group" aria-label="">
                                    <a style="font-size: small;" href="#" class="btn btn-info"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                    <a style="font-size: small;"class="btn btn-danger"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> <input class="btn val" type="hidden" value="<?php echo $empleado->ID_USUARIO ?>"></a>
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

<!-- /.container-fluid -->

<!-- Footer -->
<?php include('./Views/Components/Footer.php'); ?>