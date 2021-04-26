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

          .form-controll{
              border: 0px;
              font-size: 0.95rem;
          }
	</style>  
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
          <li class="nav-item"><a class="nav-link" href="formagregarfactura.php">Agregar Informe de Pago</a></li>
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
					<li class="nav-item"><a class="nav-link" href="detallesServiciosFijos.php">Detalles Servicios Fijos</a></li> 
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
                  </li>  <li class="nav-item">
                    <a class="nav-link" href="desempeñoReporteAR.php">Desempeño Proy. Andrés Retamal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="desempeñoReporteRanco.php">Desempeño Proyectos Ranco</a>
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
					<h2 class="text-primary">Detalle Informe de Pago</h2>
				</div>
			</div>
			</div>
			<div class="row">
			  <div class="col-md-6 d-flex align-items-stretch grid-margin">
			  </div>
			  <div class="col-md-6 grid-margin stretch-card">
			  </div>
			   <?php 
				$id_ip = $_GET['ID_IP'];
	  include ("bd.php");
		$query="SELECT * FROM INFORME_DE_PAGO WHERE ID_IP ='$id_ip'";
		$resultado= $conexion->query($query);
		$row=$resultado->fetch_assoc();
				?>
			  <div class="col-12 grid-margin">
				<div class="card">
				  <div class="card-body">
					<h4 class="card-title"></h4>
					<form class="form-sample" method="post" action="controladoreditip.php">
						 <div class="row">
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">IP</label>
							<div class="col-sm-9">
							  <section class="form-control"> <?php echo $row['ID_IP'];?> </section>
								<input type="hidden" class="form-control" name="id_ip" id="id_ip" value="<?php echo $row['ID_IP'];?>" required />
							  </div>
						  </div>
						</div>



						  <div class="col-md-6">
						  
						     <?php 
							$query3 = "SELECT * FROM CONCEPTO";
							$result3 = $conexion->query($query3);
							?>
							  <div class="form-group row">
								<label class="col-sm-3 col-form-label">CP</label>
								<div class="col-sm-9">
									  <section	class="form-control">
									  <?php 
							$query = "SELECT CONCEPTO.CP FROM CONCEPTO, INFORME_DE_PAGO WHERE CONCEPTO.CP = INFORME_DE_PAGO.CP AND INFORME_DE_PAGO.ID_IP = '$id_ip'";
							$result = $conexion->query($query);
							?>							
								  <?php 
									while ($row7 = $result->fetch_array() )
									{
									?>
										<option value=" <?php echo$row7['CP'] ?>">
										<?php echo $row7['CP']; ?>
										</option>
							<?php } ?>							 
							  </section>
							</div>
						  </div>
						  
						</div>
					  </div>


					  <div class="row">
						<div class="col-md-6">
						
					
						  
												   <?php 
							$query = "SELECT * FROM CONCEPTO";
							$result = $conexion->query($query);
							?>
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">CC</label>
							<div class="col-sm-9" name="cc" id="cc">
							  <section class="form-control">
						 <?php 
							$query = "SELECT CONCEPTO.CP, CENTRO_DE_COSTO.NOM_CC FROM CENTRO_DE_COSTO, CONCEPTO WHERE CENTRO_DE_COSTO.ID_CC = CONCEPTO.ID_CC AND CONCEPTO.ID_CC = '$id_ip'";
							$result = $conexion->query($query);
							?>							
								  <?php 
									while ($row7 = $result->fetch_array() )
									{
									?>
										<option value=" <?php echo$row7['ID_CC'] ?>" >
										<?php echo $row7['NOM_CC']; ?>
										</option>
							<?php } ?>							 
							</section>
							</div>
						  </div>
						
						</div>
						<div class="col-md-6">
														   <?php 
							$query2 = "SELECT * FROM CONCEPTO";
							$result2 = $conexion->query($query2);
							?>
												  <div class="form-group row">
													<label class="col-sm-3 col-form-label">OTT/OPR</label>
													<div class="col-sm-9">
													  <section	class="form-control">
									  <?php 
							$query = "SELECT CONCEPTO.CP, CONCEPTO.OTT FROM CONCEPTO, INFORME_DE_PAGO WHERE CONCEPTO.CP = INFORME_DE_PAGO.ID_CP AND INFORME_DE_PAGO.ID_IP = '$id_ip'";
							$result = $conexion->query($query);
							?>							
								  <?php 
									while ($row7 = $result->fetch_array() )
									{
									?>
										<option value=" <?php echo$row7['CP'] ?>">
										<?php echo $row7['OTT']; ?>
										</option>
							<?php } ?>							 
								</section>
						  </div>
						  </div>
					  </div>
						</div>



							<div class="row">
                            <div class="col-md-6">
														   <?php 
							$query2 = "SELECT * FROM TIPO";
							$result2 = $conexion->query($query2);
							?>
												  <div class="form-group row">
													<label class="col-sm-3 col-form-label">Tipo de Servicio</label>
													<div class="col-sm-9">
													  <section	class="form-control">
									  <?php 
							$query = "SELECT TIPO.ID_TIPO, TIPO.NOM_TIPO FROM TIPO, INFORME_DE_PAGO WHERE TIPO.ID_TIPO = INFORME_DE_PAGO.ID_TIPO AND INFORME_DE_PAGO.ID_IP = '$id_ip'";
							$result = $conexion->query($query);
							?>							
								  <?php 
									while ($row7 = $result->fetch_array() )
									{
									?>
										<option value=" <?php echo$row7['ID_TIPO'] ?>">
										<?php echo $row7['NOM_TIPO']; ?>
										</option>
							<?php } ?>							 
								</section>
						  </div>
						  </div>
						</div>
                        

                     
                        <div class="col-md-6">
														   <?php 
							$query2 = "SELECT * FROM FACTURA";
							$result2 = $conexion->query($query2);
							?>
												  <div class="form-group row">
													<label class="col-sm-3 col-form-label">N° de Factura</label>
													<div class="col-sm-9">
													  <section	class="form-control">
									  <?php 
							$query = "SELECT FACTURA.ID_FACT, FACTURA.NFACT FROM FACTURA, PAGO_FACT WHERE FACTURA.ID_FACT = PAGO_FACT.ID_FACT AND PAGO_FACT.ID_IP = '$id_ip'";
							$result = $conexion->query($query);
							?>							
								  <?php 
									while ($row7 = $result->fetch_array() )
									{
									?>
										<option value=" <?php echo$row7['ID_FACT'] ?>">
										<?php echo $row7['NFACT']; ?>
										</option>
							<?php } ?>							 
								</section>
                                     </div>
						         </div>
					         </div>
						</div>
                       

                          <div class="row">
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">N° Cotizacion</label>
							<div class="col-sm-9">
							  <section class="form-control"> <?php echo $row['NRO_COTI'];?> </section>
								<input type="hidden" class="form-control" name="cotizacion" id="coti" value="<?php echo $row['ID_IP'];?>" required />
							  </div>
						  </div>
						</div>


                       
                        <div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Estado</label>
							<div class="col-sm-9">
							  <section class="form-control"> <?php echo $row['ESTADO'];?> </section>
								<input type="hidden" class="form-control" name="estado" id="estad" value="<?php echo $row['ID_IP'];?>" required />
							  </div>
						  </div>
                          </div>
                         
                      


                       
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Fecha Envio</label>
							<div class="col-sm-9">
							  <section class="form-control"> <?php echo $row['FECHAENVIOIP'];?> </section>
								<input type="hidden" class="form-control" name="fecha" id="fechaenvio" value="<?php echo $row['ID_IP'];?>" required />
							  </div>
						  </div>
                          </div>

                         
						<div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">NIP</label>
							<div class="col-sm-9">
							  <section class="form-control"> <?php echo $row['NIP'];?> </section>
								<input type="hidden" class="form-control" name="nip" id="nip" value="<?php echo $row['ID_IP'];?>" required />
							  </div>
						  </div>
                          </div>


                          <div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Valor IP</label>
							<div class="col-sm-9">
							  <section class="form-control"> <?php echo $row['VALOR_IP'];?> </section>
								<input type="hidden" class="form-control" name="valorip" id="valorip" value="<?php echo $row['ID_IP'];?>" required />
							  </div>
						  </div>
                          </div>

                          <div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Valor Facturado</label>
							<div class="col-sm-9">
							  <section class="form-control"> <?php echo $row['VALOR_FACTURADO'];?> </section>
								<input type="hidden" class="form-control" name="valorfact" id="valorfact" value="<?php echo $row['ID_IP'];?>" required />
							  </div>
						  </div>
                          </div>


                          <div class="col-md-6">
						  <div class="form-group row">
							<label class="col-sm-3 col-form-label">Observaciones</label>
							<div class="col-sm-9">
							  <section class="form-control"> <?php echo $row['OBSERVACIONES'];?> </section>
								<input type="hidden" class="form-control" name="observaciones" id="observaciones" value="<?php echo $row['ID_IP'];?>" required />
							  </div>
						  </div>
                          </div>

                          
                          <div class="col-md-6">
														   <?php 
							$query2 = "SELECT * FROM CONCEPTO";
							$result2 = $conexion->query($query2);
							?>
												  <div class="form-group row">
													<label class="col-sm-3 col-form-label">Avance</label>
													<div class="col-sm-9">
													  <section	class="form-controll">
									  <?php 
							$query = "SELECT CONCEPTO.CP, CONCEPTO.AVANCE FROM CONCEPTO, INFORME_DE_PAGO WHERE CONCEPTO.CP = INFORME_DE_PAGO.ID_CP AND INFORME_DE_PAGO.ID_IP = '$id_ip'";
							$result = $conexion->query($query);
							?>							
								  <?php 
									while ($row7 = $result->fetch_array() )
									{
									?>
										<option value=" <?php echo$row7['CP'] ?>">
										<?php number_format($row7['AVANCE'], 0, ",", "."); $AVANCE=$row7['AVANCE'] ?>
                                        <?php echo $AVANCE."% <meter max=100 id='barra' value=".$AVANCE." low='30' high='60' optimun='100'></meter>"; ?>
										</option>
							<?php } ?>							 
								</section>
                                     </div>
						         </div>
					   
                          
					



					
					
						
						<div class="col-md-6">
						  
						
						</div>
                        <br>
					  </div>
							  <a href="listadoip.php"><input class="btn btn-success mr-2" type="button" value="Volver a Formulario Informe de Pago"></a>
						 
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