<!DOCTYPE html>
<html lang="en">
       <?php include "bd.php"; ?>
      <?php $hoy = date("Y-m-d") ?>
    <?php
session_start();
//echo "ro0l=".$_SESSION['username'];
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['rolst'] == '4' ){
} else {
   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion
exit;
}
?>
  <head>
              <style>
             .wrn{
            height: 25px;
            width: 25px;
            background-image: url(img/warning.png);
            background-size: cover;
             float: left;
             margin-right: 10px;
        }
		   .wrnd{
            height: 25px;
            width: 25px;
            background-image: url(img/warningd.png);
            background-size: cover;
             float: left;
             margin-right: 10px;
        }
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
           .check{
            height: 25px;
            width: 25px;
            background-image: url(img/check.png);
            background-size: cover;
             float: left;
             margin-right: 30px;
        }
		     .checkd{
            height: 25px;
            width: 25px;
            background-image: url(img/checkd.png);
            background-size: cover;
             float: left;
             margin-right: 30px;
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
                       $nombrerol= utf8_encode($rolsito['NOM_ROL']);
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
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
          </div>
          <ul class="chat-list">
            <li class="list active">
              <div class="profile">
                <img src="../../../assets/images/faces/face1.jpg" alt="image">
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
                <img src="../../../assets/images/faces/face2.jpg" alt="image">
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
                <img src="../../../assets/images/faces/face3.jpg" alt="image">
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
                <img src="../../../assets/images/faces/face4.jpg" alt="image">
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
                <img src="../../../assets/images/faces/face5.jpg" alt="image">
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
                <img src="../../../assets/images/faces/face6.jpg" alt="image">
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
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $nombreuser;?></p>
                  <p class="designation"><?php echo "Usuario: ".utf8_decode($nombrerol);?></p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Menú Principal</li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon typcn typcn-chevron-right"></i>
                <span class="menu-title">Listados</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="principalst.php">Listado Proyectos</a>
                  </li>
                </ul>
              </div>
            </li>
      <?php
       $cp = $_GET['cp'];
       $p = $_GET['p'];
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
			//$consulta = "SELECT * FROM ACTIVIDAD, FASE, CONCEPTO, PANEL WHERE ACTIVIDAD.ID_PANEL = panel.ID_PANEL AND fase.ID_FASE = panel.ID_FASE AND concepto.CP = ".$cp." AND ACTIVIDAD.ENCARGADO LIKE '%$nombreuser%'";
			$consulta = "select c.NOMBRE,pa.NOMBRE_PANEL,  a.ID_ACTIVIDAD, a.NOM_ACTIVIDAD, a.DESC_ACTIVIDAD, a.META_ACTIVIDAD, a.AVANCE_ACTIVIDAD, f.NOM_FASE from actividad as a
				inner join panel as pa on pa.ID_PANEL= a.ID_PANEL
				inner join fase as f on f.ID_FASE= pa.ID_FASE
				inner join concepto c on c.CP= f.cp
				where f.cp=".$cp." and a.ENCARGADO='".$nombreuser."'and a.ID_TIPO=1";
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
				  <h2 class="text-primary">Actividades del Proyecto </h2>
				</div>
			  </div>
			</div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
</div>
                   <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Actividades del Proyecto <?php echo strtoupper($p);?></h4>
                    <div class="row">
					  <div class="col-md-6 grid-margin stretch-card">
</div>
					  <div class="table-responsive bordered">
                          <input type="hidden" name="proyecto" id="proyecto" value="<?PHP echo $p; ?>">                   
                      <table id="order-listing" class="table table-striped">
                        <thead>
                          <tr class="font-weight-bold">
							<th>FASE</th>
                            <th>PANEL</th>
                            <th>NOMBRE ACTIVIDAD</th>
                            <th>DESCRIPCION</th>
                            <th>META</th>
                            <th>AVANCE REAL</th>
                            <th>ACCION</th>
                          </tr>
                        </thead>
                        <tbody>
                             <?php  while($fila = mysqli_fetch_array($resultado)){ ?>
                            <tr>
							  <td><?php echo $fila['NOM_FASE'];?></td>
                              <td><?php echo $fila['NOMBRE_PANEL'];?></td>
                              <td><?php echo $fila['NOM_ACTIVIDAD'];?></td>
                              <td><?php echo $fila['DESC_ACTIVIDAD'];?></td>
                              <td><?php echo $fila['META_ACTIVIDAD'];?></td>
                              <td><?php echo $fila['AVANCE_ACTIVIDAD'];?></td>
							  <td>
							  <?php 
							     $consulta1 = "select * from DETALLE_ACTIVIDAD  where ID_ACTIVIDAD=".$fila['ID_ACTIVIDAD'];;
								$resultado1 = mysqli_query($conexion, $consulta1);
								$completar=true;
								 while($fila1 = mysqli_fetch_array($resultado1)){
									 if($fila1['DESCRIPCION']=='Se completó la tarea exitosamente'){
										 $completar=false;
									}
								 }
								 if($completar==true)
								 {
							  ?>
								  <input type="hidden"  id="ID_ACTIVIDAD" name="ID_ACTIVIDAD" value="<?PHP echo $fila['ID_ACTIVIDAD']; ?>">
								  <input type="hidden"  id="cp" name="cp" value="<?php echo $cp;?>">
								  <input type="hidden"  id="p" name="p" value="<?php echo $p;?>">
									<a title="Completar Actividad" onclick="validar(<?PHP echo $fila['ID_ACTIVIDAD'];?>,<?php echo $fila['AVANCE_ACTIVIDAD'];?>)" > <div class='check'></div></a>
									<a title="Avance de Actividad" href= 'formavanact.php?idactividad=<?PHP echo $fila['ID_ACTIVIDAD'];?>&cp=<?PHP echo $cp; ?>&p=<?PHP echo $p; ?>'><div class='wrn'></div></a>   
							<?php
								 }else{?>
									<div title="Actividad Completada"  class='checkd'></div>
									<div title="Actividad Completada"  class='wrnd'></div>
								<?php }
							  ?>
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
<script>
		function validar(ID_ACTIVIDAD,AVANCE_ACTIVIDAD){
			//var ID_ACTIVIDAD = document.getElementById("ID_ACTIVIDAD").value;
			var cp = document.getElementById("cp").value;
			var p = document.getElementById("p").value;
		//	alert("AVANCE_ACTIVIDAD= "+AVANCE_ACTIVIDAD);
			if (confirm("¿Está seguro que desea Completar la Actividad? al completarla no pordrá agregar más avances a la actividad ")){
				window.location.href="completaract.php?idactividad="+ID_ACTIVIDAD+"&cp="+cp+"&p="+p+"&av="+AVANCE_ACTIVIDAD;
			}
		}
	</script>
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
    <!-- End custom js for this page -->
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