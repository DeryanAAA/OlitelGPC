<?php 
include "bd.php";
$hoy = date("Y-m-d");
session_start();
//echo "rol User=".$_SESSION['username'] . "SELECT * FROM PERSONAS WHERE RUT = ".$_SESSION['username'];
	//echo "<script language='JavaScript'>alert($_SESSION['roluser']); </script>";
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['roluser'] == '2' ){

} else {
   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion
exit;
}


?>
<!DOCTYPE html>
<html lang="en">
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
    
    
        
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Gestor de Proyectos y Cobranza</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="./assets/vendors/font-awesome/css/font-awesome.min.css">
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
          <a class="navbar-brand brand-logo" href="principal.php">
            <img src="./img/olitel_lg.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="principal.php">
            <img src="./img/olimini.png" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
      
          <ul class="navbar-nav ml-auto">
           
   
              <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="./img/usuario.png" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                    
                <?php 
                     $usuario = "SELECT * FROM PERSONAS WHERE RUT = '".$_SESSION['username']."'";
    
                        $resultadousuario = $conexion->query($usuario);
                    
                        while ( $USERSITO = $resultadousuario->fetch_array() )    
                {
   
    
                         
                        
                       $nombreuser = $USERSITO['NOM_PERSONAS'];
        
            
                }
      
                
                 $rol = "SELECT * FROM rol, personas WHERE rol.ID_ROL = personas.ID_ROL and RUT = '".$_SESSION['username']."'";
    
                        $resultadorol = $conexion->query($rol);
                
      
                            while ( $rolsito = $resultadorol->fetch_array() )    
                {
   
    
                         
                        
                       $nombrerol= utf8_encode ($rolsito['NOM_ROL']);
        
            
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
                    
                    
                    
                  <p class="designation"><?php echo "Usuario: ".$nombrerol;?></p>
                </div>
              </a>
            </li>
             <li class="nav-item nav-category">Menú Principal</li>
          
          
          
            <li class='nav-item'><a class='nav-link' href='./principal.php'><i class='menu-icon fa fa-th'></i><span class='menu-title'>Inicio</span></a></li> 
            
          <!--  <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon typcn typcn-chevron-right"></i>
				
                <span class="menu-title">Formularios</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="./formproyectos.php">Agregar Proyectos</a>
                  </li>
				  
                  
                </ul>
              </div>
            </li>
            -->
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon typcn typcn-chevron-right"></i>
                <span class="menu-title">Listados</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="listadoproyectos.php">Listado Proyectos</a>
                  </li>
                  
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
		
			$consulta = "SELECT * FROM concepto";
			$resultado = mysqli_query($conexion, $consulta);
      
      
      
      
      
     ?>   
         
            
      
     
        

            
              
     
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
			<div class="">
			  <div class="card-body">
				<div class="d-flex justify-content-between border-bottom">
				  <h2 class="text-primary">Panel Principal</h2>
				  
				</div>
			  </div>
			</div>
            
            <div class="row">
              
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <div class="card-body">
				   <a  href="listadoproyectos.php" style="text-decoration:none;">
				  
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-receipt text-warning icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Listado de</p>
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">Proyectos</h3>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      
					 </a>
                  </div>
                </div>
              </div>
              
            </div>
			
				  <!-- content-wrapper ends -->
				  <!-- partial:../../partials/_footer.html -->
				  
				  <!-- partial -->
				</div>
				<!-- main-panel ends --><footer class="footer">
					<div class="container-fluid clearfix">
					  
					  <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Olitel © 2020 - Creado por YB
					  </span>
					</div>
				  </footer>
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
    </script>    <!-- End custom js for this page -->
  </body>
</html>