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
        <h1 class="h3 mb-0 text-gray-800">Empresa</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Areas de la Empresa</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                    <table id="companyTable" class="table table-striped table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col"> ID </th>
                                <th scope="col"> Area </th>
                                <!-- <th scope="col" style="font-size: small;"> NIT </th>
                                <th scope="col" style="font-size: small;"> Dirección </th>
                                <th scope="col" style="font-size: small;"> # Postal </th>
                                <th scope="col" style="font-size: small;"> Creado </th>
                                <th scope="col" style="font-size: small;"> Modificado </th> -->
                                <th scope="col""> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($empresas as $empresa){?>
                                <tr>
                                    <!-- datos -->
                                    <th scope="row" ><?php echo $empresa->ID_AREA_EMPRESA; ?></th>
                                    <td ><?php echo $empresa->NOMBRE_AREA_EMPRESA; ?></td>
                                    <!-- <td style="font-size: small;"><?php echo $empresa->NIT_EMPRESA; ?></td>
                                    <td style="font-size: small;"><?php echo $empresa->DIRECCION_EMPRESA; ?></td>
                                    <td style="font-size: small;"><?php echo $empresa->CODIGO_POSTAL_EMPRESA; ?></td>
                                    <td style="font-size: small;"><?php echo $empresa->CREATED_AT; ?></td>
                                    <td style="font-size: small;"><?php echo $empresa->UPDATED_AT; ?></td> -->
                                    <!-- btn's acciones -->
                                    <td>
                                        <!-- <div class="btn-group" role="group" aria-label=""> -->
                                            <a class="btn btn-info btn-circle btn-sm" style="font-size: small;"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                            <a class="btn btn-danger btn-circle btn-sm" style="font-size: small;"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> <input class="btn val" type="hidden" value="<?php echo $empresa->ID_EMPRESA; ?>"></a>
                                        <!-- </div> -->
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