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

$ID_FASE = $_POST['idfase'];
$idpanel = $_POST['idpanel'];
$NOMBRE_PANEL = $_POST['NOMBRE_PANEL'];
$cp = $_POST['cp'];
$p = $_POST['proyecto'];
  $query="SELECT * FROM panel WHERE ID_PANEL  ='$idpanel'";
        $valor_ant= $conexion->query($query);
        $row=$valor_ant->fetch_assoc();



     
        

		
        $consulta = "UPDATE panel set ID_PANEL  ='$idpanel ', NOMBRE_PANEL='$NOMBRE_PANEL' WHERE ID_PANEL  ='$idpanel  '";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar Fase";
              
			}
			$resultado = mysqli_query($conexion, $consulta);
        // $ok=mysqli_stmt_bind_param($resultado,"ssss",$RUT_CL,$NOM_CL,$RUT_CL);
			// $ok=mysqli_stmt_execute($resultado);


/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/





            
 if(!$resultado){  		

			echo 'MySQL Error: ' . mysqli_error($conexion).' favor reportar al administrador del sistema<br>'.$consulta;  
			//echo 'MySQL Error: favor reportar al administrador del sistema<br>';  

			exit;  

		}  else {
			 header('Location: listadoPanel.php?idpanel='.$idpanel.'&idfase='.$ID_FASE.'&cp='.$cp.'&p='.$p);
		}


        

		
		mysqli_close($conexion);
		
		
		?>