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
        <h1 class="h3 mb-0 text-gray-800"> Items</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Asignar Item</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">

                <form action="" method="POST">

                    <input type="number" name="ID_PRESTAMO" id="ID_PRESTAMO" value="" hidden disable>

                    <div class="container-md">

                        <div class="mb-3">
                            <label for="ID_EMPLEADO_FK" class="form-label">Empleado Prestatario</label>
                            <select class="form-control" name="ID_EMPLEADO_FK" id="ID_EMPLEADO_FK">
                                <option disabled selected > Seleccione al Empleado </option>
                                <?php foreach ($data['list-empleados'] as $empleado) : ?>
                                    <option value="<?= $empleado['ID_USUARIO'] ?>"><?= $empleado['NOMBRE_COMPLETO_USUARIO'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="ID_PC_FK" class="form-label">Computador </label>
                            <select class="form-control" name="ID_PC_FK" id="ID_PC_FK">
                                <option disabled selected > Seleccione el Computador </option>
                                <?php foreach ($data['list-items'] as $computador) : ?>
                                    <option value="<?= $computador['ID_PC'] ?>"><?= $computador['MODELO_PC'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="FECHA_INICIO_PRESTAMO" class="form-label">Fecha Inicio Prestado</label>
                            <input type="datetime-local" class="form-control" name="FECHA_INICIO_PRESTAMO" id="FECHA_INICIO_PRESTAMO">
                        </div>

                        <!-- <div class="mb-3">
                            <label for="FECHA_FIN_PRESTAMO" class="form-label">Fecha Fin Prestado</label>
                            <input type="datetime-local" class="form-control" name="FECHA_FIN_PRESTAMO" id="FECHA_FIN_PRESTAMO">
                        </div> -->

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-danger btn-user btn-block" type="submit" id="btn_set_loan" >Registrar</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Footer -->
<?php include('./Views/Components/Footer.php'); ?>