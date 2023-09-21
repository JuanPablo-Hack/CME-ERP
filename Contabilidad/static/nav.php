<nav class="topnav navbar navbar-light">
<button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
    <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Buscar..." aria-label="Search">
    </form>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="../assets/images/logo_cme.png" alt="..." class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="#">Cerrar Sesión</a>
            </div>
        </li>
    </ul>
</nav>
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="index.php">
                <img src="../assets/images/logo_cme.png" alt="Logo_Menu" class="logo_menu">
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="index.php">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Panel de control</span>
                </a>
            </li>
        </ul>
       
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Área Contable</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="cobros.php">
                    <i class="fe fe-dollar-sign fe-16"></i>
                    <span class="ml-3 item-text">Cobros</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-archive fe-16"></i>
                    <span class="ml-3 item-text">Facturas</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="facturas_emitidas.php"><span class="ml-1 item-text">Gastos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="facturas_pagar.php"><span class="ml-1 item-text">Emitidas</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        
    </nav>
</aside>