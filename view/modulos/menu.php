<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="view/presentacion/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Calzado Franchesco</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="view/presentacion/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="Perfil" class="d-block">
                    <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php
                $rol = $_SESSION['rol'];
                if ($rol == 'Administrador') { ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Personal
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Ver-personal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ver personal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Registrar-personal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Registrar personal</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-archive"></i>
                            <p>
                                Productos
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Categoria" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Categoria</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Materia-prima" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Materia prima</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Producto" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Productos</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } else if ($rol == 'Bodega') { ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-archive"></i>
                            <p>
                                Productos
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Materia-prima" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Materia prima</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } else if ($rol == 'Producccion') { ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-archive"></i>
                            <p>
                                Productos
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Categoria" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Categoria</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Producto" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Productos</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>