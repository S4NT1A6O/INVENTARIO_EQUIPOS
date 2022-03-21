<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-boxes"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Inventario <sup>Prestamos</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if ($_SESSION['user-data']['ID_ROL_FK'] == 1) { ?>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-users"></i>
                <span>Empleados</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= URL ?>?controlador=Empleados&accion=Empleados">Listado Empleados</a>
                    <a class="collapse-item" href="<?= URL ?>?controlador=Empleados&accion=RegistroEmpleado">Registrar Empleados</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_2" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-laptop"></i>
                <span>Computadores</span>
            </a>
            <div id="collapseUtilities_2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= URL ?>?controlador=Computador&accion=Computadores">Listado Computadores</a>
                    <a class="collapse-item" href="<?= URL ?>?controlador=Computador&accion=RegistroComputador">Registrar Computadores</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_3" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fa-solid fa-dolly"></i>
                <span>Items</span>
            </a>
            <div id="collapseUtilities_3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= URL ?>?controlador=Items&accion=Items">Listado Items</a>
                    <a class="collapse-item" href="<?= URL ?>?controlador=Items&accion=RegistroItem">Registrar Item</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_4" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-tools"></i>
                <span>Mantenimiento</span>
            </a>
            <div id="collapseUtilities_4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= URL ?>?controlador=Mantenimiento&accion=Mantenimientos">Mantenimientos Activos</a>
                    <a class="collapse-item" href="<?= URL ?>?controlador=Mantenimiento&accion=HistorialMantenimiento">Historial Mantenimientos</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_5" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-clipboard-list"></i>
                <span>Prestamos</span>
            </a>
            <div id="collapseUtilities_5" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= URL ?>?controlador=Asignaciones&accion=HistorialAsignaciones">Historial Prestamos</a>
                    <a class="collapse-item" href="<?= URL ?>?controlador=AsignacionesItems&accion=HistorialAsiItems">Historial Items</a>
                    <a class="collapse-item" href="<?= URL ?>?controlador=Asignaciones&accion=AsignarComputador">Prestar PC</a>
                    <a class="collapse-item" href="<?= URL ?>?controlador=Asignaciones&accion=AsignarItem">Prestar Item</a>
                </div>
            </div>
        </li>

    <?php } ?>

    <?php if ($_SESSION['user-data']['ID_ROL_FK'] == 2) { ?>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_2" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-laptop"></i>
                <span>Computadores</span>
            </a>
            <div id="collapseUtilities_2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= URL ?>?controlador=Computador&accion=Computadores">Listado Computadores</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_3" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fa-solid fa-dolly"></i>
                <span>Items</span>
            </a>
            <div id="collapseUtilities_3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= URL ?>?controlador=Items&accion=ItemsAsignados">Items Asignados</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_4" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-tools"></i>
                <span>Mantenimiento</span>
            </a>
            <div id="collapseUtilities_4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= URL ?>?controlador=Mantenimiento&accion=Mantenimientos">Mantenimientos Activos</a>
                </div>
            </div>
        </li>

    <?php } ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">