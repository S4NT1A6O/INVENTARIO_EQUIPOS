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
                    <form id="formArea" action="" method="POST">

                        <div class="form-group">
                            <label for="RAZON_SOCIAL_EMPRESA" class="form-label">Razon Social</label>
                            <input type="text" class="form-control form-control-user"
                                id="RAZON_SOCIAL_EMPRESA" name="RAZON_SOCIAL_EMPRESA" aria-describedby="Razón Social"
                                placeholder="Nombre Area Empresa...">
                        </div>

                        <input name="" id="btn_set_company" class="btn btn-danger btn-user btn-block" value="Registrar Empresa">

                    </form>

                </div>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Footer -->
<?php include('./Views/Components/Footer.php'); ?>