<?php include('../Programa/redireccionLogin.php');?>
<!-- NAVEGACION -->
<nav class="navbar navbar-expand-md fixed-top navegacion" style="top:0; right:0; left:0;">
    <div class="container-sm container-fluid">
        <a class="navbar-brand logo" href="home.php">
            <img src="../Imagenes/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">    
            learnify
        </a>
        <button class="navbar-toggler bg-light-nb" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row menu-nav" id="navbarNav">
            <ul class="navbar-nav col-6">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Inicio</a>
                </li>
<!-- OPCIONES NAVBAR ALUMNO -->
                <?php if ($_SESSION['tipoCuenta'] == 0) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="kardex.php">Kardex</a>
                </li>
                <?php }?>      
<!-- OPCIONES NAVBAR MAESTRO -->
                <?php if ($_SESSION['tipoCuenta'] == 1) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="ventas.php">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gestionCursos.php">Mis cursos</a>
                </li>
                <?php }?>   
<!-- OPCIONES NAVBAR ADMIN -->
                <?php if ($_SESSION['tipoCuenta'] == 2) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="categorias.php">Categorias</a>
                </li>
                <?php }?>
            </ul>


            <ul class="navbar-nav d-flex flex-row botones-login-registro col-6">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center dropdown-cuenta" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">  
                    <?php echo $inciado; ?>
                        <img src="../Imagenes/avatar.svg" class="rounded-circle ms-2 position-relative" width="22" height="22" alt="Avatar">

                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item d-flex align-items-center gap-3" href="mensajes.php">Mensajes
                        </a></li>
                        <li><a class="dropdown-item" href="cuenta.php">Mi cuenta</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../Programa/logout.php">Cerrar sesión <i class="bi bi-box-arrow-right ms-2"></i></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>