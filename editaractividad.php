<?php

session_start();
$proyecto = $_GET['p'];
//$_SESSION['roladmin']=2;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && ($_SESSION['roladmin'] == '2' or $_SESSION['roladmin'] == '1')   ){

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
    <title>Sistema Gestor de Proyectos y Cobranza</title>
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
          <a class="navbar-brand brand-logo" href="principal.php">
            <img src="./img/olitel_lg.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="principal.php">
            <img src="./img/olimini.png" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <!--<form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>-->
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
                     $usuario = "SELECT * FROM PERSONAS WHERE RUT ='".$_SESSION['username']."'";
    
                        $resultadousuario = $conexion->query($usuario);
                    
                        while ( $USERSITO = $resultadousuario->fetch_array() )    
                {
   
    
                         
                        
                       $nombreuser = $USERSITO['NOM_PERSONAS'];
        
            
                }
      
                
                 $rol = "SELECT * FROM rol, personas WHERE rol.ID_ROL = personas.ID_ROL and RUT ='".$_SESSION['username']."'";
    
                        $resultadorol = $conexion->query($rol);
                
      
                            while ( $rolsito = $resultadorol->fetch_array() )    
                {
   
    
                         
                        
                       $nombrerol= utf8_encode ($rolsito['NOM_ROL']);
        
            
                }
      
                ?>            
                  <p class="mb-1 mt-3 font-weight-semibold"><?php echo $nombreuser?></p>
                  
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
        <!--<div class="right-sidebar-toggler-wrapper">
          <div class="sidebar-toggler" id="layout-toggler"><i class="mdi mdi-settings"></i></div>
          <div class="sidebar-toggler" id="chat-toggler"><i class="mdi mdi-chat-processing"></i></div>
          <div class="sidebar-toggler"><a href="https://www.bootstrapdash.com/demo/star-admin-pro/src/docs/documentation.html" target="_blank"><i class="mdi mdi-file-document-outline"></i></a></div>
          <div class="sidebar-toggler"><a href="https://www.bootstrapdash.com/product/star-admin-pro" target="_blank"><i class="mdi mdi-cart"></i></a></div>
        </div>-->
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
                    
                    
                    
                  <p class="designation"><?php echo "Usuario: ".$nombrerol;?></p>
                </div>
              </a>
            </li>
              
              
              
              
           <li class="nav-item nav-category">Menú Principal</li><li class='nav-item'><a class='nav-link' href='./principal.php'><i class='menu-icon fa fa-th'></i><span class='menu-title'>Inicio</span></a></li> 
          
          
          
            
   
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
                  <!--<li class="nav-item">
                    <a class="nav-link" href="pages/tables/data-table.html">Data table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a>
                  </li>-->
                </ul>
              </div>
            </li>
           

           
            
            
          
          </ul>
        </nav>
          
          
          
          
          
          
          
          
          
          
          
          
        <!-- NO QUITAR FORM -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
             
                  <?php 
                
                $idactividad = $_GET['idactividad'];  
				$cp = $_GET['cp'];
      
      include ("bd.php");
        $queryact = "SELECT * from actividad WHERE actividad.ID_ACTIVIDAD = '".$idactividad."'";

        $resultadoact= $conexion->query($queryact);
        $rowact=$resultadoact->fetch_assoc();
                
        
    
                ?>
              
                
           
            
             
              
                
                
              <div class="col-12 grid-margin">
			  <div class="">
	<div class="card-body">
		<div class="d-flex justify-content-between border-bottom">
			<h2 class="text-primary">Editar Actividad</h2>
				  
		</div>
	</div>
