<!DOCTYPE html>
<html lang="en">
<?php include "bd.php"; ?>
<?php $hoy = date("Y-m-d") ?>
<?php
define("EXP", 6000000);
setlocale(LC_CTYPE, 'es_ES');
ini_set("display_errors", "0");
ini_set("memory_limit", "-1");
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['rolcobr'] == '3' ){
} else {
header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion
exit;
}
?>

    <head>
        <style>
            #barra {
                height: 10px;
            }

            #aviso {
                color: red;
                font-size: 10px;
                text-align: center;
            }

            #separadormiles {
                background-color: black !important;
            }

            .imgtb {
                height: 15px;
                width: 15px;
                background-image: url(img/edit.png);
                background-size: cover;
                float: left;
                margin-right: 10px;
            }

            .dtl {
                height: 15px;
                width: 15px;
                background-image: url(img/ojo.png);
                background-size: cover;
                float: left;
                margin-right: 10px;
            }

            #tmlet {
                font-size: 10px !important;
            }

            .table-bordered {
                font-size: 1px !important;
            }

            .btn-default {
                padding: 0px !important;
            }

            .btn-success {
                font-size: 10px !important;
            }

            .table-bordered {
                margin: 0px !important;
                padding: 0px !important;
            }

            p {}
        </style>
        <!-- Required meta tags -->
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
        <link rel="stylesheet" href="./assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="./assets/vendors/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css">
        <link rel="stylesheet" href="./assets/vendors/font-awesome/css/font-awesome.min.css">
        <!-- End Plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="./assets/css/shared/style.css">
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="./assets/css/demo_1/style.css">
        <!-- End Layout styles -->
        <link rel="shortcut icon" href="./img/olimini.png" />
        <link rel="stylesheet" href="./assets/vendors/jquery-bar-rating/css-stars.css">
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="./assets/vendors/jvectormap/jquery-jvectormap.css">
        <!-- End Plugin css for this page -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="./assets/css/demo_1/style.css">
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.html -->
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
                                        <p class="mb-1 mt-3 font-weight-semibold">
                                            <?php echo $nombreuser;?>
                                        </p>
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
                <!-- partial -->
                <!-- partial:../../partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <a href="#" class="nav-link">
                                <div class="text-wrapper">
                                    <p class="profile-name">
                                        <?php echo $nombreuser;?>
                                    </p>
                                    <p class="designation">
                                        <?php echo "Usuario: ".$nombrerol;?>
                                    </p>
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
				$consulta1 = "SELECT YEAR(c.INI_REAL) as año, MONTH(c.INI_REAL) AS MES,C.ID_EO_COB, cc.NOM_CC, c.CP, c.INI_REAL, c.VALORPROYECTO from sistemaproyectos.concepto as c
				inner join sistemaproyectos.centro_de_costo as cc on c.ID_CC=cc.ID_CC
				WHERE c.ID_TIPO='1' and (c.ID_EO_COB<>5 and c.ID_EO_COB<>6) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12)
				order by año, MES,NOM_CC, CP;";
				$resultado1 = mysqli_query($conexion, $consulta1);
				?>
                    <!-- partial -->
                    <div class="main-panel">
                        <div class="content-wrapper">
                            <!-- Page Title Header Starts-->
							<div class="">
							  <div class="card-body">
								<div class="d-flex justify-content-between border-bottom">
								  <h2 class="text-primary">Reporte de Desempeño Proyecto F.O</h2>
								  
								</div>
							  </div>
							</div>
							<br>
                            <div class="row">
							
                                <div class="col-md-12 grid-margin" style="font-size:14px;">
                                    <div class="card-header header-sm d-flex justify-content-between align-items-center" style="background: linear-gradient(to top, #5768f3, #1c45ef);">
                                        <h4 class="card-title text-white">Estatus Proyectos Actuales (por Fecha de Asignación)</h4>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 grid-margin">
                                                    <div class="faq-section">
                                                        <div class="container-fluid bg-inverse-primary py-2">
                                                            <div class="row font-weight-bold ">
                                                                <div class="col ">SUPRA ESTATUS</div>
                                                                <div class="col ">EN EJECUCION</div>
                                                                <div class="col ">TERMINADO</div>
                                                                <div class="col">TOTAL</div>
                                                            </div>
                                                            <div class="row font-weight-bold">
                                                                <div class="col ">Año</div>
                                                                <div class="col ">
                                                                    <div class="row ">
                                                                        <div class="col-8 col-sm-6 ">N° Proyectos</div>
                                                                        <div class="col-4 col-sm-6">Valor</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col ">
                                                                    <div class="row">
																		<div class="col-8 col-sm-6 ">N° Proyectos</div>
                                                                        <div class="col-4 col-sm-6">Valor</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="row">
                                                                        <div class="col-8 col-sm-6 ">N° Proyectos</div>
                                                                        <div class="col-4 col-sm-6">Valor</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                
				
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
											//consulta valores x cada año
											$consulta = "select YEAR(c.INI_REAL) as año,  
											count(DISTINCT(CASE
													WHEN c.ID_EO_COB = 4 THEN c.CP
												END)) CantCPe ,
											count(DISTINCT(CASE
													WHEN c.ID_EO_COB <> 4 THEN c.CP
												END)) CantCPt ,
											SUM(CASE
													WHEN c.ID_EO_COB = 4 THEN c.VALORPROYECTO
												END) VALORPROYECTOe ,
											SUM(CASE
													WHEN c.ID_EO_COB <> 4 THEN c.VALORPROYECTO
												END) VALORPROYECTOt
											from sistemaproyectos.concepto as c inner join sistemaproyectos.estado_cobranza as e on c.ID_EO_COB=e.ID_EO_COB
											inner join sistemaproyectos.informe_de_pago as i on c.CP=i.CP
											inner join sistemaproyectos.centro_de_costo as cc on c.ID_CC=cc.ID_CC
											WHERE c.ID_TIPO='1' and (c.ID_EO_COB<>5 and c.ID_EO_COB<>6) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12)
											group by año order by año;
											";
													
											$resultado = mysqli_query($conexion, $consulta);
											while($fila = mysqli_fetch_array($resultado)){
												
												
												?>
											<div class="faq-section">
                                                <div class="container-fluid bg-secondary py-2 ">
                                                    <div class="row  font-weight-bold">
                                                        <div class="col  font-weight-bold "><?php echo $fila['año']; ?></div>
                                                        <div class="col ">
                                                            <div class="row text-right">
                                                                <div class="col-8 col-sm-6 "><?php echo $fila['CantCPe']; ?></div>
                                                                <div class="col-4 col-sm-6"><?php
																	if ($fila['VALORPROYECTOe']!=""){
																		echo number_format($fila['VALORPROYECTOe'], 0, ",", "."); 
																	}else{
																		echo number_format(0, 0, ",", "."); 
																	}
																 ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="col ">
                                                            <div class="row text-right">
                                                                <div class="col-8 col-sm-6 "><?php echo $fila['CantCPt']; ?></div>
                                                                <div class="col-4 col-sm-6"><?php if ($fila['VALORPROYECTOt']!=""){
																		echo number_format($fila['VALORPROYECTOt'], 0, ",", ".");  
																	}else{
																		echo number_format(0, 0, ",", "."); 
																	}?></div>
                                                            </div>
                                                        </div>
                                                        <div class="col  font-weight-bold">
                                                            <div class="row text-right">
                                                                <div class="col-8 col-sm-6 "><?php $CPtotal=  $fila['CantCPe']+$fila['CantCPt'];echo $CPtotal; ?></div>
                                                                <div class="col-4 col-sm-6"><?php $ValorTotal= $fila['VALORPROYECTOe']+$fila['VALORPROYECTOt'];echo  number_format($ValorTotal, 0, ",", "."); ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
											// consulta valores de los meses x año
											$consult = "select MONTH(c.INI_REAL) as MES, 
											count(DISTINCT(CASE
													WHEN c.ID_EO_COB = 4 THEN c.CP
												END)) CantCPe ,
											count(DISTINCT(CASE
													WHEN c.ID_EO_COB <> 4 THEN c.CP
												END)) CantCPt ,
											SUM(CASE
													WHEN c.ID_EO_COB = 4 THEN c.VALORPROYECTO
												END) VALORPROYECTOe ,
											SUM(CASE
													WHEN c.ID_EO_COB <> 4 THEN c.VALORPROYECTO
												END) VALORPROYECTOt
											from sistemaproyectos.concepto as c inner join sistemaproyectos.estado_cobranza as e on c.ID_EO_COB=e.ID_EO_COB
											inner join sistemaproyectos.informe_de_pago as i on c.CP=i.CP
											inner join sistemaproyectos.centro_de_costo as cc on c.ID_CC=cc.ID_CC
											WHERE c.ID_TIPO='1' and (c.ID_EO_COB<>5 and c.ID_EO_COB<>6) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12) and YEAR(c.INI_REAL)=".$fila['año'] ."
											group by MES order by MES;
											;";
													
											$resultad = mysqli_query($conexion, $consult);
											while($fil = mysqli_fetch_array($resultad)){
												$nCollapse++;
												$collapsen0="#collapse0".$nCollapse;
												$collapse0="collapse0".$nCollapse;
													
												
												?>
                                                <div id="accordion-1" class="accordion">
                                                    <div class="">
                                                        <div class="card-header py-2" id="headingTwo">
                                                            <h5 class="mb-0">
                                                                <a data-toggle="collapse" data-target="<?php echo $collapsen0; ?>" aria-expanded="true" aria-controls="<?php echo $collapse0; ?>" class='bg-inverse-secondary'>
                                                                    <div class="row ">
                                                                        <div class="col"><?php echo $fil['MES']; ?></div>
                                                                        <div class="col font-weight-normal ">
                                                                            <div class="row  text-right">
                                                                                <div class="col-8 col-sm-6 "><?php echo $fil['CantCPe']; ?></div>
                                                                                <div class="col-4 col-sm-6"><?php
																					if ($fil['VALORPROYECTOe']!=""){
																						echo number_format($fil['VALORPROYECTOe'], 0, ",", "."); 
																					}else{
																						echo number_format(0, 0, ",", "."); 
																					}
																				 ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col font-weight-normal">
                                                                            <div class="row text-right">
                                                                                <div class="col-8 col-sm-6 "><?php echo $fil['CantCPt']; ?></div>
                                                                                <div class="col-4 col-sm-6"><?php if ($fil['VALORPROYECTOt']!=""){
																					echo number_format($fil['VALORPROYECTOt'], 0, ",", ".");  
																				}else{
																					echo number_format(0, 0, ",", "."); 
																				}?></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col font-weight-bold">
                                                                            <div class="row text-right">
                                                                                <div class="col-8 col-sm-6 "><?php $CPtotal=  $fil['CantCPe']+$fil['CantCPt'];echo $CPtotal;?></div>
                                                                                <div class="col-4 col-sm-6"><?php $ValorTotal= $fil['VALORPROYECTOe']+$fil['VALORPROYECTOt'];echo  number_format($ValorTotal, 0, ",", "."); ?></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        </a>
                                                        </h5>
                                                    </div>
                                                    <div id="<?php echo $collapse0; ?>" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion-2">
                                                        <div class="card-body">
                                                            <div class="card-body">

                                                                <table class="table table-striped table-responsive-lg">
                                                                    <thead>
                                                                        <tr class="bg-inverse-dark text-center">

                                                                            <th>
                                                                                <div class="col ">CC-CP</div>
                                                                            </th>
                                                                            <th>
                                                                                <div class="row ">
                                                                                    <div class="col-8 col-sm-6 ">N° Proyectos </div>
                                                                                    <div class="col-4 col-sm-6">Valor</div>
                                                                                </div>
                                                                            </th>
                                                                            <th>
                                                                                <div class="row ">
                                                                                    <div class="col-8 col-sm-6 ">N° Proyectos</div>
                                                                                    <div class="col-4 col-sm-6">Valor</div>
                                                                                </div>
                                                                            </th>
                                                                            <th>
                                                                                <div class="row ">
                                                                                    <div class="col-8 col-sm-6 ">N° Proyectos</div>
                                                                                    <div class="col-4 col-sm-6"> Valor</div>
                                                                                </div>
                                                                            </th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
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
																	// consulta valores detalle de CP por mes x año
																	$consul = "select cc.NOM_CC, c.cp, CASE
																			WHEN c.ID_EO_COB = 4 THEN 1
																		END CantCPe ,
																	CASE
																			WHEN c.ID_EO_COB <> 4 THEN 1
																		END CantCPt ,
																	CASE
																			WHEN c.ID_EO_COB = 4 THEN c.VALORPROYECTO
																		END VALORPROYECTOe ,
																	CASE
																			WHEN c.ID_EO_COB <> 4 THEN c.VALORPROYECTO
																		END VALORPROYECTOt
																	from sistemaproyectos.concepto as c inner join sistemaproyectos.estado_cobranza as e on c.ID_EO_COB=e.ID_EO_COB
																	inner join sistemaproyectos.informe_de_pago as i on c.CP=i.CP
																	inner join sistemaproyectos.centro_de_costo as cc on c.ID_CC=cc.ID_CC
																	WHERE c.ID_TIPO='1' and (c.ID_EO_COB<>5 and c.ID_EO_COB<>6) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12) and YEAR(c.INI_REAL)=".$fila['año'] ." and MONTH(c.INI_REAL)=".$fil['MES'] ."
																	order by cc.NOM_CC, c.cp
																	;";
																			
																	$result = mysqli_query($conexion, $consul);
																	while($fil2 = mysqli_fetch_array($result)){
																		
																		
																		?>
																	
                                                                        <tr>
                                                                            <td><?php echo $fil2['NOM_CC']."-".$fil2['cp']; ?></td>
                                                                            <td>
                                                                                <div class="row  text-right ">
                                                                                    <div class="col-8 col-sm-6 "><?php 
																					
																					if ($fil2['CantCPe']!=""){
																						echo number_format($fil2['CantCPe'], 0, ",", "."); 
																					}else{
																						echo number_format(0, 0, ",", "."); 
																					}
																					 ?></div>
                                                                                    <div class="col-4 col-sm-6"><?php
																					if ($fil2['VALORPROYECTOe']!=""){
																						echo number_format($fil2['VALORPROYECTOe'], 0, ",", "."); 
																					}else{
																						echo number_format(0, 0, ",", "."); 
																					}
																				 ?></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row text-right ">
                                                                                    <div class="col-8 col-sm-6 "><?php 
																					if ($fil2['CantCPt']!=""){
																						echo number_format($fil2['CantCPt'], 0, ",", "."); 
																					}else{
																						echo number_format(0, 0, ",", "."); 
																					}?></div>
                                                                                    <div class="col-4 col-sm-6"><?php
																					if ($fil2['VALORPROYECTOt']!=""){
																						echo number_format($fil2['VALORPROYECTOt'], 0, ",", "."); 
																					}else{
																						echo number_format(0, 0, ",", "."); 
																					}
																				 ?></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="row text-right font-weight-bold ">
                                                                                    <div class="col-8 col-sm-6 "><?php $CPtotal=  $fil2['CantCPe']+$fil2['CantCPt'];echo $CPtotal;?></div>
                                                                                    <div class="col-4 col-sm-6"><?php $ValorTotal= $fil2['VALORPROYECTOe']+$fil2['VALORPROYECTOt'];echo  number_format($ValorTotal, 0, ",", "."); ?></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                     <?php } ?> 

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php } ?>
                                            </div>
											<?php } ?>
   
                                            <div class="row">
                                                <div class="col-md-12 grid-margin">
                                                    <div class="faq-section">
                                                        <div class="container-fluid bg-inverse-primary py-2">
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
														// consulta valores total general
														$consul0 = "select YEAR(c.INI_REAL) as año, count(DISTINCT(CASE
																WHEN c.ID_EO_COB = 4 THEN c.CP
															END)) CantCPe ,
														count(DISTINCT(CASE
																WHEN c.ID_EO_COB <> 4 THEN c.CP
															END)) CantCPt ,  
														SUM(CASE
																WHEN c.ID_EO_COB = 4 THEN c.VALORPROYECTO
															END) VALORPROYECTOe ,
														SUM(CASE
																WHEN c.ID_EO_COB <> 4 THEN c.VALORPROYECTO
															END) VALORPROYECTOt
														from sistemaproyectos.concepto as c inner join sistemaproyectos.estado_cobranza as e on c.ID_EO_COB=e.ID_EO_COB
														inner join sistemaproyectos.informe_de_pago as i on c.CP=i.CP
														inner join sistemaproyectos.centro_de_costo as cc on c.ID_CC=cc.ID_CC
														WHERE c.ID_TIPO='1' and (c.ID_EO_COB<>5 and c.ID_EO_COB<>6) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12);
														";
																
														$result0 = mysqli_query($conexion, $consul0);
														while($fila0 = mysqli_fetch_array($result0)){
															
															
															?>
														  <div class="row font-weight-bold">
                                                                <div class="col ">Total</div>
                                                                <div class="col ">
                                                                    <div class="row  text-right ">
                                                                        <div class="col-8 col-sm-6 "><?php echo $fila0['CantCPe']; ?></div>
                                                                        <div class="col-4 col-sm-6"><?php
																					if ($fila0['VALORPROYECTOe']!=""){
																						echo number_format($fila0['VALORPROYECTOe'], 0, ",", "."); 
																					}else{
																						echo number_format(0, 0, ",", "."); 
																					}
																				 ?></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col ">
                                                                    <div class="row text-right ">
                                                                        <div class="col-8 col-sm-6 "><?php echo $fila0['CantCPt']; ?></div>
                                                                        <div class="col-4 col-sm-6"><?php
																					if ($fila0['VALORPROYECTOt']!=""){
																						echo number_format($fila0['VALORPROYECTOt'], 0, ",", "."); 
																					}else{
																						echo number_format(0, 0, ",", "."); 
																					}
																				 ?></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="row text-right ">
                                                                        <div class="col-8 col-sm-6 "><?php $totalcp= $fila0['CantCPe']+$fila0['CantCPt']; echo $totalcp;?></div>
                                                                        <div class="col-4 col-sm-6"><?php $ValorTotal= $fila0['VALORPROYECTOe']+$fila0['VALORPROYECTOt'];echo  number_format($ValorTotal, 0, ",", "."); ?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
															<?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div id="accordion-2" class="accordion">
                                                </div>
                                            </div>
                                            <!--  </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                            <div class="row" style="font-size:14px;">
                                <div class="col-md-4 grid-margin">
                                    <div class="card-header header-sm d-flex justify-content-between align-items-center" style="background: linear-gradient(to top, #5768f3, #1c45ef);">
                                        <h4 class="card-title text-white">% Proy. Enviados del Total (por Fecha de Asignación)</h4>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 grid-margin">
                                                    <div class="faq-section">
                                                        <div class="container-fluid bg-inverse-primary py-2">
                                                            <div class="row font-weight-bold text-center">
                                                                <div class="col text-left">Año</div>
                                                                <div class="col ">% Proyectos Enviados</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
											
											$consulta4 = "select  YEAR(c.INI_REAL) as año,SUM(c.VALORPROYECTO) as valor, SUM(i.VALOR_IP) as valorIP  
											from sistemaproyectos.concepto as c 
											inner join sistemaproyectos.informe_de_pago as i on c.CP=i.CP
											WHERE c.ID_TIPO='1' and ( c.ID_EO_COB<>5 and c.ID_EO_COB<>6) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12)
											group by año";
													
											$resultado4 = mysqli_query($conexion, $consulta4);
											while($fila4 = mysqli_fetch_array($resultado4)){
												
												
												?>
                                            <div class="faq-section">
                                                <div class="container-fluid bg-secondary py-2 " style="font-size:14px">
                                                    <div class="row ">
                                                        <div class="col  font-weight-bold " style="font-size:14px"><?php echo $fila4['año']; ?></div>
                                                        <div class="col text-right"><?php $porcentaje=($fila4['valorIP']*100)/$fila4['valor']; echo number_format($porcentaje, 2, '.', '')."%"; ?></div>
                                                    </div>
                                                </div>
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
												
												$consulta5 = "select  MONTH(c.INI_REAL) AS MES,SUM(c.VALORPROYECTO) as valor, SUM(i.VALOR_IP) as valorIP  
												from sistemaproyectos.concepto as c 
												inner join sistemaproyectos.informe_de_pago as i on c.CP=i.CP
												WHERE c.ID_TIPO='1' and ( c.ID_EO_COB<>5 and c.ID_EO_COB<>6) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12) and YEAR(c.INI_REAL)=".$fila4['año']."
												group by MES;";
														
												$resultado5 = mysqli_query($conexion, $consulta5);
												while($fila5 = mysqli_fetch_array($resultado5)){
													$nCollapse++;
													$collapsen5="#collapse5".$nCollapse;
													$collapse5="collapse5".$nCollapse;
													
													
												?>
                                                <div id="accordion-1" class="accordion">
                                                    <div class="">
                                                        <div class="card-header py-2" id="headingTwo">
                                                            <h5 class="mb-0">
                                                                <a data-toggle="collapse" data-target="<?php echo $collapsen5;?>" aria-expanded="true" aria-controls="<?php echo $collapse5;?>" class='bg-inverse-secondary'>
                                                                    <div class="row ">
                                                                        <div class="col"><?php echo $fila5['MES']; ?></div>
                                                                        <div class="col text-right font-weight-normal "><?php $porcentaje=($fila5['valorIP']*100)/$fila5['valor']; echo number_format($porcentaje, 2, '.', '')."%"; ?></div>
                                                                    </div>
                                                        </div>
                                                        </a>
                                                        </h5>
                                                    </div>
                                                    <div id="<?php echo $collapse5;?>" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion-2">
                                                        
                                                            <div class="card-body">
                                                                <table class="table table-striped table-responsive">
                                                                    <thead>
                                                                        <tr class="bg-inverse-dark text-center">
                                                                            <th>
                                                                                <div class="col ">CC</div>
                                                                            </th>
                                                                            <th>
                                                                                <div class="col ">CP</div>
                                                                            </th>
                                                                            <th>
                                                                                <div class="col ">% Proy. Enviados</div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
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
																	
																	$consulta6 = " SELECT C.ID_EO_COB, cc.NOM_CC, c.CP, c.INI_REAL, c.VALORPROYECTO , i.VALOR_IP from sistemaproyectos.concepto as c
																	inner join sistemaproyectos.centro_de_costo as cc on c.ID_CC=cc.ID_CC
																	INNER join sistemaproyectos.informe_de_pago as i on c.cp=i.CP
																	WHERE c.ID_TIPO='1' and (c.ID_EO_COB<>5 and c.ID_EO_COB<>6) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12) and YEAR(c.INI_REAL)=".$fila4['año']." and MONTH(c.INI_REAL)=".$fila5['MES']."
																	group by c.cp
																	order by NOM_CC, CP;";
																			
																	$resultado6 = mysqli_query($conexion, $consulta6);
																	while($fila6 = mysqli_fetch_array($resultado6)){
																		
																		?>
                                                                        <tr>
                                                                            <td><?php echo $fila6['NOM_CC']; ?></td>
                                                                            <td class="text-right"><?php echo $fila6['CP']; ?></td>
                                                                            <td class="text-right"><?php $porcentaje=($fila6['VALOR_IP']*100)/$fila6['VALORPROYECTO']; echo number_format($porcentaje, 2, '.', '')."%"; ?></td>
                                                                        </tr>
                                                                     <?php } ?> 
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
											<?php } ?>
                                            <div class="faq-section">
                                                
                                                <div class="row">
                                                    <div class="col-md-12 grid-margin">
                                                        <div class="faq-section">
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
															
															$consulta7 = "select  SUM(c.VALORPROYECTO) as valor, SUM(i.VALOR_IP) as valorIP  
															from sistemaproyectos.concepto as c 
															inner join sistemaproyectos.informe_de_pago as i on c.CP=i.CP
															WHERE c.ID_TIPO='1' and ( c.ID_EO_COB<>5 and c.ID_EO_COB<>6) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12);";
																	
															$resultado7 = mysqli_query($conexion, $consulta7);
															while($fila7 = mysqli_fetch_array($resultado7)){
																
																?>
                                                            <div class="container-fluid bg-inverse-primary py-2">
                                                                <div class="row font-weight-bold">
                                                                    <div class="col text-left ">Total</div>
                                                                    <div class="col text-right "><?php $porcentaje=($fila7['valorIP']*100)/$fila7['valor']; echo number_format($porcentaje, 2, '.', '')."%"; ?></div>
                                                                </div>
                                                            </div>
															<?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
															
								
								
                                <div class="col-md-8 grid-margin">
                                    <div class="card-header header-sm d-flex justify-content-between align-items-center" style="background: linear-gradient(to top, #5768f3, #1c45ef);">
                                        <h4 class="card-title text-white">Estatus Proyectos Actuales(por Área)</h4>
                                    </div>
                                    <div class="card" style="font-size:14px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 grid-margin">
                                                    <div class="faq-section">
                                                        <div class="container-fluid bg-inverse-primary py-2">
                                                            <div class="row font-weight-bold text-center">
                                                                <div class="col ">CC</div>
                                                                <div class="col ">N° Proyectos</div>
                                                                <div class="col ">Proyectado</div>
                                                                <div class="col ">Proy.-Term.</div>
                                                                <div class="col ">% Avance Prom</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
								
								$consulta1 = "select cc.NOM_CC, count(DISTINCT(c.CP)) as cant, sum(c.VALORPROYECTO) as valorArea, CAST(AVG(AVANCE) AS DECIMAL(10,0)) as prom
								FROM sistemaproyectos.concepto as c
								inner join sistemaproyectos.centro_de_costo as cc on c.ID_CC=cc.ID_CC
								WHERE c.ID_TIPO='1'  and (c.ID_EO_COB=4 ) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12)
								group by cc.NOM_CC
								order by cc.NOM_CC;";
										$nColl=0;$nproy=0;$contProyectado=0;$contAvance=0;$contProm=0;
								$resultado1 = mysqli_query($conexion, $consulta1);
								while($fila1 = mysqli_fetch_array($resultado1)){
									$nproy=$nproy+$fila1['cant'];
									$contProyectado=$contProyectado+$fila1['valorArea'];
									$nproyterm=($fila1['prom']*$fila1['valorArea'])/100;
									$nprom=$fila1['prom']/$fila1['cant']; 
									$contProm=$contProm+$nprom; 
									$contProyTerm=$contProyTerm+$nproyterm;
								$nColl++;
									
									?>
								
                                            <div class="faq-section">
                                                
                                                <div class="container-fluid bg-secondary py-2 ">
                                                    <div class="row text-right font-weight-bold " style="font-size:14px">
                                                        <div class="col "><?php echo $fila1['NOM_CC'];?></div>
                                                        <div class="col "><?php echo $fila1['cant'];?></div>
                                                        <div class="col "><?php echo number_format($fila1['valorArea'], 0, ",", ".");?></div>
                                                        <div class="col "><?php $proyTerm=($fila1['prom']*$fila1['valorArea'])/100; echo number_format($proyTerm, 0, ",", ".");?></div>
                                                        <div class="col "><?php echo $fila1['prom']."%";?></div>
                                                    </div>
                                                </div>
												<?php
												
								
								
								
												$consulta = "select cc.NOM_CC,c.cp, c.NOMBRE, c.VALORPROYECTO, c.AVANCE
												FROM sistemaproyectos.concepto as c
												inner join sistemaproyectos.centro_de_costo as cc on c.ID_CC=cc.ID_CC
												WHERE c.ID_TIPO='1'  and (c.ID_EO_COB=4 ) and (c.ID_CC=9 or c.ID_CC=10 or c.ID_CC=11 or c.ID_CC=12) and cc.NOM_CC='".$fila1['NOM_CC']."' order by  c.cp;";
												$resultado = mysqli_query($conexion, $consulta);
												$nCollapse3=0;
												while($fila3 = mysqli_fetch_array($resultado)){
													$nCollapse3++;
													
													$collapsen3="#collapse3".$nCollapse3.$nColl;
													$collapse3="collapse3".$nCollapse3.$nColl;
												?>
                                                <div id="accordion-23" class="accordion">
                                                    <div class="">
                                                        <div class="card-header py-2" id="headingTwo3">
                                                            <h5 class="mb-0">
                                                                <a data-toggle="collapse" data-target="<?php echo $collapsen3;?>" aria-expanded="true" aria-controls="<?php echo $collapse3;?>" class='bg-inverse-secondary'>
                                                                    <div class="row text-right">
                                                                        <div class="col"><?php echo $fila3['cp'];?></div>
                                                                        <div class="col ">1</div>
                                                                        <div class="col "><?php echo number_format($fila3['VALORPROYECTO'], 0, ",", ".");?></div>
                                                                        <div class="col "><?php $proyTerm=($fila3['AVANCE']*$fila3['VALORPROYECTO'])/100; echo number_format($proyTerm, 0, ",", ".");?></div>
                                                                        <div class="col "><?php echo $fila3['AVANCE']."%";?></div>
                                                                    </div>
                                                        </div>
                                                        </a>
                                                        </h5>
                                                    </div>
                                                    <div id="<?php echo $collapse3;?>" class="collapse " aria-labelledby="headingTwo3" data-parent="#accordion-23">
                                                        
                                                            <div class="card-body">
                                                                <table class="table table-striped table-responsive-lg">
                                                                    <thead>
                                                                        <tr class="bg-inverse-dark text-center">
                                                                            <th><div class="col ">Descripción</div></th>
                                                                            <th><div class="col ">N° Proyectos</div></th>
                                                                            <th><div class="col ">Proyectado</div></th>
                                                                            <th><div class="col ">Proy.-Term.</div></th>
                                                                            <th><div class="col ">% Avance Prom</div></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="text-right">
                                                                            <td><?php echo $fila3['NOMBRE'];?></td>
                                                                            <td>1</td>
                                                                            <td><?php echo number_format($fila3['VALORPROYECTO'], 0, ",", ".");?></td>
                                                                            <td><?php $proyTerm=($fila3['AVANCE']*$fila3['VALORPROYECTO'])/100; echo number_format($proyTerm, 0, ",", ".");?></td>
                                                                            <td><?php echo $fila3['AVANCE']."%";?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                                <?php }?>
                                            </div>
                          <?php	}?>   	
											<div class="row ">
                                                <div class="col-md-12 grid-margin">
                                                    <div class="faq-section">
                                                        <div class="container-fluid bg-inverse-primary py-2">
                                                            <div class="row font-weight-bold text-right">
                                                                <div class="col text-center">Total</div>
                                                                <div class="col "><?php echo $nproy;?></div>
                                                                <div class="col "><?php echo number_format($contProyectado, 0, ",", ".");?></div>
                                                                <div class="col "><?php echo number_format($contProyTerm, 0, ",", ".");?></div>
                                                                <div class="col "><?php echo number_format($contProm, 0, ",", ".")."%";?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function volver() {
                                    window.location.href = 'reporte.php?i=1';
                                }

                                function cancelar() {
                                    if (confirm("Está seguro que desea salir?")) {
                                        parent.location.href = 'panel.php';
                                    }
                                }
                            </script>
                            <!-- content-wrapper ends -->
                            <!-- partial:partials/_footer.html -->
                            <footer class="footer">
                                <div class="container-fluid clearfix">
                                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020
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
            <script src="./assets/vendors/chart.js/Chart.min.js"></script>
            <script src="./assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
            <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
            <script src="./assets/vendors/justgage/raphael-2.1.4.min.js"></script>
            <script src="./assets/vendors/justgage/justgage.js"></script>
            <script src="./assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
            <!-- End plugin js for this page -->
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="./assets/js/demo_1/dashboard.js"></script>
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
            </script>
            <!-- End custom js for this page -->
    </body>

</html>