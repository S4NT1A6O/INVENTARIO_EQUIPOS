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
        <h1 class="h3 mb-0 text-gray-800"> Computadores</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registro de Computadores</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="POST">
                    <div class="p-3">
                        <div class="row row-cols-2">
                            <div class="container-sm">

                                <div class="mb-3">
                                    <label for="MARCA_PC" class="form-label">Marca </label>
                                    <input type="text" class="form-control" name="MARCA_PC" id="MARCA_PC" placeholder=" Marca...">
                                </div>

                                <div class="mb-3">
                                    <label for="MODELO_PC" class="form-label">Modelo </label>
                                    <input type="text" class="form-control" name="MODELO_PC" id="MODELO_PC" placeholder=" Modelo...">
                                </div>

                                <div class="mb-3">
                                    <label for="SERIAL_PC" class="form-label">Serial </label>
                                    <input type="text" class="form-control" name="SERIAL_PC" id="SERIAL_PC" placeholder=" Serial...">
                                </div>

                                <div class="mb-3">
                                    <label for="PROCESADOR_PC" class="form-label">Procesador </label>
                                    <input type="text" class="form-control" name="PROCESADOR_PC" id="PROCESADOR_PC" placeholder=" Procesador...">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-3">
                                            <label for="RAM_PC" class="form-label">RAM </label>
                                            <input type="number" class="form-control" name="RAM_PC" id="RAM_PC" placeholder=" Memoria RAM...">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="UNIDAD_RAM_PC" class="form-label">Unidad de RAM </label>
                                            <select class="form-control" name="UNIDAD_RAM_PC" id="UNIDAD_RAM_PC">
                                                <option disabled selected> Unidad RAM </option>
                                                <option value="MB">MB</option>
                                                <option value="GB">GB</option>
                                                <option value="TB">TB</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="container-sm">
                                <div class="mb-3">
                                    <label for="ALMACENAMIENTO_PC" class="form-label">Almacenamiento </label>
                                    <input type="number" class="form-control" name="ALMACENAMIENTO_PC" id="ALMACENAMIENTO_PC" placeholder=" Almacenamiento...">
                                </div>

                                <div class="mb-3">
                                    <label for="UNIDAD_ALMACENAMIENTO_PC" class="form-label">Unidad Almacenamiento</label>
                                    <input type="text" class="form-control" name="UNIDAD_ALMACENAMIENTO_PC" id="UNIDAD_ALMACENAMIENTO_PC" placeholder=" Unidad...">
                                </div>

                                <div class="mb-3">
                                    <label for="DISPONIBILIDAD_PC" class="form-label">Disponibilidad Equipo</label>
                                    <select class="form-control" name="DISPONIBILIDAD_PC" id="DISPONIBILIDAD_PC">
                                        <option disabled selected> Seleccione el Estado </option>
                                        <option value="Disponible">Disponible</option>
                                        <option value="Asignado">Asignado</option>
                                        <option value="Mantenimiento">Mantenimiento</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="SISTEMA_OPERATIVO_PC" class="form-label">Sistema Operativo</label>
                                    <input type="text" class="form-control" name="SISTEMA_OPERATIVO_PC" id="SISTEMA_OPERATIVO_PC" placeholder=" Sistema Operativo...">
                                </div>

                                <div class="mb-3">
                                    <label for="TIPO_SISTEMA_PC" class="form-label">Tipo de Sistema</label>
                                    <select class="form-control" name="TIPO_SISTEMA_PC" id="TIPO_SISTEMA_PC">
                                        <option disabled selected> Tipo de Sistema </option>
                                        <option value="32">x32</option>
                                        <option value="64">x64</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <input name="" id="btn_set_computer" class="btn btn-danger btn-user btn-block" type="submit" value="Registrar Equipo">

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

<!-- Footer -->
<?php include('./Views/Components/Footer.php'); ?>