<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['rolcobr'] == '3' ){

} else {

   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}





?>



<!DOCTYPE html>

<html lang="en">
  <head>
      
 <style>

        
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
        
        
  
    
          
        
    </style>      

    <!-- Required meta tags -->
      <?php include "bd.php"; ?>
      <?php $hoy = date("Y-m-d") ?>
      
      
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Gestor</title>
      
             
      
      
      <script type="text/javascript">
      
      
       Function confirmDelete(){
           
           
           var respuesta = confirm("¿Seguro que deseas eliminar el cp?");
           
           
           if(respuesta == true){
               
               return true;
           }else{
               
               return  false;
           }
           
           
           
       }   
      
      
      
      </script>   
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
          <a class="navbar-brand brand-logo" href="principalcobranza.php">
            <img src="./img/olitel_lg.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="principalcobranza.php">
            <img src="./img/olimini.png" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
        <?php   
      $busqueda = strtolower($_REQUEST['busqueda']);
      
          if(empty($busqueda)){
              
              header("location: listadoservicios.php");
          }
            ?>  
            
            
          <form class="ml-auto search-form d-none d-md-block" action="buscar_servicioscob.php" method="get">
            <div class="form-group">
              <input name="busqueda" type="search" class="form-control" placeholder="Buscar" value="<?php echo $busqueda; ?>">
            </div>
          </form>
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
              
                <a href="./cerrarsession.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Sign Out</a>
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
        
        <div class="theme-setting-wrapper">
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Demos </p>
            </div>
            <div class="demo-screen-wrapper">
              <a href="../demo_1/index.html" class="demo-thumb-image" id="theme-light-switch">
                <img src="../assets/images/screenshots/default.jpg" alt="demo image">
              </a>
              <a href="../demo_2/index.html" class="demo-thumb-image">
                <img src="../assets/images/screenshots/default-two.jpg" alt="demo image">
              </a>
              <a href="../demo_3/index.html" class="demo-thumb-image" id="theme-dark-switch">
                <img src="../assets/images/screenshots/default-dark.jpg" alt="demo image">
              </a>
              <a href="../demo_4/index.html" class="demo-thumb-image">
                <img src="../assets/images/screenshots/analytics-dasboard.jpg" alt="demo image">
              </a>
              <a href="../demo_5/index.html" class="demo-thumb-image">
                <img src="../assets/images/screenshots/Marketing-dashboard.jpg" alt="demo image">
              </a>
              <a href="../demo_6/index.html" class="demo-thumb-image">
                <img src="../assets/images/screenshots/crm-dashboard.jpg" alt="demo image">
              </a>
              <a href="../demo_7/index.html" class="demo-thumb-image">
                <img src="../assets/images/screenshots/modern-dashboard.jpg" alt="demo image">
              </a>
              <a href="../demo_8/index.html" class="demo-thumb-image">
                <img src="../assets/images/screenshots/e-commerce_dashboard.jpg" alt="demo image">
              </a>
              <a href="../demo_9/index.html" class="demo-thumb-image">
                <img src="../assets/images/screenshots/finance-dashboard.jpg" alt="demo image">
              </a>
              <a href="../demo_10/index.html" class="demo-thumb-image">
                <img src="../assets/images/screenshots/classic-dashboard.jpg" alt="demo image">
              </a>
              <a href="../demo_11/index.html" class="demo-thumb-image">
                <img src="../assets/images/screenshots/horizontal-screens.jpg" alt="demo image">
              </a>
            </div>
          </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
          </div>
          <ul class="chat-list">
            <li class="list active">
              <div class="profile">
                <img src="../assets/images/faces/face1.jpg" alt="image">
                <span class="online"></span>
              </div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">19 min</small>
            </li>
            <li class="list">
              <div class="profile">
                <img src="../assets/images/faces/face2.jpg" alt="image">
                <span class="offline"></span>
              </div>
              <div class="info">
                <div class="wrapper d-flex">
                  <p>Catherine</p>
                </div>
                <p>Away</p>
              </div>
              <div class="badge badge-success badge-pill my-auto mx-2">4</div>
              <small class="text-muted my-auto">23 min</small>
            </li>
            <li class="list">
              <div class="profile">
                <img src="../assets/images/faces/face3.jpg" alt="image">
                <span class="online"></span>
              </div>
              <div class="info">
                <p>Daniel Russell</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">14 min</small>
            </li>
            <li class="list">
              <div class="profile">
                <img src="../assets/images/faces/face4.jpg" alt="image">
                <span class="offline"></span>
              </div>
              <div class="info">
                <p>James Richardson</p>
                <p>Away</p>
              </div>
              <small class="text-muted my-auto">2 min</small>
            </li>
            <li class="list">
              <div class="profile">
                <img src="../assets/images/faces/face5.jpg" alt="image">
                <span class="online"></span>
              </div>
              <div class="info">
                <p>Madeline Kennedy</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">5 min</small>
            </li>
            <li class="list">
              <div class="profile">
                <img src="../assets/images/faces/face6.jpg" alt="image">
                <span class="online"></span>
              </div>
              <div class="info">
                <p>Sarah Graves</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">47 min</small>
            </li>
          </ul>
        </div>
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
                    <a class="nav-link" href="formagrproyectocobranza.php">Agregar Proyectos</a>
                  </li>
                <!--
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
                    <a class="nav-link" href="listadoproyectoscobranza.php">Proyectos</a>
                  </li>  <li class="nav-item">
                    <a class="nav-link" href="listadoservicios.php">Servicios Fijos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="listadoip.php">Informes de Pago</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="listadofacturascobranza.php">Facturas</a>
                  </li><!--
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a>
                  </li>-->
                </ul>
              </div>
            </li>
            
          
            
            
          
          </ul>
        </nav>
          
          
          
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
          
          
            $EO_COB = '';
            if($busqueda == 'facturado'){
                
                $EO_COB = "OR ID_EO_COB LIKE '%1%'";
            }else if($busqueda == 'por enviar'){
                
                $EO_COB = "OR ID_EO_COB LIKE '%2%'";
                
            }else if($busqueda == 'enviado'){
                
                $EO_COB = "OR ID_EO_COB LIKE '%3%'";
                
            }else if($busqueda == 'en ejecucion'){
                
                $EO_COB = "OR ID_EO_COB LIKE '%4%'";
                
            }else if($busqueda == 'nulo'){
                
                $EO_COB = "OR ID_EO_COB LIKE '%5%'";
                
            }else if($busqueda == 'team'){
                
                $EO_COB = "OR ID_EO_COB LIKE '%6%'";
                
            }else if($busqueda == 'por facturar'){
                
                $EO_COB = "OR ID_EO_COB LIKE '%7%'";
                
            }else if($busqueda == 'oc por confirmar'){
                
                $EO_COB = "OR ID_EO_COB LIKE '%8%'";
                
            }
		
			$sql_registe = mysqli_query($conexion,"SELECT * FROM CONCEPTO WHERE (
            
            CP LIKE '%$busqueda%' OR
            NOMBRE LIKE '%$busqueda%' 
            $EO_COB AND
            
            ID_TIPO = 2
            
            )
            
            
            
            
            ");
      
    
      
     ?>    
          
          
          
          
          
          
          
          
          
          
          
        <!-- partial -->
        <div class="main-panel">
            
          <div class="content-wrapper">
              
            <div class="row">
            
              
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">SERVICIOS</h4>
                     <p>   <a href="generar_excel.php"><button type="button" class="btn btn-default"><img src="img/microsoft-excel.png" width="16px" height="16px"> Generar Excel</button></a></p>
                 <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th id='tmlet'> CP </th>
                          <th id='tmlet'> NOMBRE <br><br> PROYECTO</th>
                          <th id='tmlet' > CC </th>
                          <th id='tmlet'> FECHA INICIO REAL</th>
                          <th id='tmlet'> FECHA INICIO ESTIMADO </th>

                          
                          <th id='tmlet'> VALOR </th>
                            <th id='tmlet'> ACCIONES </th>
                        </tr>
                      </thead>
                      <tbody id="tmlet">
                       
                        <?php  while($fila = mysqli_fetch_array($sql_registe)){
    
    
    
       
                        echo "<tr id='tmlet'><td id='tmlet'>"; 
                          
                            
                          echo $fila['CP']."<br>".ucfirst($fila['ESTADO'])."</td><td id='tmlet'>";
                          echo ucfirst($fila['NOMBRE'])."</td><td id='tmlet'>";
    
                          $query3="SELECT * FROM centro_de_costo where id_cc = ".$fila['ID_CC'];
                        $resultado3= $conexion->query($query3);
                        $row3=$resultado3->fetch_assoc();
    
                        echo ucfirst($row3['NOM_CC'])."</td><td id='tmlet'>";
                        echo $fila['INI_REAL']."</td><td id='tmlet'>";
                        echo $fila['INI_ASIG']."</td><td id='tmlet'>";
    
    
                        $query6="SELECT SUM(VALOR_FACTURADO) AS CN FROM  CONCEPTO, INFORME_DE_PAGO where INFORME_DE_PAGO.CP = CONCEPTO.CP AND CONCEPTO.CP = ".$fila['CP'];
                       $resultado6 = mysqli_query($conexion, $query6);
                            
                            while($row6 = mysqli_fetch_array($resultado6)){
                         
                            $suma = $row6['CN'];
                            }
    
    
    
    
    

                          echo  number_format($fila['VALORPROYECTO'], 0, ",", ".")."</td>";
      /*  $query6="SELECT SUM(VALOR_FACTURADO) AS CN FROM  CONCEPTO, INFORME_DE_PAGO where INFORME_DE_PAGO.CP = CONCEPTO.CP AND CONCEPTO.CP = ".$fila['CP'];
                       $resultado6 = mysqli_query($conexion, $query6);
                            
                            while($row6 = mysqli_fetch_array($resultado6)){
                            echo $row6['CN']."</td>";
                            
                            }*/
    
                            
    
                        echo  "<td><a href='formeditproyectoscobranza.php?cp=".$fila['CP']."'><section class='imgtb'></section></a> </ln> </ln> </ln>";
    
                            
     echo "<a href= 'detalleproyectocob.php?cp=".$fila['CP']."'><section class='dtl'></section></a>";

    
                         echo "<a href= 'emitirip.php?cp=".$fila['CP']."'><button type='button' class='btn btn-success mr-2'> IP </button></a> </td>";
    
                        echo "</tr>";    
                            
                        }
                          ?>
                          
                          
                          </tbody>
                      </table>
                      
                      
                      
                </div>
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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/shared/off-canvas.js"></script>
    <script src="./assets/js/shared/hoverable-collapse.js"></script>
    <script src="./assets/js/shared/misc.js"></script>
    <script src="./assets/js/shared/settings.js"></script>
    <script src="./assets/js/shared/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
      
  </body>
</html>