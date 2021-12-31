<?php
    const URL = 'http://localhost/inventario_equipos/';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient" >
    <div class="container-sm">
        <i class="fas fa-boxes" style="color:#FFFFFF; font-size: larger;" >   
        <a class="navbar-brand " href="<?= URL ?>Index.php"></i>
            Inventario
        </a>
        <div class="collapse navbar-collapse navbar-text" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <ul class="nav justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link active" href="<?= URL ?>?controlador=Empresas&accion=Empresas">
                            Empresas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="<?= URL ?>?controlador=Empleados&accion=Empleados">Empleados</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="<?= URL ?>?controlador=Computador&accion=Computadores">Equipos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="<?= URL ?>?controlador=Computador&accion=HistorialAsignaciones">Asignaciones</a>
                    </li>

                </ul>
<!--                 
                <li class="nav-item dropdown col-6 col-sm-5">
                </li>

                <li class="nav-item dropdown col-6 col-sm-5">
                    <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Empleados
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a style="color:#000000;" class="dropdown-item" href="<?= URL; ?>Views/Empleado/RegistroEmpleado.php">Registro Empleado</a></li>
                        <li><a style="color:#000000;" class="dropdown-item" href="<?= URL; ?>Views/Empleado/Empleados.php">Empleados Resgistrados</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown col-6 col-sm-5">
                    <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Computadores
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a style="color:#000000;" class="dropdown-item" href="<?= URL; ?>?controlador=Computador&accion=RegistroComputador">Registro Computador</a></li>
                        <li><a style="color:#000000;" class="dropdown-item" href="<?= URL; ?>Views/Computador/Computadores.php">Computadores Registrado</a></li>
                        <li><a style="color:#000000;" class="dropdown-item" href="<?= URL; ?>Views/Computador/AsignarComputador.php">Asignar Computador</a></li>
                        <li><a style="color:#000000;" class="dropdown-item" href="<?= URL; ?>Views/Computador/HistorialAsignaciones.php">Historial de Asignaciones</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</nav>