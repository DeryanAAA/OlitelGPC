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
         
           
           
             .elim{
            
            height: 15px;
            width: 15px;
            background-image: url(img/eliminar.png);
            background-size: cover;
             float: left;
             margin-right: 10px;
        }
          
        .tmlet{
              font-size: 0.75rem;
            
            font-family: "roboto", sans-serif;
  color: #212529;

            
        }
        
        
        
        .table-bordered{
            
            font-size: 1px!important;
            
            
        }
          
          .btn-default{
              
              padding: 0px!important;
          }
          
    
          
        
    </style>   
      
      
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
        $query="SELECT * FROM concepto WHERE cp ='$cp'";
        $resultado= $conexion->query($query);
        $row=$resultado->fetch_assoc();
    
                ?>
              
                
                
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Editar proyecto</h4>
                      
                      
                      
                    <form class="form-sample" method="post" action="controladoreditarproyectoadmin.php">
                        <input type="hidden" name="cp" id="cp" value="<?php echo $cp ?>">
                         <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre Proyecto</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nom_pro" id="nom_pro" value="<?php  echo $row['NOMBRE']; ?>"/> </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Descripción</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="desc_pro"  id="desc_pro"  value="<?php  echo $row['DESCRIPCION']; ?>"/> </div>
                          </div>
                            
                        </div>
                             
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">OTT/OPR</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="ott" id="ott" value="<?php  echo $row['OTT']; ?>" /> </div>
                          </div>
                        </div>
                        
                             
                           
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de creación</label>
                            <div class="col-sm-9">
                                
                            <section class="form-control">
                                 <?php  echo $row['FECHA_CREACION']; ?>
                                </section>    
                              </div>
                          </div>
                            
                        </div>  
                           
                           
                           
                           
                           
                      </div>    
                        
                      <div class="row">
                        <div class="col-md-6">
                            
                            
                            
                            <?php 
                            
                            $tipoproyy = $row['ID_TIPO'];
    
                            $query = "SELECT * FROM TIPO";
    
                            $result = $conexion->query($query);
                            ?>  
                            
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tipo Proyecto</label>
                            <div class="col-sm-9">
                                
                            <select  class="form-control" name="tipopro" id="tipopro">
                            <?php 
    
    
                            while ( $row2 = $result->fetch_array() )    
                            {
                                
                                
                                    
                               
                            ?>
    
                        <option value=" <?php echo $row2['ID_TIPO'] ?> " >
                        <?php echo $row2['NOM_TIPO']; ?>
                        </option>
        
                        <?php
                              } 
                        ?>
                                
                            <?php 
                                   
         $query = "SELECT tipo.ID_TIPO, tipo.NOM_TIPO FROM tipo, concepto where tipo.ID_TIPO = concepto.ID_TIPO and concepto.cp = '$cp'";
                                   
         $result = $conexion->query($query);
        
                                   
        
    ?> 
        <?php
               while ($rowx = $result->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo$rowx['ID_TIPO'] ?>" selected>
                <?php echo $rowx['NOM_TIPO']; ?>
                </option>
            
    <?php } ?>                  
                                
                                
                                
                                
                                
 
      </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sitio</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="sitio"  id="sitio"  value="<?php  echo $row['SITIO']; ?>"/> </div>
                          </div>
                            
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <?php 
    
    $query = "SELECT * FROM CIUDAD";
    
    $result = $conexion->query($query);
    ?>  
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ciudad</label>
                            <div class="col-sm-9" name="ciudpro" id="ciudpro">
                              <select class="form-control" name="ciudpro" id="ciudpro">
    
    <?php 
            while ($row2 = $result->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo$row2['ID_CIUDAD'] ?>">
                <?php echo $row2['NOM_CIUDAD']; ?>
                </option>
            
    <?php } ?>
    
    
 <?php 
    
    $query = "SELECT ciudad.ID_CIUDAD, ciudad.NOM_CIUDAD FROM ciudad, concepto WHERE concepto.ID_CIUDAD = ciudad.ID_CIUDAD and concepto.cp = '$cp'";
    
    $result = $conexion->query($query);
    ?>                          
          <?php 
            while ($row7 = $result->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo$row7['ID_CIUDAD'] ?>" selected>
                <?php echo $row7['NOM_CIUDAD']; ?>
                </option>
            
    <?php } ?>                           
                                  
                                  
                                  
                                  
                                  
    </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            
                      
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de asignación</label>
                            <div class="col-sm-9">
                              
                             <div class="form-control">  <?php  echo $row['FECHADEASIGNACION']; ?></div>
                              </div>
                          </div>
                        </div>
                      </div>
                        
                        
                        
                    
                 <div class="row">
                     <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Avance %</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="avan" id="avan" value=" <?php echo $row['AVANCE']; ?>" /> </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Estado</label>
                               <div class="col-sm-9">
                              <select class="form-control" name="estado" id="estado">
                                <option>Activo</option>
                                <option>Pendiente</option>
                                <option>Terminado</option>
                                <option value=" <?php echo $row['ESTADO'] ?>" selected>
                <?php echo $row['ESTADO']; ?>
                </option>
                              </select>
                            </div>
                          </div>
                            
                        </div>
                      </div>
                        
                          <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                                  
