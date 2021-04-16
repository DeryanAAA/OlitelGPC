<!DOCTYPE html>
<html lang="en">
	   <?php include "bd.php"; ?>
	  <?php $hoy = date("Y-m-d") ?>
	<?php
	define("EXP", 6000000);
setlocale(LC_CTYPE, 'es_ES');
ini_set("display_errors", "0");
ini_set("memory_limit", "-1");
$proyecto=$_GET['p'];
session_start();
$_SESSION['roladmin'] = '2';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && ($_SESSION['roladmin'] == '2' or $_SESSION['roladmin'] == '1') ){
} else {
   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion
exit;
}
?>
  <head>
			  <style>
			 .elim{
			height: 15px;
			width: 15px;
			background-image: url(img/eliminar.png);
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
				</ul>
			  </div>
			</li>
	  <?php
							  $cp = $_GET['cp'];
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
			$consulta = "SELECT * FROM FASE WHERE FASE.CP = ".$cp;
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
				  <h2 class="text-primary">Fases</h2>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-8 grid-margin">
				<div class="card">
				  <div class="card-body">
					<h3 class="card-title">Proyecto: <?php echo $proyecto; ?></h3>
					  <input type="hidden"	id="proyecto" name="proyecto" value="<?php echo $proyecto;?>"> 
					  <input type="hidden"	id="cp" name="cp" value="<?php echo $cp;?>">
					<div class="table-responsive bordered">
								   <p class="text-right">	<a title="Agregar Fase" href="formagregarfase.php?cp=<?php echo $cp; ?>&p=<?php echo $proyecto; ?>"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-plus-circle"></i> Fase</button></a>
								   <a title="Volver a Proyectos" href="listadoproyectos.php"><button type="button" class="btn btn-secondary"> Proyectos</button></a></p>				 
					  <table id="order-listing" class="table table-striped">
						<thead>
						  <tr>
						   <!-- <th>ID FASE</th>-->
							<th>NOMBRE</th>
							<th>AVANCE</th>
							<th>ACCIÓN</th>
						  </tr>
						</thead>
						<tbody>
   <?php  while($fila = mysqli_fetch_array($resultado)){
					$cant_act = 0;
					$cant_comp = 0;
					$consulta2 = "SELECT COUNT(ID_ACTIVIDAD) AS CANT FROM `actividad`, fase, panel, concepto  WHERE panel.ID_FASE = fase.ID_FASE AND actividad.ID_PANEL = panel.ID_PANEL and fase.ID_FASE = ".$fila['ID_FASE'];
					$resultado2 = mysqli_query($conexion, $consulta2);
					while($fila2 = mysqli_fetch_array($resultado2)){  
					$cant_act = $fila2["CANT"];
					}
					$consulta3 = "SELECT COUNT(ID_ACTIVIDAD) AS COMPLETAS FROM `actividad`, fase, panel, concepto WHERE actividad.ID_PANEL = panel.ID_PANEL	 AND PANEL.ID_FASE = FASE.ID_FASE AND actividad.PORCENTAJE_ACTIVIDAD = 100 AND fase.ID_FASE= ".$fila['ID_FASE'];
					$resultado3 = mysqli_query($conexion, $consulta3);
					while($fila3 = mysqli_fetch_array($resultado3)){  
					$cant_comp = $fila3["COMPLETAS"];
					}
						if ($cant_act > 0){
						$porcentaje = $cant_comp/$cant_act;
						$porcentaje = $porcentaje * 100;
						$actualizar_porc = "UPDATE FASE set AVANCE_FASE=? WHERE ID_FASE=?";
						$resultadofase = mysqli_prepare($conexion, $actualizar_porc);
						if(!$resultadofase){
						echo "Error al editar.";
						}
					$ok=mysqli_stmt_bind_param($resultadofase,"ss",$porcentaje,$fila['ID_FASE']);
					$ok=mysqli_stmt_execute($resultadofase);	
					}			
							?>
						  <tr>
						  <!--	<td><?php echo $fila['ID_FASE'];?></td>-->
							<td class="text-capitalize"> <a title="Ir a Actividades" href='visordeactividades.php?idfase=<?PHP echo $fila['ID_FASE']; ?>&p=<?php echo $proyecto; ?>&cp=<?PHP echo $cp; ?>'><?php echo $fila['NOM_FASE'];?></a></td>
						 <td><?php echo $fila['AVANCE_FASE']."% <meter max=100 id='barra' value=".$fila['AVANCE_FASE']." low='30' high='60' optimun='100'></meter>"; ?></td> 
						 <td>
							 <a href='formeditFase.php?cp=<?PHP echo $fila['CP'];?>&idfase=<?PHP echo $fila['ID_FASE']; ?>&p=<?php echo $proyecto; ?>'> <section class='imgtb' title="Editar"></section></a>
							 <a href= 'detalleFase.php?cp=<?PHP echo $fila['CP'];?>&idfase=<?PHP echo $fila['ID_FASE']; ?>&p=<?php echo $proyecto; ?>'><section class='dtl' title="Ver"></section></a>	
							</td>
						  </tr>
						<?php	 }
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
	</script>	 <!-- End custom js for this page -->
  </body>
</html>