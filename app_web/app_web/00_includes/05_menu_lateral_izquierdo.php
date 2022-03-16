 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->
  <a href="../00_m_a_base/index.php" class="brand-link">
    <img src="../../dist/img/soccer.png" style="background-color: white;" alt="CRESE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"> <strong> <?php echo $aplicacion_nombre; ?> </strong> </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $aplicacion_usuario_logeado; ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                MODULOS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">



              <li class="nav-item">
                <a href="../m_clientes/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CLIENTES</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../m_canchas/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CANCHAS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../m_reservaciones/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RESERVAS (PROPUESTA)</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="../m_clientes_tipo/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                TIPOS DE CLIENTES
                <span class="right badge badge-success">CRUD OK</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../m_clientes/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                CLIENTES
                <span class="right badge badge-success">CRUD OK</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../m_canchas/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                CANCHAS
                <span class="right badge badge-success">CRUD OK</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../m_reservaciones/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                RESERVACIONES
                <span class="right badge badge-success">CRUD OK</span>
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="../m_reservaciones/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                HORARIOS
                <span class="right badge badge-success">CRUD OK</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../m_configuraciones/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                CONFIGURACIONES
                <span class="right badge badge-success">CRUD OK</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../m_tarifas/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                PRECIOS
                <span class="right badge badge-success">CRUD OK</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../m_tarifas_descuentos/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                DESCUENTOS
                <span class="right badge badge-success">CRUD OK</span>
              </p>
            </a>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>