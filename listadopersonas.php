<!DOCTYPE html>
<html lang="en">
    
       <?php include "bd.php"; ?>
      <?php $hoy = date("Y-m-d") ?>
      
    
    <?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['roladmin'] == '1' ){

} else {

   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}




?>
    
    
    

  <head>
      
      
      
<style>
        #barra{
            
            height: 10px;
        }  
      
         #aviso{
            
            color: red;
            font-size: 10px;
            text-align: center;
            
        }
        
        #separadormiles{
            
            background-color: black!important;
        }
        
           .imgtb{
            
            height: 15px;
            width: 15px;
            background-image: url(img/edit.png);
            background-size: cover;
             float: left;
             margin-right: 10px;
        }
        
        
             .dtl{
            
            height: 15px;
            width: 15px;
            background-image: url(img/ojo.png);
            background-size: cover;
             float: left;
             margin-right: 10px;
        }
          
          
        #tmlet{
            
            font-size: 10px!important;
            
        }
        
        
        
        .table-bordered{
            
            font-size: 1px!important;
            
            
        }
          
          .btn-default{
              
              padding: 0px!important;
          }
        
        .btn-success{
            
            font-size: 10px!important;
        }
        
        .table-bordered{
            
            margin: 0px!important;
            padding: 0px!important;
        }
      
             .elim{
            
            height: 15px;
            width: 15px;
            background-image: url(img/eliminar.png);
            background-size: cover;
             float: left;
             margin-right: 10px;
        }
          
           
        
    </style>
      


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Gestor de Proyectos y Cobranza</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="./assets/vendors/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css">
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
      <!-- partial:../../partials/_navbar.html -->
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
      
         <!-- <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>-->
          <ul class="navbar-nav ml-auto">
           
   
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
        <!-- partial:../../partials/_settings-panel.html -->
      
        <div class="theme-setting-wrapper">
         
        </div>
        
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
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
                  </li>
				   <li class="nav-item">
                    <a class="nav-link" href="./formcc.php">Agregar CC</a>
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
     
            
          
          
          
      <?php
          
      require("bd.php");    
          $conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
      
      //Validar conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}
		
			//Validar que exista la base de datos
			mysqli_select_db($conexion, $base_datos) or die("No se encuentra la base de datos.");
			mysqli_set_charset($conexion, "utf8");
		
			$consulta = "SELECT * FROM PERSONAS where ACTIVO = 'si'";
			$resultado = mysqli_query($conexion, $consulta);
      
      
      
      
      
     ?>    
          
          
     
        

            
              
     
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PERSONAS</h4>
                                          <p>   <a href="generar_excel_pers.php"><button type="button" class="btn btn-default"><img src="img/microsoft-excel.png" width="16px" height="16px"> Generar Excel</button></a></p>

                      
                    <div class="table-responsive">
                        
                                              
                        
                      <table id="order-listing" class="table">
                          

                        <thead>
                        <tr>
                          <th> RUT </th>
                          <th> NOMBRE</th>
                          <th> ROL </th>
                          
                          <th> CLAVE </th>
                            
                            <th>ACCIONES</th>
                            
                        </tr>
                      </thead>
                        <tbody>
                            
                            
                             <?php  while($fila = mysqli_fetch_array($resultado)){ ?>
                           
                      


                            
                          <tr>
                            <td><?php echo ucfirst($fila['RUT']); ?></td>
                            <td><?php  echo ucfirst($fila['NOM_PERSONAS']); ?></td>
                              
                              
                              
                            <td><?php   echo $fila['ID_ROL']; ?></td>
                              
                              
                            <td><?php echo $fila['CLAVE']; ?></td>
                              
                           
                     
                              
                        
                            
                         
                            
                           
                            
                            <td>
                             
                                <a href='formeditpersonas.php?idpersona=<?php echo $fila['ID_PERSONAS'] ?>'> <section class='imgtb'></section></a>
                                
                                <a href= 'controladoreliminarpersonas.php?idpersona=<?php echo $fila['ID_PERSONAS'] ?>'><section class='elim'></section></a>
                                
                            </td>
                          </tr>
                         
                         
                         
                      
                        <?php    }
                          ?>
                       
                        
                         
                   
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 grid-margin">
            
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
      
 
    <script src="./assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="./assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="./assets/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/shared/off-canvas.js"></script>
    <script src="./assets/js/shared/hoverable-collapse.js"></script>
    <script src="./assets/js/shared/misc.js"></script>
    <script src="./assets/js/shared/settings.js"></script>
    <script src="./assets/js/shared/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
      
        <script>
        $(document).ready(function() {
            $('#order-listing').DataTable({
                "order": [
                    [0, "desc"]
                ],
                "language": {
                    "url": "lib/Spanish.json" 
                }

            });
        });
    </script>
      
        
      
     
      

    <!-- End custom js for this page -->
  </body>
</html>