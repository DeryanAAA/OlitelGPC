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

$ID_DETALLE= $_POST['ID_DETALLE'];
$DESC_DET = $_POST['DESC_DET'];

  $query="SELECT * FROM detalle WHERE ID_DETALLE ='$ID_DETALLE'";
        $valor_ant= $conexion->query($query);
        $row=$valor_ant->fetch_assoc();

        


     
        

		
        $consulta = "UPDATE detalle set ID_DETALLE='$ID_DETALLE', DESC_DET='$DESC_DET' WHERE ID_DETALLE='$ID_DETALLE'";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar Detalle";
              
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
			 header('Location: listadoDetalle.php');
		}


        

		
		mysqli_close($conexion);
		
		
		?>