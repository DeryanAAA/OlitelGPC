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
    <title> Sistema Gestor de Proyectos y Cobranza</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
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
  	
			<script>
			   function obtenerPersona(val) 
			   { 
				 $.ajax
				 ({
					type: "POST",
					url: "get_cargo.php",
					data:'id_cargo='+val,
					success: function(data)
					{
					   $("#persona").html(data);
					}
				 });
				}
			</script>
		
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
        <!-- partial:partials/_settings-panel.html -->
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
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon typcn typcn-chevron-right"></i>
                <span class="menu-title">Formularios</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="formproyectosadmin.php">Agregar Proyectos</a>
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
                    <a class="nav-link" href="listadoproyectosadmin.php">Proyectos</a>
                  </li> 
                 <!--
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
			<div class="">
			  <div class="card-body">
				<div class="d-flex justify-content-between border-bottom">
				  <h2 class="text-primary">Agregar Colaboradores</h2>
				</div>
			  </div>
			</div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
              </div>
             <?php
               $cp = $_GET['cp'];
                include ("bd.php");
				$sql_Cargo   = "select ID_CARGO as 'valor', NOM_CARGO as 'descripcion' from cargo where ID_CARGO<3 order by descripcion";
				$sql_persona = "select ID_PERSONAS as 'valor', NOM_PERSONAS as 'descripcion' from personas order by descripcion";
				$consulta_Cargo =mysqli_query($conexion,$sql_Cargo);
				$consulta_persona= mysqli_query($conexion,$sql_persona);
            ?>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <form class="form-sample" method="post" action="controladoragregarcolab.php">
                       
                      <div class="row">
                        <div class="col-md-6">
						<input type="hidden" name="cp" id="cp" value="<?php echo $cp ?>">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Cargo</label>
                            <div class="col-sm-10">
                         <select name="cargo" class="form-control" id="cargo" onChange="obtenerPersona(this.value);">
							<option value=''> Seleccione </option>
								<?php
								
									while($row= $consulta_Cargo->fetch_object())
									{
										echo "<option value='".$row->valor."'>".$row->descripcion."</option>";
									}
								?>
						</select>
                            </div>
                          </div>
                        </div>
                            <div class="col-md-6">
						
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Persona</label>
                            <div class="col-sm-10">
                           <select name="persona" id="persona" class="form-control">
								<option value=''>Seleccione </option>
									<?php
										while($row= $consulta_persona->fetch_object())
									   {
										  echo "<option value='".$row->valor."'>".$row->descripcion."</option>";
									   }
									?>
							</select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      </div>
                             <button type="submit" class="btn btn-success mr-2">Agregar</button>
                              <a href="formeditproyectos.php?cp=<?php echo $cp; ?>"><input class="btn btn-light" type="button" value="Cancelar"></a>
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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- End plugin js for this page -->
	<script src="./assets/js/jquery.js"></script>
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