<!DOCTYPE html>
<html lang="en">
    
       <?php include "bd.php"; ?>
      <?php $hoy = date("Y-m-d") ?>
      
    
    <?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['rolcobr'] == '3' ){

} else {

   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}




?>
  <head>
      
<style>
        #barra{
            
            height: 12px;
            
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
             float: center;
             
             margin-right: 35px;
             margin-left: 35px;
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
    
        h4.concss {
    font-size: 24px;
    font-family: Roboto;
    font-weight: bolder;
    font-style: bold;
    text-transform: none;
    text-decoration: none;
    letter-spacing: 1px;
    color: #278BCD;
    background-color: #FEFFFF;

    text-shadow: 3px 3px 3px #E7E7E7;
    
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
    <script src="assets/javascript/jquery-3.5.1.min.js"></script>
<script src="assets/javascript/main.js"></script>
<script src="assets/javascript/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">



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
                     $usuario = "SELECT * FROM personas WHERE RUT = '".$_SESSION['username']."'";
    
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
        <!-- partial:../../partials/_settings-panel.html -->
      
       
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
          <li class="nav-item"><a class="nav-link" href="formagregarInformeP.php">Agregar Informe de Pago</a></li>
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
		
      //$consulta = "SELECT * FROM informe_de_pago";
      //$consulta = "SELECT ip.ID_IP, ip.ID_CC, ip.ID_CP, ip.ID_CC, ip.ID_TIPO, ip.NRO_COTI, ip.ESTADO, ip.FECHAENVIOIP, ip.NIP, ip.VALOR_IP, ip.VALOR_FACTURADO, ip.OBSERVACIONES, concepto.CP, concepto.OTT, concepto.AVANCE, concepto.VALORPROYECTO, je.NOM_JDE, cc.ID_CC, cc.NOM_CC, tp.ID_TIPO, tp.NOM_TIPO, pf.ID_IP, pf.ID_FACT, f.ID_FACT, f.NFACT
      //FROM informe_de_pago ip
      //INNER JOIN centro_de_costo cc ON ip.ID_CC = cc.ID_CC
      //INNER JOIN concepto concepto ON ip.ID_CP = concepto.CP
      //INNER JOIN jefe_entel je ON concepto.ID_JDE = je.ID_JDE
      //INNER JOIN tipo tp ON ip.ID_TIPO = tp.ID_TIPO
      //INNER JOIN pago_fact pf ON ip.ID_IP = pf.ID_IP
      //INNER JOIN factura f ON pf.ID_FACT = f.ID_FACT";

      $consulta = "SELECT ip.ID_IP, ip.CP, ip.ID_TIPO, ip.NRO_COTI, ip.ESTADO, ip.FECHAENVIOIP, ip.NIP, ip.VALOR_IP, ip.VALOR_FACTURADO, ip.OBSERVACIONES, concepto.OTT, concepto.ID_CC, concepto.ID_JDE, concepto.AVANCE, concepto.VALORPROYECTO ,pf.ID_IP,f.NFACT, cc.NOM_CC, tp.NOM_TIPO, je.NOM_JDE
      FROM informe_de_pago ip
      INNER JOIN concepto concepto ON concepto.CP = ip.CP
      INNER JOIN tipo tp ON tp.ID_TIPO = ip.ID_TIPO
      INNER JOIN jefe_entel je ON je.ID_JDE = concepto.ID_JDE
      INNER JOIN centro_de_costo cc ON cc.ID_CC = concepto.ID_CC
      INNER JOIN pago_fact pf ON pf.ID_IP = ip.ID_IP
      INNER JOIN factura f ON f.ID_FACT = pf.ID_FACT";
			$resultado = mysqli_query($conexion, $consulta);

      
      

      //SELECT ip.ID_IP, ip.ID_CC, ip.ID_CP, ip.ID_CC, ip.ID_TIPO, ip.NRO_COTI, ip.ESTADO, ip.FECHAENVIOIP, ip.NIP, ip.VALOR_IP, ip.VALOR_FACTURADO, ip.OBSERVACIONES, concepto.CP, concepto.OTT, concepto.AVANCE, concepto.VALORPROYECTO, cc.ID_CC, cc.NOM_CC, tp.ID_TIPO, tp.NOM_TIPO, pf.ID_IP, pf.ID_FACT, f.ID_FACT, f.NFACT
      //FROM informe_de_pago ip
      //INNER JOIN centro_de_costo cc ON ip.ID_CC = cc.ID_CC
      //INNER JOIN concepto concepto ON ip.ID_CP = concepto.CP
     // INNER JOIN tipo tp ON ip.ID_TIPO = tp.ID_TIPO
      //INNER JOIN pago_fact pf ON ip.ID_IP = pf.ID_IP
      //INNER JOIN factura f ON pf.ID_FACT = f.ID_FACT
      
     ?>    

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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
			<div class="">
				<div class="card-body">
					<div class="d-flex justify-content-between border-bottom">
						<h2 class="text-primary">Informes de Pago Emitidos</h2>
							  
					</div>
				</div>
			</div>
            <div class="row">
			<div class="col-md-6 grid-margin stretch-card">
</div>
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="concss">Listado de Informes</h4>
						   <p class="text-right">   
							<a href="generar_excel_cobr.php">
								<button type="button" class="btn btn-inverse-secondary"><img src="img/microsoft-excel.png" width="16px" height="16px"> Generar Excel</button>
							</a>
							<a title= "Agregar Proyecto" href="formagrproyectocobranza.php">
								<button  type="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Agregar Proyecto</button>
							</a>
						</p>  

                    <div class="table-responsive bordered">
                        
                      <table id="order-listing" class="table table-striped">

                       <thead>
                        <tr>
                          <th> IP </th>
                          <th> CP</th>
                          <th> CC </th>
                          <th> OTT / OPR</th>
                          <th> Tipo de Servicio</th>
                          <th> N de Factura </th>
                          <th> Responsable de Pago </th>
                          <th> N Cotizacion</th>
                          <th> Estado </th>
                          <th> Fecha de Envio  </th>
                          <th> NIP </th>
                          <th> Valor IP </th>
						              <th> Valor Facturado </th>
                          <th> Observaciones </th> 
                          <!-- <th> Valor Proyecto </th> -->
                          <th> AVANCES </th>
                          <td placeholder="Modificar"> </td>
                          <td placeholder="OC"> </td>
                          <td placeholder="VISTA"> </td>
                        </tr>
                      </thead>
                            
                         <tbody>   
                             
                          <?php
                            //$query = "SELECT * FROM informe_de_pago INNER JOIN centro_de_costo ON informe_de_pago.ID_CC = centro_de_costo.ID_CC WHERE informe_de_pago.ID_CC = centro_de_costo.ID_CC ";
                            //$query = "SELECT NOM_CC FROM 'centro_de_costo' where ID_CC =".$fila['ID_CC'];
                            //$result = $conexion->query($query);
                            
                            //if($fila['ID_CC'] = );

                            ?> 


                            
                            <?php // CODIGO POR SELECCIONAR EL NOMBRE DE ID TIPO ?>
                            <?php 
                            //if($fila['ID_TIPO'] == 1){
                             // echo "Por Proyecto" ;
                          
                            //}else if($fila['ID_TIPO'] == 2){
                            // echo "Servicio Fijo Mensual" ;
                            //}else {
                            //  echo "No corresponde a un tipo valido";
                            //}
                            while($fila = mysqli_fetch_array($resultado)){ ?>
                           
                              <tr>
                                <td><?php echo $fila['ID_IP']; ?></td>
                                <td><?php echo $fila['CP']; ?></td>
                                <td><?php echo $fila['NOM_CC']; ?></td>
                                <td><?php echo $fila['OTT']; ?></td>
                                <td><?php echo $fila['NOM_TIPO']; ?></td>
                                <td><?php echo $fila['NFACT'];  ?></td>
                                <td><?php echo $fila['NOM_JDE'];  ?></td>
                              <?php
                                //$consulta3 = "SELECT centro_de_costo.ID_CC, centro_de_costo.NOM_CC, informe_de_pago.ID_CC FROM centro_de_costo INNER JOIN informe_de_pago ON centro_de_costo.ID_CC = informe_de_pago.ID_CC";
                                //$query2 = "SELECT ip.ID_CC, cc.ID_CC, cc.NOM_CC FROM informe_de_pago ip INNER JOIN centro_de_costo cc ON ip.ID_CC = cc.ID_CC";
                                //$resultadoQuery2 = mysqli_query($conexion, $query2);
                                
                                //mysqli_close($conexion);

                                //$result = mysqli_num_rows($resultadoQuery2);
                                //if($result > 0){

                                 //while($data = mysqli_fetch_array($resultadoQuery2)){?>
                                  
                                  <?php //$nom = $data['NOM_CC'];?> 
                                  

                                  <?php
                                  //} 
                                  
                                //}
                                  ?>
                                
                                 
                                  <?php // CODIGO FILTRADO MANUAL
                                  //if($fila['ID_CC'] == 1){
                                  //  echo $fila['ID_CC'] = "Administracion";
                                   
                                  //}
                                  //else if($fila['ID_CC'] == 2){
                                  // echo $fila['ID_CC'] = "Area Comercial";
                                   
                                  //}else if($fila['ID_CC'] == 3){
                                  //  echo $fila['ID_CC'] = "Informatica";
                                    
                                  //}
                                  //else {
                                  //  echo "Datos mal Ingresados";
                                  //}
                                  
                                  ?>
                                
                                  
                                     <?php
                                 // $consultaCC = "SELECT concepto.CP, informe_de_pago.ID_CP, concepto.OTT FROM concepto INNER JOIN informe_de_pago ON concepto.CP = informe_de_pago.ID_CP WHERE concepto.CP = informe_de_pago.ID_CP";
                                  //$resultadoCC = mysqli_query($conexion, $consultaCC);
                                  //$resultsetCC = mysqli_fetch_assoc($resultadoCC);
                                 // $ROW = mysqli_fetch_array($resultadoCC);
                                  
                                   // if($ROW['CP'] == $ROW['ID_CP']){
                                    //  $OTT = $ROW['OTT'];
                                      //var_dump($fila['OTT']); 
                                  //  }else{
                                   //   echo $fila["No tiene OTT"];
                                   // }
                                     
                                  
                                     
                                  //<?php
                                 // echo $ROW['OTT'];
                                  //var_dump($ROW);
                               // }else { 
                                 // echo "no hay datos";
                               // }
                                  ?>
                                  
                                
                                
                                  
                                  
                                <?php 
                               //$consulta2 = "SELECT  tipo.ID_TIPO, tipo.NOM_TIPO, informe_de_pago.ID_IP FROM tipo INNER JOIN informe_de_pago ON tipo.ID_TIPO = informe_de_pago.ID_TIPO";
                               //$resultado2 = mysqli_query($conexion, $consulta2);
                               // $resultset = mysqli_fetch_assoc($resultado2);
                                //while ($fila = mysqli_fetch_array($resultado2)){
                                  //if($fila["ID_TIPO"] == 2){
                                   // echo $fila['ID_TIPO'] = $fila;

                                 // }else
                                  
                               // }

                               //if($fila['ID_TIPO'] == 1){
                               //  echo $fila['ID_TIPO'] = $resultset['NOM_TIPO'];
                                
                               //}
                               //else if($fila['ID_TIPO'] == 2){
                               // echo $fila['ID_TIPO'] = "Servicio Fijo Mensual";
                                
                               //}else {
                               //  echo "Datos mal Ingresados";
                               //}
                               
                              ?>
                            
                            <td><?php echo $fila['NRO_COTI']; ?></td> 

                           <td><?php 
                           if($fila['ESTADO'] != null){

                            if($fila['VALOR_FACTURADO']>=$fila['VALOR_IP']){

                              echo $fila['ESTADO'];
  
                              $sql = "UPDATE informe_de_pago SET ESTADO='Facturado' WHERE ID_IP=".$fila['ID_IP'];
                              $resultadoEstado = $conexion->query($sql);
                              
                              
                             }else {
  
                              echo $fila['ESTADO'];
  
                              $sql = "UPDATE informe_de_pago SET ESTADO='Enviado' WHERE ID_IP=".$fila['ID_IP'];
                              $resultadoEstado = $conexion->query($sql);

                             }

                           } else if($fila['VALOR_IP'] == null){

                            echo $fila['ESTADO'];
  
                              $sql = "UPDATE informe_de_pago SET ESTADO='N/A' WHERE ID_IP=".$fila['ID_IP'];
                              $resultadoEstado = $conexion->query($sql);
                           }
                           
                          ?>
                              
                              <td><?php echo $fila['FECHAENVIOIP']; ?></td> 
                              <td><?php echo $fila['NIP']; ?></td> 
                            <td><?php  echo $fila['VALOR_IP']; ?></td>
                            <td><?php echo $fila['VALOR_FACTURADO']; ?></td>
                            <td><?php  echo $fila['OBSERVACIONES']; ?></td>
                            
                             <!-- <td> <?php //echo $fila['VALORPROYECTO'];?> </td>  --> 
                             <?php $AVANCE=$fila['AVANCE'] ?>
                            <td><?php echo $AVANCE."% <meter max=100 id='barra' value=".$AVANCE." low='30' high='100' optimun='60'></meter>"; ?></td>
                        
                         <!--     
                        < ?php      
                         $consulta2 = "SELECT * FROM CONCEPTO WHERE CONCEPTO.CP =".$fila['CP'];
			             $resultado2 = mysqli_query($conexion, $consulta2);
    
                          while($ROW = mysqli_fetch_array($resultado2)){ ?>
                              
                              
                            <td>< ?php echo  number_format($ROW['VALORPROYECTO'], 0, ",", "."); $AVANCE=$ROW['AVANCE'] ?></td>
                              
                         
    
                        < ?php  }  ?>
                              -->

					
          <?php // <td><?php echo $AVANCE."% <meter max=100 id='barra' value=".$AVANCE." low='30' high='60' optimun='100'></meter>"; </td> ?>

                           
                           
          <td >
                                <a href='formeditip.php?ID_IP=<?PHP echo $fila['ID_IP']; ?>'><section class='imgtb'></section></a></td>
                          
                          
                                <td > <a href= 'detalleip.php?ID_IP=<?php echo $fila['ID_IP']; ?>'><section class='dtl'></section></a></td>
                            
                                <td ><a href= 'formagregaroc.php?idfactura=<?php echo $fila['ID_FACT']; ?>'><button type='button' class='btn btn-danger'> OC </button></a>
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
let temp = $("#btn1").clone();
$("#btn1").click(function(){
    $("#btn1").after(temp);
});

$(document).ready(function(){
  var table = $('#order-listing').DataTable({
       orderCellsTop: true,
       fixedHeader: true 
    });

    //Creamos una fila en el head de la tabla y lo clonamos para cada columna
    $('#order-listing thead tr').clone(true).appendTo( '#order-listing thead' );

    $('#order-listing thead tr:eq(1) th').each( function (i) {
        var title = $(this).text(); //es el nombre de la columna
        $(this).html( '<input type="text" placeholder="Filtrar por'+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );   
});

</script>




 <script>
        $(documents).ready(function() {
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