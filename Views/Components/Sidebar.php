<?php
    const URL = 'http://localhost/inventario_equipos/';
?>
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

    <!-- Nav Item - Dashboard -->
    <!-- <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Area Empresa
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="far fa-building"></i>
            <span>Area Empresa</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= URL ?>?controlador=Empresas&accion=Empresas" >Listado de Areas</a>
                <a class="collapse-item" href="<?= URL ?>?controlador=Empresas&accion=RegistroEmpresa">Registrar Area</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-users"></i>
            <span>Empleados</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= URL ?>?controlador=Empleados&accion=Empleados">Listado Empleados</a>
                <a class="collapse-item" href="<?= URL ?>?controlador=Empleados&accion=RegistroEmpleado">Registrar Empleados</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_2"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-laptop"></i>
            <span>Computadores</span>
        </a>
        <div id="collapseUtilities_2" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= URL ?>?controlador=Computador&accion=Computadores">Listado Computadores</a>
                <a class="collapse-item" href="<?= URL ?>?controlador=Computador&accion=RegistroComputador">Registrar Computadores</a>
            </div>
        </div>
    </li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_3"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-tools"></i>
        <span>Mantenimiento</span>
    </a>
    <div id="collapseUtilities_3" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= URL ?>?controlador=Mantenimiento&accion=Mantenimientos">Listado Computadores</a>
            <a class="collapse-item" href="<?= URL ?>?controlador=Empresas&accion=RegistroEmpresa">Registrar Computadores</a>
        </div>
    </div>
</li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities_4"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-clipboard-list"></i>
            <span>Prestamos</span>
        </a>
        <div id="collapseUtilities_4" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= URL ?>?controlador=Asignaciones&accion=HistorialAsignaciones">Listado Prestamos</a>
                <a class="collapse-item" href="<?= URL ?>?controlador=Computador&accion=RegistroComputador">Registrar Prestamos</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->