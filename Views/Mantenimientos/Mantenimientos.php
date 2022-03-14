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
        <h1 class="h3 mb-0 text-gray-800">Mantenimientos</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Mantenimientos</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
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
<!-- /.container-fluid -->

<!-- Footer -->
<?php include('./Views/Components/Footer.php'); ?>