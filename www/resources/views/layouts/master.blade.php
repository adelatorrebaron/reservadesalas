<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Reserva de Salas</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="hold-transition layout-navbar-fixed">
  <div class="wrapper" id="app">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
        
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
    
          <li class="nav-item dropdown user user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="./img/profile.jpg" class="user-image img-circle elevation-2" alt="User Image">
                <span class="hidden-xs"> {{ Auth::user()->name }} </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                  <img src="./img/profile.jpg" class="img-circle elevation-2" alt="User Image">
                  <p>
                      Administrador
                      <small>Miembro desde Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-4 text-center">
                      <a href="#">Perfil</a>
                    </div>
                    <div class="col-4 text-center">
                    </div>                
                    <div class="col-4 text-center">
                      <a href="#">Salir</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
              </ul>
            </li>
    
          </ul>
      </nav>
      <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4  sidebar-focused">
      <!-- Brand Logo -->
      <router-link to="/dashboard" class="brand-link navbar-teal">
        <img src="./img/logo.png" alt="Resa Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-bold">Reserva de Salas</span>
      </router-link>
  
      <!-- Sidebar -->
      <div class="sidebar">
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header">SEGURIDAD</li>
            <li class="nav-item">
              <router-link to="/usuarios" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Usuarios</p>
              </router-link>
            </li>
            <li class="nav-item">
              <a href="./permisos.index.html" class="nav-link">
                <i class="nav-icon fas fa-key"></i>
                <p>Permisos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./roles.index.html" class="nav-link">
                <i class="nav-icon fas fa-user-tag"></i>
                <p>Roles</p>
              </a>
            </li>
          
            <li class="nav-header">TABLAS DE MANTENIMIENTO</li>
            <li class="nav-item">
              <a href="./ministerios.index.html" class="nav-link">
                <i class="nav-icon fas fa-city"></i>
                <p>Ministerio</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./edificios.index.html" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>Edificios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./diasfestivos.index.html" class="nav-link">
                <i class="nav-icon fas fa-calendar-day"></i>
                <p>Dias festivos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./tiposdesalas.index.html" class="nav-link">
                <i class="nav-icon fas fa-shapes"></i>
                <p>Tipos de salas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./salas.index.html" class="nav-link">
                <i class="nav-icon fas fa-person-booth"></i>
                <p>Salas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./gruposdeturnos.index.html" class="nav-link">
                <i class="nav-icon fas fa-layer-group"></i>
                <p>Grupos de turnos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./cierredesalas.index.html" class="nav-link">
                <i class="nav-icon fas fa-door-closed"></i>
                <p>Cierre de salas</p>
              </a>
            </li>                         
  
            <li class="nav-header">GESTION DE RESERVAS</li>
            <li class="nav-item">
              <a href="./reservas.index.html" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>Mis reservas</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <router-view></router-view>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
