<?php
    const URL = 'http://localhost/inventario_equipos/';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient" >
    <div class="container-sm">
        <i class="fas fa-boxes" style="color:#FFFFFF; font-size: larger;" >   
        <a class="navbar-brand " href="<?= URL ?>Index.php"></i>
            Inventario
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-text" id="navbarNavDropdown">
            <ul class="navbar-nav">
                
                <li class="nav-item dropdown col-6 col-sm-5">
                    <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Empresas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                        <li><a style="color:#000000;" class="dropdown-item" href="<?= URL; ?>Views/Empresa/RegistroEmpresa.php">Regitro Empresa</a></li>
                        <li><a style="color:#000000;" class="dropdown-item" href="<?= URL; ?>Views/Empresa/Empresas.php">Empresas Registradas</a></li>
                    </ul>
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
                </li>
            </ul>
        </div>
    </div>
</nav>