<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light bg-dark border-bottom fixed-top">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i> </a>
        </li>
      <li class="nav-item d-sm-inline-block" style="margin-top:-3px;">
        <a href="#" class="nav-link">Plataforma para desarrolladores</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="ml-3 nav-item bg-danger d-none d-sm-inline-block">
          <a class="nav-link" href="../salir"><i class="fa fa-sign-out"></i> Cerrar sesión</a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-primary">
      <img src="<?php echo $logo; ?>" alt="Ecobonus logo" class="brand-image ">
      <span class="brand-text font-weight-light"><?php echo $nombreapp; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img class="img-circle" src="https://i.imgur.com/vZCBa02.png">
        </div>
        <div class="info">
          <a href="ajustes" class="d-block"><b>Elias Astrada</b></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <li class="nav-item active ">
            <a href="inicio" class="nav-link <?php echo $active_inicio; ?>">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>Inicio</p>
            </a>
          </li>
            <li class="nav-item active ">
            <a href="inicio" class="nav-link <?php echo $active_apps; ?>">
              <i class="nav-icon fa fa-th"></i>
              <p>Tus aplicaciones</p>
            </a>
          </li>
          <div class="dropdown-divider d-md-none"></div>
          <li class="nav-item active bg-danger d-md-none">
            <a href="../salir" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>Cerrar Sesión</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


