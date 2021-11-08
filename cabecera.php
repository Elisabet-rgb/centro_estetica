<header class="main-header">
    <!-- Logo -->
    <a href="Vistas/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C E</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CENTRO ESTETICA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
                                   
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
 <!-- para la foto condición si esta vacio-->
                <?php

                if ($_SESSION["foto"] == ""){
                  echo'<img src="http://localhost/centro_estetica/Vistas/img/defecto.png" class="user-image" alt="User Image">';
                }else{

                   echo'<img src="http://localhost/centro_estetica/'.$_SESSION["foto"].'" class="user-image" alt="User Image">';
                }

                ?>

               <!-- nombre del usuario-->
              
              <span class="hidden-xs"><?php echo $_SESSION["nombre"]; echo "";echo $_SESSION["apellido"];?></span>
            </a>
            <ul class="dropdown-menu">
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                   <!-- para el rol-->
                  <?php

                  echo '<a href="http://localhost/centro_estetica/perfil-'.$_SESSION["rol"].'" class="btn btn-primary btn-flat">Perfil</a>';

                  ?>

                  
                </div>
                <div class="pull-right">
                  <a href="http://localhost/centro_estetica/salir" class="btn btn-danger btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>

