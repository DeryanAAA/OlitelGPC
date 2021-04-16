<!DOCTYPE html>
<html lang="en">
	   <?php include "bd.php"; ?>
	  <?php $hoy = date("Y-m-d") ?>
	<?php
session_start();
$_SESSION['roladmin'] = '2';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true &&($_SESSION['roladmin'] == '2' or $_SESSION['roladmin'] == '1') ){
} else {
   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion
exit;
}
?>
  <head>
			  <style>
				  .portlet-card-list{
					  margin-top: 10px;
				  }
				  .add-portlet{
					  text-align: center;
				  }
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
	  </ul>
		</nav>
  <?php
$idfase = $_GET['idfase'];
$proyecto = $_GET['p'];
$cp = $_GET['cp'];
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$database = "sistemaproyectos";
try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	}
catch(PDOException $e)
	{
	echo $e->getMessage();
	}
	$fas = "SELECT * FROM fase WHERE fase.ID_FASE = '$idfase' ";
	$resultado = mysqli_query($conexion, $fas);
	while($fila = mysqli_fetch_array($resultado)){
		$nomFase=utf8_encode($fila["NOM_FASE"]);
	}
//select del panel	 
$panel = "SELECT * FROM panel WHERE panel.ID_FASE = '$idfase' ";
$stm = $dbh->query($panel);
// here you go:
$paneles = $stm->fetchAll();
?>	 
		<!-- partial -->
		<div class="main-panel">
		  <div class="content-wrapper">
			<div class="">
			  <div class="card-body">
				<div class="d-flex justify-content-between border-bottom">
				  <h2 class="text-primary">Tablero - Visor de Actividades</h2>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-12">
				<div class="d-flex flex-column flex-md-row">
				  <h5 class="mb-md-0 mb-4 text-primary">&nbsp;&nbsp;&nbsp; <?php echo "Proyecto: ". ucwords($proyecto ." - Fase: ".$nomFase);?>
				  <input type="hidden"	id="proyecto" name="proyecto" value="<?php echo $proyecto;?>">
				  </h5>
				<!--  <div class="wrapper d-flex">
					<div class="image-grouped ml-md-4">
					  <img src="./assets/images/faces/face20.jpg" alt="profile image">
					  <img src="./assets/images/faces/face17.jpg" alt="profile image">
					  <img src="./assets/images/faces/face14.jpg" alt="profile image">
					</div>
					<button type="button" class="btn btn-secondary btn-fw ml-4"><i class="mdi mdi-lock"></i>Private</button>
				  </div>-->
				  <div class="wrapper ml-md-auto d-flex flex-column flex-md-row kanban-toolbar ml-n2 ml-md-0 mt-4 mt-md-0">
					<!-- <div class="d-flex">
					 <button type="button" class="btn btn-icons btn-light">
						<i class="mdi mdi-magnify"></i>
					  </button>
					  <button type="button" class="btn btn-icons btn-light">
						<i class="mdi mdi-filter-outline"></i>
					  </button>
					  <button type="button" class="btn btn-icons btn-light">
						<i class="mdi mdi-bell-outline"></i>
					  </button>
					  <button type="button" class="btn btn-primary">Boards</button>
					</div>-->
					<div class="d-flex mt-4 mt-md-0">
						<a class="d-flex mt-4 mt-md-0" href="crearpanel.php?idfase=<?php echo $idfase; ?>&p=<?php echo$proyecto; ?>&cp=<?php echo$cp;?>"style="text-decoration: none;">
							<button type="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Crear Panel</button>
						</a>
						<a class="d-flex mt-4 mt-md-0" href="listadoPanel.php?idfase=<?php echo $idfase; ?>&p=<?php echo$proyecto; ?>&cp=<?php echo$cp;?>"style="text-decoration: none;">
							<button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Editar Paneles</button>
						</a>
						<a class="d-flex mt-4 mt-md-0" href="listadoactividades.php?idfase=<?php echo $idfase; ?>&cp=<?php echo$cp;?>"style="text-decoration: none;">
							<button type="button" class="btn btn-secondary" title="Actividades del Proyecto"> <i class="fa fa-list"></i>Ver Detalle</button>
						</a>
						<a class="d-flex mt-4 mt-md-0" href="listadofases.php?cp=<?php echo$cp;?>&p=<?php echo$proyecto;?>" style="text-decoration: none;">
							<button type="button" class="btn btn-secondary" title="Fases del Proyecto"><i class="fa fa-spinner"></i>Fases</button>
						</a>
					  <!--<button type="button" class="btn btn-icons btn-light">
						<i class="mdi mdi-view-grid"></i>
					  </button>
					  <a href="listadoactividades.php?idfase=<?php echo $idfase; ?>"><button type="button" title="Actividades del Proyecto" class="btn btn-icons btn-light">
						<i class="mdi mdi-menu"></i>
					  </button></a>-->
					</div>
				  </div>
				</div>
				<div class="board-wrapper pt-5" > 
  <?php //Muestra
	foreach ($paneles as $row1) { //pinta el panel
		$idpanel = $row1["ID_PANEL"];
		echo "<ul id=\"".$row1["ID_PANEL"]."\" class=\"board-portlet\">";
		echo "<h4 class=\"portlet-heading\">".$row1["NOMBRE_PANEL"]."</h4>";
																	echo "<a href='crearactividad.php?idfase=$idfase&idpanel=$idpanel&p=$proyecto&cp=$cp'><button type='button' class='add-portlet'>+ Nueva Actividad </button></a>"; 
		//select de los postit	  
		$postit = "SELECT * FROM ACTIVIDAD	where  ID_PANEL=".$row1["ID_PANEL"]. " order by posicion";
		$stm = $dbh->query($postit);
		$tabla = $stm->fetchAll();
		foreach ($tabla as $row2) { //pinta los postits
	   /* 
		echo " <li class=\"portlet-card\" id=\"".$row2["ID_ACTIVIDAD"]."\">".$row2["NOM_ACTIVIDAD"].
			   "</li> ";*/
		  echo " <li class=\"portlet-card\" id=\"".$row2["ID_ACTIVIDAD"]."\">";
		   echo "<div class='progress'>
						  <div class='progress-bar bg-success' role='progressbar' style='width: ".$row2["PORCENTAJE_ACTIVIDAD"]."%' aria-valuenow='' aria-valuemin='0' aria-valuemax='100'></div>
						</div>";
		echo "<p class='task-date'>".$row2["FECHA_TERMINO"]."</p>";
		echo "<div class='action-dropdown dropdown'>";
		echo "<button type='button' class='dropdown-toggle' id='portlet-action-dropdown' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
		echo "<i class='mdi mdi-dots-vertical'></i>";
		echo " </button>";
		echo "<div class='dropdown-menu dropdown-menu-right' aria-labelledby='portlet-action-dropdown'>";
					$idactividad = $row2["ID_ACTIVIDAD"];
		echo "<a class='dropdown-item' href='detalleactividad.php?idactividad=$idactividad&idfase=$idfase&idpanel=$idpanel&cp=$cp'>Ver Detalles</a>";
		echo "<a class='dropdown-item' href='editaractividad.php?idactividad=$idactividad&idfase=$idfase&idpanel=$idpanel&p=$proyecto&cp=$cp'>Editar</a>";
		echo "<a class='dropdown-item' href='controladoreliminaract.php?idactividad=$idactividad&idfase=$idfase&p=$proyecto&cp=$cp'>Eliminar</a>";
		echo "</div>";
		echo "</div>";
		echo "<h4 class='task-title'>".$row2["NOM_ACTIVIDAD"]."</h4>";
		echo "<div class='image-grouped'>";
		echo "</div>";
		echo "<div class='badge badge-inverse-success'>".$row2["ENCARGADO"]."</div>";
		//echo "<p class='due-date'>Due 10 days</p>";
		echo "</li> ";
		}
	echo "</ul>";
								 }
	?>
