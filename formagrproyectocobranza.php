<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ){
} 


else {
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
			   function obtenerCiudades(val) 
			   {
				 $.ajax
				 ({
					type: "POST",
					url: "get_ciudad.php",
					data:'id_pais='+val,
					success: function(data)
					{
					   $("#ciudpro").html(data);
					}
				 });
				}
			</script>
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
					   $nombrerol= $rolsito['NOM_ROL'];
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
			 <li class="nav-item nav-category">Menú Principal</li><li class='nav-item'><a class='nav-link' href='./principalcobranza.php'><i class='menu-icon fa fa-th'></i><span class='menu-title'>Inicio</span></a></li>
			<li class="nav-item">
			  <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
				<i class="menu-icon typcn typcn-chevron-right"></i>
				<span class="menu-title">Formularios</span>
				<i class="menu-arrow"></i>
			  </a>
			  <div class="collapse" id="form-elements">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="formagrproyectocobranza.php">Agregar Proyectos</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarfactura.php">Agregar Factura</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarAgrupacion.php">Agregar Agrupación</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarCC.php">Agregar Centro de Costo</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarCiudad.php">Agregar Ciudad</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarCliente.php">Agregar Cliente</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarDetalle.php">Agregar Detalle</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarEstadoC.php">Agregar Estado Cobranza</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarJefeE.php">Agregar Jefe Externo</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarLinea.php">Agregar Línea Negocio</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarRegion.php">Agregar Región</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarSupE.php">Agregar Supervisor Externo</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarTipoI.php">Agregar Tipo Informe</a></li>
					<li class="nav-item"><a class="nav-link" href="formagregarTipo.php">Agregar Tipo Proyecto</a></li>
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
					<li class="nav-item"><a class="nav-link" href="listadoproyectoscobranza.php">Proyectos</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoservicios.php">Servicios Fijos</a></li> 
					<li class="nav-item"><a class="nav-link" href="listadoip.php">Informes de Pago</a></li>
					<li class="nav-item"><a class="nav-link" href="listadofacturascobranza.php">Facturas</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoAgrupacion.php">Agrupación</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoCC.php">Centro de Costo</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoCiudad.php">Ciudad</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoCliente.php">Cliente</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoDetalle.php">Detalle</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoEstadoC.php">Estado de Cobranza</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoJefeE.php">Jefe Externo</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoLinea.php">Línea Negocio</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoRegion.php">Región</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoSupE.php">Supervisor Externo</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoTipoI.php">Tipo Informe</a></li>
					<li class="nav-item"><a class="nav-link" href="listadoTipo.php">Tipo Proyecto</a></li>
				</ul>
			  </div>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-toggle="collapse" href="#reportes" aria-expanded="false" aria-controls="reportes">
				<i class="menu-icon typcn typcn-chevron-right"></i>
				<span class="menu-title">Reportes</span>
				<i class="menu-arrow"></i>
			  </a>
			  <div class="collapse" id="reportes">
				<ul class="nav flex-column sub-menu">
				  <li class="nav-item">
					<a class="nav-link" href="desempeñoReporte.php">Desempeño Proyectos F.O</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="desempeñoReporteAR.php">Desempeño Proy. Andrés Retamal</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="desempeñoReporteRanco.php">Desempeño Proyectos Ranco</a>
				  </li>
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
				  <h2 class="text-primary">Agregar Proyecto</h2>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-6 grid-margin stretch-card">
			  </div>
			  <div class="col-12 grid-margin">
				<div class="card">
				  <div class="card-body">
					<h4 class="card-title"></h4>


					<!-- FORMULARIO -->
					<form class="form-sample" method="post" action="controladoringresarproyectocob.php">
						 <div class="row">
						<input name="creadopor" type="hidden" id="creadopor" value="<?php echo $_SESSION['username']; ?>" >		
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Nombre Proyecto:</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control" name="nom_pro" id="nom_pro" autofocus="autofocus" required /> </div>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Descripción:</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control" name="desc_pro"  id="desc_pro" /> </div>
						  </div>
						</div>
							 <input name="fdc" type="hidden" id="fdc" value="<?php echo $hoy ?>" >
					  </div>
					   <div class="row">
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">OTT/OPR:</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control" name="ott" id="ott" /> </div>
						  </div>
						</div>
							 <div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Creación:</label>
							<div class="col-sm-9">
								<section class="form-control"><?php echo $hoy ?></section>
							  </div>
						  </div>
						</div>
							 <input name="fdc" type="hidden" id="fdc" value="<?php echo $hoy ?>" >
					  </div>	
					  <div class="row">
						<div class="col-md-6">
							<?php 
							$query = "SELECT * FROM TIPO";
							$result = $conexion->query($query);
							?>	
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Tipo Proyecto:</label>
							<div class="col-sm-9">
							<select	 class="form-control" name="tipopro" id="tipopro" required>
							<option value="" selected> Seleccione </option>
							<?php 
							while ( $row = $result->fetch_array() )	   
							{
							?>
						<option value=" <?php echo $row['ID_TIPO']; ?> " >
						<?php echo $row['NOM_TIPO']; ?>
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
							<label class="col-sm-3 col-form-label">Sitio:</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control" name="sitio"	id="sitio" /> </div>
						  </div>
							<input name="fdc" type="hidden" id="fdc" value="<?php echo $hoy ?>" >
						</div>
					  </div>
					  <div class="row">
					  <div class="col-md-6">
						<?php 
							$sql_paises   ="select ID_REGION as 'valor', NOM_REGION as 'descripcion' from region order by descripcion";
							$sql_ciudades = "select ID_CIUDAD as 'valor', NOM_CIUDAD as 'descripcion' from ciudad order by descripcion";
							$consulta_paises =mysqli_query($conexion,$sql_paises);
							$consulta_ciudades= mysqli_query($conexion,$sql_ciudades);
							?>	
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Región:</label>
							<div class="col-sm-9" name="regionpro" id="regionpro">
							  <select name="regionpro" class="form-control" id="regionpro" onChange="obtenerCiudades(this.value);" required>
								<option value=''> Seleccione </option>
									<?php
									
										while($row= $consulta_paises->fetch_object())
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
							<label class="col-sm-3 col-form-label">Ciudad:</label>
							<div class="col-sm-9" name="ciudpro1" id="ciudpro1">
							  <select name="ciudpro" id="ciudpro" class="form-control" required>
									<option value=''> Seleccione </option>
										<?php
											while($row= $consulta_ciudades->fetch_object())
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
					<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Fecha de Asignación:</label>
							<div class="col-sm-9">
							  <input type="date" class="form-control" name="fda"  id="fda" placeholder="dd/mm/yyyy"  required/> </div>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Avance %:</label>
							<div class="col-sm-9">
							  <input type="number" class="form-control" name="avan" id="avan" min="0" max="100" required /> </div>
						  </div>
						</div>
					  </div>
					  <div class="row">
					   <div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Estado:</label>
							   <div class="col-sm-9">
							  <select class="form-control" name="estado" id="estado" required>
								<option value="Activo" >Activo</option>
								<option value="Pendiente" >Pendiente</option>
								<option value="Terminado">Terminado</option>
							  </select>
							</div>
						  </div>
						</div>
							 <input name="fdc" type="hidden" id="fdc" value="<?php echo $hoy ?>" >
						<div class="col-md-6">
							<?php 
							$query = "SELECT * FROM supentel";
							$result = $conexion->query($query);
							?>	
								  <div class="form-group row">
									<label class="col-sm-3 col-form-label">Supervisor Externo:</label>
									<div class="col-sm-9">
									   <select class="form-control" name="supentel" id="supentel" required>
									   <option value="" selected> Seleccione </option>
							<?php 
									while ($row = $result->fetch_array() )
									{
									?>
										<option value=" <?php echo$row['ID_SUPENTEL'] ?>">
										<?php echo $row['NOM_SUPENTEL']; ?>
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
							$query = "SELECT * FROM CENTRO_DE_COSTO WHERE ESTADO <> 'NULO'";
							$result = $conexion->query($query);
							?>
								<label class="col-sm-3 col-form-label">Centro de Costo:</label>
								<div class="col-sm-9">
									 <select class="form-control" name="cc" id="cc" required>
										<option value="" selected> Seleccione </option>
										<?php 
										while ( $row = $result->fetch_array() )	   
										{
										?>
												<option value=" <?php echo $row['ID_CC'] ?> " >
												<?php echo $row['NOM_CC']; ?>
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
							$query = "SELECT * FROM jefe_entel";
							$result = $conexion->query($query);
							?>
								<label class="col-sm-3 col-form-label">Jefe Externo:</label>
								 <div class="col-sm-9">
								  <select class="form-control" name="jde" id="jde" required>
									<option value="" selected> Seleccione </option>
							<?php 
									while ($row = $result->fetch_array() )
									{
									?>
										<option value=" <?php echo$row['ID_JDE'] ?>">
										<?php echo $row['NOM_JDE']; ?>
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
							<label class="col-sm-3 col-form-label">Fecha Estimada Inicio:</label>
								<div class="col-sm-9">
							  <input type="date" name="fei" id="fei" class="form-control" placeholder="dd/mm/yyyy"  required/> </div>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Fecha Estimada de Término:</label>
							<div class="col-sm-9">
							  <input type="date" name="fet" id="fet" class="form-control" required /> </div>
						  </div>
						</div>
					  </div>
					  <div class="row">
					  <div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Fecha Real de Inicio:</label>
							<div class="col-sm-9">
							  <input type="date" name="fri" id="fri" class="form-control" /> </div>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Fecha Real de Término:</label>
							<div class="col-sm-9">
							  <input type="date" name="frt" id="frt" class="form-control" /> </div>
						  </div>
						</div>
					  </div>
					   <div class="row">
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Fecha Entrega Informe:</label>
							<div class="col-sm-9">
							  <input type="date" name="fdinf" id="fdinf" class="form-control" /> </div>
						  </div>
						</div>
						<div class="col-md-6">
						  <div class="form-group row">
							  <?php 
							$query = "SELECT cp.ID_PERSONAS, p.NOM_PERSONAS  FROM cargo_de_persona as cp inner join personas as p on cp.ID_PERSONAS= p.ID_PERSONAS where cp.ID_CARGO=2 and p.ACTIVO='si';";
							$result = $conexion->query($query);
							?>
								<label class="col-sm-3 col-form-label">Coordinador de Proyecto:</label>
								 <div class="col-sm-9">
								  <select class="form-control" name="ID_PERSONAS" id="ID_PERSONAS" required>
									<option value="" selected> Seleccione </option>
							<?php 
									while ($row = $result->fetch_array() )
									{
									?>
										<option value=" <?php echo$row['ID_PERSONAS'] ?>">
										<?php echo $row['NOM_PERSONAS']; ?>
										</option>
							<?php } ?>
							</select>	 
							</div>
						  </div>
						</div>
					  </div>
							 <button type="submit" class="btn btn-success mr-2">Agregar</button>
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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script>
		function cancelar(){
			if (confirm("¿Está seguro que desea cancelar?")){
				history.back();
			}
		}
	</script>
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