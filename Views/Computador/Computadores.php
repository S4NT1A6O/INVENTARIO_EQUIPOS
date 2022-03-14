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
        <h1 class="h3 mb-0 text-gray-800">Computadores</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Computadores</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table id="computersTable" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="font-size: small;"> ID</th>
                            <th scope="col" style="font-size: small;"> Marca</th>
                            <th scope="col" style="font-size: small;"> Modelo</th>
                            <th scope="col" style="font-size: small;"> Serial</th>
                            <th scope="col" style="font-size: small;"> Procesador</th>
                            <th scope="col" style="font-size: small;"> RAM</th>
                            <th scope="col" style="font-size: small;"> Espacio</th>
                            <th scope="col" style="font-size: small;"> Tipo</th>
                            <th scope="col" style="font-size: small;"> SO</th>
                            <th scope="col" style="font-size: small;"> Estado</th>
                            <!-- <th scope="col" style="font-size: small;"> Registrado</th>
                            <th scope="col" style="font-size: small;"> Editado</th> -->
                            <th scope="col" style="font-size: small;"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($computadores as $computador){?>
                            <tr>
                                <th scope="row" style="font-size: small;"><?php echo $computador->ID_PC ?></th>
                                <td style="font-size: small;"><?php echo $computador->MARCA_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->MODELO_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->SERIAL_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->PROCESADOR_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->RAM_PC ?><?php echo $computador->UNIDAD_RAM_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->ALMACENAMIENTO_PC ?><?php echo $computador->UNIDAD_ALMACENAMIENTO_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->TIPO_SISTEMA_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->SISTEMA_OPERATIVO_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->DISPONIBILIDAD_PC ?></td>
                                <!-- <td style="font-size: small;"><?php echo $computador->CREATED_AT ?></td>
                                <td style="font-size: small;"><?php echo $computador->UPDATED_AT ?></td> -->
                                <!-- btn's acciones -->
                                <td>
                                    <div class="btn-group" role="group" aria-label="">
                                        <a href="#" class="btn btn-info" style="font-size: small;"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                        <a class="btn btn-danger" style="font-size: small;"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> <input class="btn val" type="hidden" value="<?php echo $computador->ID_PC ?>"></a>
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









<div class="card text-dark bg-light">
    <div class="card-header" style="background-color:#317EB5; color:#FFFFFF;">
        <h3 class="card-title">Lista de Computadores</h3>
    </div>
    <div class="card-body">
        <a name="" id="" class="btn btn-warning" href="?controlador=Computador&accion=RegistroComputador" role="button">Registrar Computador</a>
        <div class="container">
            <br>
            <div class="container">
                <table id="computersTable" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="font-size: small;"> ID</th>
                            <th scope="col" style="font-size: small;"> Marca</th>
                            <th scope="col" style="font-size: small;"> Modelo</th>
                            <th scope="col" style="font-size: small;"> Serial</th>
                            <th scope="col" style="font-size: small;"> Procesador</th>
                            <th scope="col" style="font-size: small;"> RAM</th>
                            <th scope="col" style="font-size: small;"> Espacio</th>
                            <th scope="col" style="font-size: small;"> Tipo</th>
                            <th scope="col" style="font-size: small;"> SO</th>
                            <th scope="col" style="font-size: small;"> Estado</th>
                            <!-- <th scope="col" style="font-size: small;"> Registrado</th>
                            <th scope="col" style="font-size: small;"> Editado</th> -->
                            <th scope="col" style="font-size: small;"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($computadores as $computador){?>
                            <tr>
                                <th scope="row" style="font-size: small;"><?php echo $computador->ID_PC ?></th>
                                <td style="font-size: small;"><?php echo $computador->MARCA_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->MODELO_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->SERIAL_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->PROCESADOR_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->RAM_PC ?><?php echo $computador->UNIDAD_RAM_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->ALMACENAMIENTO_PC ?><?php echo $computador->UNIDAD_ALMACENAMIENTO_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->TIPO_SISTEMA_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->SISTEMA_OPERATIVO_PC ?></td>
                                <td style="font-size: small;"><?php echo $computador->DISPONIBILIDAD_PC ?></td>
                                <!-- <td style="font-size: small;"><?php echo $computador->CREATED_AT ?></td>
                                <td style="font-size: small;"><?php echo $computador->UPDATED_AT ?></td> -->
                                <!-- btn's acciones -->
                                <td>
                                    <div class="btn-group" role="group" aria-label="">
                                        <a href="#" class="btn btn-info" style="font-size: small;"> <i class="fas fa-pen" style="color:#ffffff;"></i> </a>
                                        <a class="btn btn-danger" style="font-size: small;"> <i class="fas fa-trash-alt" style="color:#ffffff;"></i> <input class="btn val" type="hidden" value="<?php echo $computador->ID_PC ?>"></a>
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