<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['roladmin'] == '1' ){

} else {

   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}




?>



<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
      <?php include "bd.php"; ?>
      <?php $hoy = date("Y-m-d") ?>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Sistema Gestor de Proyectos y Cobranza</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/jvectormap/jquery-jvectormap.css">
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="./img/olimini.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
       <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="principaladmin.php">
            <img src="./img/olitel_lg.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="principaladmin.php">
            <img src="./img/olimini.png" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
         
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
             
             
            </li>
            <li class="nav-item dropdown">
             
              
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="./img/usuario.png" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                    
                <?php 
                     $usuario = "SELECT * FROM PERSONAS WHERE RUT = ".$_SESSION['username'];
    
                        $resultadousuario = $conexion->query($usuario);
                    
                        while ( $USERSITO = $resultadousuario->fetch_array() )    
                {
   
    
                         
                        
                       $nombreuser = $USERSITO['NOM_PERSONAS'];
        
            
                }
      
                
                 $rol = "SELECT * FROM rol, personas WHERE rol.ID_ROL = personas.ID_ROL and RUT = ".$_SESSION['username'];
    
                        $resultadorol = $conexion->query($rol);
                
      
                            while ( $rolsito = $resultadorol->fetch_array() )    
                {
   
    
                         
                        
                       $nombrerol= $rolsito['NOM_ROL'];
        
            
                }
      
                ?>      
                    
                    
                    
                  <p class="mb-1 mt-3 font-weight-semibold"><?php echo $nombreuser;?></p>
                  
                </div>
                
                
                <a href="./cerrarsession.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Cerrar Sesión</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        


        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $nombreuser;?></p>
                    
                    
                    
                  <p class="designation"><?php echo "tipo de usuario: ".$nombrerol;?></p>
                </div>
              </a>
            </li>
              
              
              
           <li class="nav-item nav-category">Menú Principal</li>
          
          
          
            
               
           <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon typcn typcn-chevron-right"></i>
                <span class="menu-title">Formularios</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="./formproyectosadmin.php">Agregar Proyectos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./formagregarusuario.php">Agregar Usuarios</a>
                  </li><!--
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/validation.html">Validation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/step-wizard.html">Step Wizard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/wizard.html">Wizard</a>
                  </li>-->
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon typcn typcn-chevron-right"></i>
                <span class="menu-title">Listados</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="listadoproyectosadmin.php">Listado Proyectos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="listadopersonas.php">Listado Usuarios</a>
                  </li><li class="nav-item">
                    <a class="nav-link" href="listadocc.php">Listado CC</a>
                  </li><!--
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a>
                  </li>-->
                </ul>
              </div>
            </li>
     
       <!--     
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manejo de usuarios</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/mutli-level-login.html">Multi Step Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a>
                  </li>
                </ul>
              </div>
            </li>-->
           
            
            
          
          </ul>
        </nav>
          
          
          
          
          
          
          
          
        <!-- NO QUITAR FORM -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
             
              <div class="col-md-6 grid-margin stretch-card">
                
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
               
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                
              </div>
            
            
             <?php
                
               $cp = $_GET['cp'];
               
                
         
                include ("bd.php");
          
                
            ?>
              
                
                
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Añadir colaboradores</h4>
                      
                   
                          
                      
                    <form class="form-sample" method="post" action="controladoragregarcolaboradmin.php">
                        
                    
                            <?php 
    
    $query = "SELECT * FROM CARGO";
    
    $result = $conexion->query($query);
    ?>  
                        
                      <div class="row">
                        <div class="col-md-6">
                            
      <input type="hidden" name="cp" id="cp" value="<?php echo $cp ?>">

                            
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Cargo</label>
                            <div class="col-sm-9">
                                
                            <select  class="form-control" name="cargo" id="cargo">
                            
                                
                                <?php 
            while ($row = $result->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo$row['ID_CARGO'] ?>">
                <?php echo $row['NOM_CARGO']; ?>
                </option>
            
    <?php } ?>
 
      </select>
                            </div>
                          </div>
                        </div>
                       
                            <div class="col-md-6">
                    <?php 
    
    $query = "SELECT * FROM PERSONAS";
    
    $result = $conexion->query($query);
    ?>
                                      
                       
                            
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Persona</label>
                            <div class="col-sm-9">
                                
                            <select  class="form-control" name="persona" id="persona">
                                
                                 
                                <?php 
            while ($row = $result->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo$row['ID_PERSONAS'] ?>">
                <?php echo $row['NOM_PERSONAS']; ?>
                </option>
            
    <?php } ?>
                                
                           
 
      </select>
                            </div>
                          </div>
                        </div>
                         
                          
                          
                      </div>
                     
                    
                        
                      <div class="row">
                      
                       
                          
                         
                          
                          
                      </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                             <button type="submit" class="btn btn-success mr-2">Agregar</button>
                            
                        
                      
                              <a href="formeditproyectosadmin.php?cp=<?php echo $cp; ?>"><input class="btn btn-light" type="button" value="Cancelar"></a>

                    </form>
                      <br>
                      

                  
                  </div>
                </div>
              </div>
              <div class="col-12">

              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              
              <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Olitel © 2020 - Creado por YB
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./assets/vendors/select2/select2.min.js"></script>
    <script src="./assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="./assets/vendors/icheck/icheck.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/shared/off-canvas.js"></script>
    <script src="./assets/js/shared/hoverable-collapse.js"></script>
    <script src="./assets/js/shared/misc.js"></script>
    <script src="./assets/js/shared/settings.js"></script>
    <script src="./assets/js/shared/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./assets/js/shared/file-upload.js"></script>
    <script src="./assets/js/shared/iCheck.js"></script>
    <script src="./assets/js/shared/typeahead.js"></script>
    <script src="./assets/js/shared/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>