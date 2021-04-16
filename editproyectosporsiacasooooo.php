<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['roluser'] == '2' ){

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
    <title>Form proyecto</title>
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
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="../assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
             
             
            </li>
            <li class="nav-item dropdown">
             
              
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="./assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Sign Out</a>
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
        <div class="right-sidebar-toggler-wrapper">
          <div class="sidebar-toggler" id="layout-toggler"><i class="mdi mdi-settings"></i></div>
          <div class="sidebar-toggler" id="chat-toggler"><i class="mdi mdi-chat-processing"></i></div>
          <div class="sidebar-toggler"><a href="https://www.bootstrapdash.com/demo/star-admin-pro/src/docs/documentation.html" target="_blank"><i class="mdi mdi-file-document-outline"></i></a></div>
          <div class="sidebar-toggler"><a href="https://www.bootstrapdash.com/product/star-admin-pro" target="_blank"><i class="mdi mdi-cart"></i></a></div>
        </div>
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
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
              
              
              
              
            <li class="nav-item nav-category">Main Menu</li>
          
          
          
            
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Formulario de proyectos</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="formproyectos.php">Formulario proyectos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/validation.html">Validation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/step-wizard.html">Step Wizard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/wizard.html">Wizard</a>
                  </li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Listado de proyectos</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="listadoproyectos.php">Listado Proyectos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/data-table.html">Data table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a>
                  </li>
                </ul>
              </div>
            </li>
           
            
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
            </li>
           
            
            
          
          </ul>
        </nav>
          
          
          
          
          
          
          
          
          
          
          
          
        <!-- NO QUITAR FORM -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      
                    </div>
                  </div>
                  <div class="col-12 stretch-card">
                    
                  </div>
                </div>
              </div>
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
                      
                      
                      
                    <form class="form-sample" method="post" action="controladoreditarproyecto.php">
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
                            <label class="col-sm-3 col-form-label">ott</label>
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
                                
                                if ($row2['ID_TIPO'] = $tipoproyy ){
                                    
                               
                            ?>
    
                        <option value=" <?php echo $row2['ID_TIPO'] ?> " >
                        <?php echo $row2['NOM_TIPO']; ?>
                        </option>
        
                        <?php
                            }  } 
                        ?>
 
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
    
                <option value=" <?php echo$row['ID_CIUDAD'] ?>">
                <?php echo $row2['NOM_CIUDAD']; ?>
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
                                <option>Finalizado</option>
                                
                              </select>
                            </div>
                          </div>
                            
                        </div>
                             <input name="fdc" type="hidden" id="fdc" value="<?php echo $hoy ?>" >
                      </div>
                        
                      <div class="row">
                      <div class="col-md-6">
                            <?php 
    
    $query = "SELECT * FROM supentel";
    
    $result = $conexion->query($query);
    ?>  
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Supervisor Entel</label>
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
                              
                              
                            <label class="col-sm-3 col-form-label">Jefe de entel</label>
                             <div class="col-sm-9">
                              <select class="form-control" name="jde" id="jde">
    
    <?php 
            while ($row = $result->fetch_array() )
            {
            ?>
    
                <option value=" <?php echo$row['ID_JDE'] ?>">
                <?php echo $row['NOM_JDE']; ?>
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
                        <div class="col-md-6">
                          <div class="form-group row">
                                  
<?php 
    
    $query = "SELECT * FROM CENTRO_DE_COSTO";
    
    $result = $conexion->query($query);
    ?>
                              
                            <label class="col-sm-3 col-form-label">Centro de costo</label>
                            <div class="col-sm-9">
                                 <select class="form-control" name="cc" id="cc">
                <?php 
    
    
                while ( $row2 = $result->fetch_array() )    
                {
                ?>
    
                        <option value=" <?php echo $row2['ID_CC'] ?> " >
                        <?php echo $row2['NOM_CC']; ?>
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
                              <input type="date" name="fdinf" id="fdinf" class="form-control" /> </div>
                          </div>
                        </div>
                      </div>
                        
                           <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                               <?php 
    
    $query = "SELECT * FROM PERSONAS";
    
    $result = $conexion->query($query);
    ?>
                              
                            <label class="col-sm-3 col-form-label">Coordinador</label>
                            <div class="col-sm-9">
                             <select class="form-control" name="coord" id="coord">
                <?php 
    
    
                while ( $row = $result->fetch_array() )    
                {
                ?>
    
                        <option value=" <?php echo $row['ID_PERSONAS'] ?> " >
                        <?php echo $row['NOM_PERSONAS']; ?>
                        </option>
        
                <?php
                }  
                ?>
                                 
                                 
                                 
                  <?php 
                                   
                                   
         $query = "SELECT personas.NOM_PERSONAS, personas.ID_PERSONAS from personas, comprometidos where comprometidos.ID_PERSONAS = personas.ID_PERSONAS and cp = '$cp' and comprometidos.ID_CARGO = 2";
                                   
         $result = $conexion->query($query);
        
                                   
        
    ?>                              
          <?php                       
             while ( $row3 = $result->fetch_array() )    
                {
                ?>
    
                        <option value=" <?php echo $row3['ID_PERSONAS'] ?> " selected>
                        <?php echo $row3['NOM_PERSONAS']; ?>
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
                              
                              <?php 
    
    $query = "SELECT * FROM PERSONAS";
    
    $result = $conexion->query($query);
    ?>
                              
                              
                            <label class="col-sm-3 col-form-label">Supervisor técnico</label>
                             <div class="col-sm-9">
                              <select class="form-control" name="suptec" id="suptec">
                <?php 
    
    
                while ( $row = $result->fetch_array() )    
                {
                ?>
    
                        <option value=" <?php echo $row['ID_PERSONAS'] ?> " >
                        <?php echo $row['NOM_PERSONAS']; ?>
                        </option>
        
                <?php
                }  
                ?>
                                  
                                  
                                    <?php 
                                   
           
    $query = "SELECT personas.NOM_PERSONAS, personas.ID_PERSONAS from personas, comprometidos where comprometidos.ID_PERSONAS = personas.ID_PERSONAS and cp = '$cp' and comprometidos.ID_CARGO = 1 LIMIT 1";

       
                                   
         $result = $conexion->query($query);
        
                                   
        
    ?>                  
                                  
                                  
                     <?php 
    
    
                while ( $row3 = $result->fetch_array() )    
                {
                ?>
    
                        <option value=" <?php echo $row3['ID_PERSONAS'] ?> " selected>
                        <?php echo $row3['NOM_PERSONAS']; ?>
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
                              
                              <?php 
    
    $query = "SELECT * FROM PERSONAS";
    
    $result = $conexion->query($query);
    ?>
                              
                              
                            <label class="col-sm-3 col-form-label">Supervisor técnico (opcional)</label>
                             <div class="col-sm-9">
                              <select class="form-control" name="suptec2" id="suptec2">
                                  
                <option value=4>Seleccionar</option>
                <?php 
    
    
                while ( $row = $result->fetch_array() )    
                {
                ?>
    
                        <option value=" <?php echo $row['ID_PERSONAS'] ?> " >
                        <?php echo $row['NOM_PERSONAS']; ?>
                        </option>
        
                <?php
                }  
                ?>
                                  
                             
                                    
                                  
                    
                                  
                                  
                                  
                                  
                                  
 
      </select>
                            </div>
                            
                          </div>
                        </div>                   
                               
                               
                      </div>
                        
                             <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
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
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
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