<?php 
    
    $query2 = "SELECT * FROM CENTRO_DE_COSTO where ESTADO <> 'NULO'";
    
    $result2 = $conexion->query($query2);
    ?>
                              
                            <label class="col-sm-3 col-form-label">Centro de costo</label>
                            <div class="col-sm-9">
                                 <select class="form-control" name="cc" id="cc">
                <?php 
    
    
                while ( $row2 = $result2->fetch_array() )    
                {
                ?>
    
                        <option value=" <?php echo $row2['ID_CC'] ?> " >
                        <?php echo $row2['NOM_CC']; ?>
                        </option>
        
                <?php
                }  
                ?>
               
        
                                          
<?php 
    
    $query2 = "SELECT centro_de_costo.ID_CC, centro_de_costo.NOM_CC from centro_de_costo, concepto WHERE centro_de_costo.ID_CC = concepto.ID_CC AND concepto.CP = '$cp'";
    
    $result2 = $conexion->query($query2);
    ?>                             
                                     
                   <?php 
    
    
                while ( $row8 = $result2->fetch_array() )    
                {
                ?>
    
                        <option value=" <?php echo $row8['ID_CC'] ?> " selected>
                        <?php echo $row8['NOM_CC']; ?>
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
                            <label class="col-sm-3 col-form-label">Fecha estimada inicio</label>
                                <div class="col-sm-9">
                               <div class="form-control">  <?php  echo $row['INI_ASIG']; ?></div></div>
                            
                          </div>
                        </div>
                      </div>
                        
                        
                        
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha real de inicio</label>
                            <div class="col-sm-9">
                              <input type="date" name="fri" id="fri" class="form-control" value=<?php echo date('Y-m-d',strtotime($row["INI_REAL"])) ?> /> </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha Estimada de término</label>
                            <div class="col-sm-9">
                              <div class="form-control">  <?php  echo $row['TER_ASIG']; ?></div> </div>
                          </div>
                        </div>
                      </div>
                        
                        
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha real de término</label>
                            <div class="col-sm-9">
                              <input type="date" name="frt" id="frt" class="form-control"value=<?php echo date('Y-m-d',strtotime($row["TER_REAL"])) ?>   /> </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha entrega informe</label>
                            <div class="col-sm-9">
                              
                              <input type="date" name="fdinf" id="fdinf" class="form-control"value=<?php echo date('Y-m-d',strtotime($row["FEC_INF"])) ?>   />
                              
                              </div>
                          </div>
                        </div>
                      </div>    
                        
                        
                        
                        
                      <div class="row">
                      <div class="col-md-6">
                            <?php 
    
    $query = "SELECT * FROM supentel";
    
    $result = $conexion->query($query);
    ?>  
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Supervisor Externo</label>
                            <div class="col-sm-9">
                               <select class="form-control" name="supentel" id="supentel">
    
    <?php 
            while ($row = $result->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo$row['ID_SUPENTEL'] ?>">
                <?php echo $row['NOM_SUPENTEL']; ?>
                </option>
            
    <?php } ?>
    
            <?php 
                                   
         $query = "select supentel.ID_SUPENTEL, supentel.NOM_SUPENTEL FROM supentel, concepto WHERE supentel.ID_SUPENTEL = concepto.ID_SUPENTEL and cp ='$cp'";
                                   
         $result = $conexion->query($query);
        
                                   
        
    ?> 
                                   
     <?php
                                   
                            
                                   
            while ($row3 = $result->fetch_array() )
            {
            ?>
                
                   <option value=" <?php echo $row3['ID_SUPENTEL'] ?>" selected>
                <?php echo $row3['NOM_SUPENTEL']; ?>
                 </option>        
                
            
    <?php } ?>
                                       
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
    
    </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                              
                              <?php 
    
    $query = "SELECT * FROM jefe_entel";
    
    $result = $conexion->query($query);
    ?>
                              
                              
                            <label class="col-sm-3 col-form-label">Jefe Externo</label>
                             <div class="col-sm-9">
                              <select class="form-control" name="jde" id="jde">
    
    <?php 
            while ($row5 = $result->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo$row5['ID_JDE'] ?>">
                <?php echo $row5['NOM_JDE']; ?>
                </option>
            
    <?php } ?>
    
    
      <?php 
                                   
         $query3 = "select jefe_entel.ID_JDE, jefe_entel.NOM_JDE FROM jefe_entel, concepto WHERE jefe_entel.ID_JDE = concepto.ID_JDE and cp ='$cp'";
                                   
         $result3 = $conexion->query($query3);
        
                                   
        
    ?> 
                                      
         <?php 
            while ($row3 = $result3->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo $row3['ID_JDE']; ?>" selected>
                <?php echo $row3['NOM_JDE']; ?>
                </option>
            
    <?php } ?>                          
                                               
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
    </select>    
    
                            </div>
                            
                          </div>
                            
                            
                        </div>
                          
                          
                      </div>
                      
                    
                          <div class="row">
                              
                        <?php 
                              $consultacolab = "SELECT * from comprometidos, personas, cargo, concepto WHERE comprometidos.ID_CARGO = cargo.ID_CARGO and comprometidos.ID_PERSONAS = personas.ID_PERSONAS and comprometidos.CP = concepto.cp and comprometidos.cp = ".$cp;

			                     $resultadocolab = mysqli_query($conexion, $consultacolab);
                              
                              ?>      
                              
                              
                              
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Colaboradores Olitel</label>
                            <div class="col-sm-9">
                                <section class="tmlet">
                                <?php  while($colab = mysqli_fetch_array($resultadocolab)){ 
                          
                            
                          echo $colab['NOM_PERSONAS']." - ";
                          echo ucfirst($colab['NOM_CARGO'])."";
                            echo "<a href= 'controladoreliminarcolab.php?cp=".$colab['CP']."&persona=".$colab['ID_PERSONAS']."&cargo=".$colab['ID_CARGO']."'><section class='elim'></section></a> </td>"; echo "</br>";
    
                            
                        }
                          ?>
                                
                                
                                </section>
                              
                              
                              
                              
                              </div>
                          </div>
                        </div>
                        
                      </div>
                      
                        
    
                        
                             
                             <button type="submit" class="btn btn-success mr-2">Editar</button>
                              <a href="listadoproyectosadmin.php"><input class="btn btn-light" type="button" value="Cancelar"></a>
                        
                            <span class=" float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a href="formagregaroliteladmin.php?cp=<?php  echo $cp;?>"><input class="btn btn-light" type="button" value="Agregar colaboradores olitel"></a>
              </span>
                      
                    </form>
               
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


