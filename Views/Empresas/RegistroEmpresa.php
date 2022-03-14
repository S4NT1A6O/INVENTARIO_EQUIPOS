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
        <h1 class="h3 mb-0 text-gray-800"> Areas de la Empresa</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registro de Areas</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <div class="p-3">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="RAZON_SOCIAL_EMPRESA" class="form-label">Razon Social</label>
                            <input type="text" class="form-control form-control-user"
                                id="RAZON_SOCIAL_EMPRESA" name="RAZON_SOCIAL_EMPRESA" aria-describedby="Razón Social"
                                placeholder="Nombre Area Empresa...">
                        </div>

                        <div class="form-group">
                            <label for="ESTADO" class="form-label">Estado Area</label>
                            <select class="form-control" name="ESTADO" id="ESTADO">
                                <option disabled selected > Seleccione el Estado </option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="CC">Cedula de Ciudadania</option>
                                <option value="CE">Cedula de Extranjeria</option>
                            </select>
                        </div>
                        <!-- <div class="d-grid gap-2 col-6 mx-auto"> -->
                            <!-- <input name="" id="btn_set_company" class="btn btn-danger" type="submit" value="Registrar Empresa"> -->
                        <!-- </div> -->
                        <input name="" id="btn_set_company" class="btn btn-danger btn-user btn-block" type="submit" value="Registrar Empresa">

                    </form>

                </div>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Footer -->
<?php include('./Views/Components/Footer.php'); ?>