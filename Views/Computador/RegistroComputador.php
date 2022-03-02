<!-- Header -->
<?php include('./Views/Components/Header.php'); ?>

<!-- Sidebar -->
<?php include('./Views/Components/Sidebar.php'); ?>

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                            alt="...">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                            problem I've been having.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                            alt="...">
                        <div class="status-indicator"></div>
                    </div>
                    <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how
                            would you like them sent to you?</div>
                        <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                            alt="...">
                        <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Last month's report looks great, I am very happy with
                            the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                            alt="...">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                            told me that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <img class="img-profile rounded-circle"
                    src="img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>


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
                                                <option disabled selected > Unidad RAM </option>
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
                                    <label for="VERSION_SO_PC" class="form-label">Version Sistema Operativo</label>
                                    <input type="text" class="form-control" name="VERSION_SO_PC" id="VERSION_SO_PC" placeholder=" Version...">
                                </div>

                                <div class="mb-3">
                                    <label for="DISPONIBILIDAD_PC" class="form-label">Disponibilidad Equipo</label>
                                    <select class="form-control" name="DISPONIBILIDAD_PC" id="DISPONIBILIDAD_PC">
                                        <option disabled selected > Seleccione el Estado </option>
                                        <option value="Disponible">Disponible</option>
                                        <option value="Asignado">Asignado</option>
                                        <option value="Mantenimiento">Mantenimiento</option>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="mb-3">
                                            <label for="SISTEMA_OPERATIVO_PC" class="form-label">Sistema Operativo</label>
                                            <input type="text" class="form-control" name="SISTEMA_OPERATIVO_PC" id="SISTEMA_OPERATIVO_PC" placeholder=" Sistema Operativo...">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="TIPO_SISTEMA_PC" class="form-label">Tipo de Sistema</label>
                                            <select class="form-control" name="TIPO_SISTEMA_PC" id="TIPO_SISTEMA_PC">
                                                <option disabled selected > Tipo de Sistema </option>
                                                <option value="32">x32</option>
                                                <option value="64">x64</option>
                                            </select>
                                        </div>
                                    </div>
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