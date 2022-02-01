<?php
    const URL = 'http://localhost/inventario_equipos/';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient" >
    <div class="container-sm">
        <i class="fas fa-boxes" style="color:#FFD700; font-size: larger;" >   
        <a class="navbar-brand " href="<?= URL ?>Index.php"></i>
            <strong>Inventario</strong> 
        </a>
        <div class="collapse navbar-collapse navbar-text" id="navbarNavDropdown">
            <ul class="nav justify-content-center">

                <li class="nav-item">
                    <a class="nav-link active" href="<?= URL ?>?controlador=Empresas&accion=Empresas">
                        <i class="far fa-building"></i>  Empresas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="<?= URL ?>?controlador=Empleados&accion=Empleados">
                        <i class="fas fa-users"></i>  Empleados
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="<?= URL ?>?controlador=Computador&accion=Computadores">
                        <i class="fas fa-laptop"></i>  Equipos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="<?= URL ?>?controlador=Mantenimiento&accion=Mantenimientos">
                        <i class="fas fa-tools"></i>  Mantenimientos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="<?= URL ?>?controlador=Asignaciones&accion=HistorialAsignaciones">
                        <i class="fas fa-clipboard-list"></i> Asignaciones
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>