</div>

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                      
                      
                      
                    <form class="form-sample" method="post" action="controladoreditaractividad.php">
                        
                         <div class="row">
                             <input type="hidden"  id="proyecto" name="proyecto" value="<?php echo $proyecto;?>">
                        <input name="creadopor" type="hidden" id="creadopor" value="<?php echo $_SESSION['username']; ?>" >     
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nactividad" id="nactividad"  value="<?php echo $rowact['NOM_ACTIVIDAD']; ?>"required /> </div>
                          </div>
                        </div>
                             
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Descripción</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="dactividad"  id="dactividad" value="<?php echo $rowact['DESC_ACTIVIDAD']; ?>" /> </div>
                          </div>
                            
                        </div>
                             <input name="fdc" type="hidden" id="fdc" value="<?php echo $hoy ?>" >
                      </div>
                       
                        
                      <div class="row">
                        <div class="col-md-6">
                            
                            
                            
                            
                            
                          
                            
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tipo </label>
                            <div class="col-sm-9">
                                
                            <select  class="form-control" name="tactividad" id="tactividad">
                           
                                
                                <?php 
                        $query = "SELECT * FROM TIPO_ACTIVIDAD, ACTIVIDAD where ACTIVIDAD.ID_TIPO = TIPO_ACTIVIDAD.ID_TIPO AND ACTIVIDAD.ID_ACTIVIDAD =  '".$idactividad."'";
    
                            $result = $conexion->query($query);                                
                                
                                
                            while ( $row = $result->fetch_array() )    
                            {
                            ?>
    
                        <option value=" <?php echo $row['ID_TIPO'] ?> " >
                        <?php echo $row['NOM_TIPO']; ?>
                        </option>
        
                        <?php
                            }  
                        ?>
 
                                
                           <?php 
    
                            $query2 = "SELECT * FROM TIPO_ACTIVIDAD";
    
                            $result2 = $conexion->query($query2);
                                
                                   while ( $row2 = $result2->fetch_array() )    
                            {
                            ?>
    
                        <option value=" <?php echo $row2['ID_TIPO'] ?> " selected>
                        <?php echo $row2['NOM_TIPO']; ?>
                        </option>
        
                        <?php
                            }  
                        ?> 
                                
                                
      </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Meta</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="mactividad"  id="mactividad"  value=<?php echo $rowact['META_ACTIVIDAD']; ?> /> </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <?php 
                   $idfase = $_GET['idfase'];
                   $idpanel = $_GET['idpanel'];

    $query = "SELECT * FROM PERSONAS,CONCEPTO,COMPROMETIDOS,fase WHERE CONCEPTO.CP = COMPROMETIDOS.CP AND PERSONAS.ID_PERSONAS = COMPROMETIDOS.ID_PERSONAS AND FASE.CP = CONCEPTO.CP AND FASE.ID_FASE =".$idfase;
    
    $result = $conexion->query($query);
    ?>  
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Encargado</label>
                            <div class="col-sm-9" name="eactividad" id="eactividad">
                              <select class="form-control" name="eactividad" id="eactividad">
    
    <?php 
            while ($row = $result->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo  $row['NOM_PERSONAS']; ?>">
                <?php echo $row['NOM_PERSONAS']; ?>
                </option>
            
    <?php } ?>
    
                                
  <option value=" <?php echo $rowact['ENCARGADO']; ?>" selected>
                <?php echo $rowact['ENCARGADO']; ?>
                </option>                                  
                                  
                                  
    </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de Inicio</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="fiactividad"  id="fiactividad" placeholder="dd/mm/yyyy" value=<?php echo $rowact['FECHA_INICIO']; ?> /> </div>
                          </div>
                        </div>
                      </div>
                    
              
                        
                    
                      
                     
                     
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de Término</label>
                            <div class="col-sm-9">
                              <input type="date" name="ftactividad" id="ftactividad" class="form-control" value=<?php echo $rowact['FECHA_TERMINO']; ?>  /> </div>
                          </div>
                        </div>
                      
                            <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Creación</label>
                            <div class="col-sm-9">
                              <input name="fdc" type="hidden" id="fdc" value="<?php echo $hoy; ?>" >
                                <?php                   $idpanel = $_GET['idpanel'];
 ?>
                              <input name="idfase" type="hidden" id="idfase" value="<?php echo $idfase; ?>" >
                              <input name="idactividad" type="hidden" id="idactividad" value="<?php echo $idactividad; ?>" >
							  <input name="cp" type="hidden" id="cp" value="<?php echo $cp; ?>" >
                              
                                <section class="form-control"><?php echo $hoy; ?></section>
                              
                              </div>
                          </div>
                        </div>
                      </div>
              
                          
                        
                        
                        
            
                        
                        
                        
                        
                        
                        
                        
                             <button type="submit" class="btn btn-success mr-2">Editar</button>
                             <input class="btn btn-light" type="button" value="Cancelar" onclick="cancelar()">

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
	<script>
		function cancelar(){
			
				history.back();
			
		}
	</script>
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