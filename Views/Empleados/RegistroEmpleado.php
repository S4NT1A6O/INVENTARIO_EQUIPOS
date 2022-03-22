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
        <h1 class="h3 mb-0 text-gray-800"> Empleados</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registro de Empleados</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">                     
                <form action="" method="POST">
                    <div class="p-3">
                        <div class="row row-cols-2">  
                            <div class="container">

                                <div class="mb-3">
                                    <label for="ID_EMPRESA_FK" class="form-label">Area Empresa Correspondiente</label>
                                    <select class="form-control" name="ID_EMPRESA_FK" id="ID_EMPRESA_FK">
                                        <option disabled selected > Seleccione el Area </option>
                                        <?php foreach ($data['list-empresas'] as $empresa) : ?>
                                            <option value="<?= $empresa['ID_AREA_EMPRESA'] ?>"><?= $empresa['NOMBRE_AREA_EMPRESA'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="NOMBRE_COMPLETO_EMPLEADO" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" name="NOMBRE_COMPLETO_EMPLEADO" id="NOMBRE_COMPLETO_EMPLEADO" placeholder=" Nombre Completo...">
                                </div>

                                <div class="mb-3">
                                    <label for="CORREO_EMPLEADO" class="form-label">Correo Empleado</label>
                                    <input type="email" class="form-control" name="CORREO_EMPLEADO" id="CORREO_EMPLEADO" placeholder="example@example.com...">
                                </div>

                                <div class="mb-3">
                                    <label for="TIPO_DOCUMENTO_EMPLEADO" class="form-label">Tipo Documento Identificación</label>
                                    <select class="form-control" name="TIPO_DOCUMENTO_EMPLEADO" id="TIPO_DOCUMENTO_EMPLEADO">
                                        <option disabled selected > Seleccione el Tipo de Documentos </option>
                                        <option value="TI">Tarjeta de Identidad</option>
                                        <option value="CC">Cedula de Ciudadania</option>
                                        <option value="CE">Cedula de Extranjeria</option>
                                    </select>
                                </div>

                            </div>

                            <div class="container">
                                
                                <div class="mb-3">
                                    <label for="NUMERO_DOCUMENTO_EMPLEADO" class="form-label">Número de Identificación Empleado</label>
                                    <input type="number" class="form-control" name="NUMERO_DOCUMENTO_EMPLEADO" id="NUMERO_DOCUMENTO_EMPLEADO" placeholder=" Numero de Identificación...">
                                </div>

                                <div class="mb-3">
                                    <label for="FECHA_NACIMIENTO_EMPLEADO" class="form-label">Fecha de Nacimiento Empleado</label>
                                    <input type="date" class="form-control" name="FECHA_NACIMIENTO_EMPLEADO" id="FECHA_NACIMIENTO_EMPLEADO" >
                                </div>

                                <div class="mb-3">
                                    <label for="NUMERO_CELULAR_EMPLEADO" class="form-label">Teléfono Celular Empleado</label>
                                    <input type="number" class="form-control" name="NUMERO_CELULAR_EMPLEADO" id="NUMERO_CELULAR_EMPLEADO" placeholder=" Telefono Celular...">
                                </div>

                                <div class="mb-3">
                                    <label for="NUMERO_FIJO_EMPLEADO" class="form-label">Teléfono Fijo Empleado</label>
                                    <input type="number" class="form-control" name="NUMERO_FIJO_EMPLEADO" id="NUMERO_FIJO_EMPLEADO" placeholder=" Telefono Fijo...">
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