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
            <!-- <div class="row"> -->
                <ul class="navbar-nav col-md-3 col-lg-2">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="kardex.php">Kardex</a>
                    </li>
                </ul>

                <ul class="navbar-nav col-md-5 col-lg-8">
                    <!-- SEARCHBAR -->
                    <section class="busqueda-curso w-100">
                        <form class="form-busqueda gap-1 d-flex">
                            <input type="text" class="form-control input-busqueda bg-light-nb border-0" placeholder="Busca un curso...">
                            <div class="dropdown">
                            <!-- <button class="btn borde-terciario dropdown-toggle categoria-busqueda mb-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categoría
                            </button>
                            <ul class="dropdown-menu overflow-y-scroll" style="max-height: 200px;">
                                <li><a class="dropdown-item" href="#">Nombre de categoria</a></li>
                            </ul> -->
                            </div>
                            <button type="search" class="btn boton-terciario boton-busqueda" aria-label="Search"> <i class="bi bi-search"></i> </button>                
                        </form>
                    </section>
                </ul>

                <ul class="navbar-nav d-flex flex-row botones-login-registro col-md-4 col-lg-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center dropdown-cuenta" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">  
                        <?php echo $inciado; ?>
                            <img src="../Imagenes/avatar.svg" class="rounded-circle ms-2 position-relative" width="22" height="22" alt="Avatar">
                            <span class="position-absolute top-10 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item d-flex align-items-center gap-3" href="mensajes.php">Mensajes<span class="badge bg-danger">1</span>
                            </a></li>
                            <li><a class="dropdown-item" href="#">Mi cuenta</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../Programa/logout.php">Cerrar sesión <i class="bi bi-box-arrow-right ms-2"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>