</div> 
			  </div>
			</div>
		  </div>
 <?php	//actualiza
	if(isset($_POST['datos']))
		{$data = array($_POST['datos']);
		   foreach($data as $val=>$valor)
			{foreach($valor as $valor1=>$valor2)
			 {foreach($valor2 as $valor3=>$valor4)
			  {		   $act1 = "UPDATE ACTIVIDAD set ID_PANEL=".$valor1.", POSICION=".$valor3." where  ID_ACTIVIDAD=".$valor4;
					   $stmt = $dbh->prepare($act1);
					   $stmt->execute();
			  }		  
			 }
			}
		}
   ?>
   <script>
		//click
	  $(function(){
		  $("#btn").on("click", function(){
			$('#1').append("<li class=\"ui-state-default\"> Nueva tarea</li>");
		  });
		   });
		</script>
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
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
   <!-- <script>
	  $(function()
	  {
		$("#portlet-card-list-1, #portlet-card-list-2, #portlet-card-list-3").sortable(
		{
		  connectWith: "#portlet-card-list-1, #portlet-card-list-2, #portlet-card-list-3",
		  items: ".portlet-card"
		}
		);
	  });
	</script>
	  -->
		<script src="kanban.js" type="text/javascript"></script>
	<!-- End custom js for this page -->
  </body>
</html>