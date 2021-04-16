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

$ID_SUPENTEL= $_POST['ID_SUPENTEL'];
$NOM_SUPENTEL = $_POST['NOM_SUPENTEL'];

  $query="SELECT * FROM supentel WHERE ID_SUPENTEL ='$ID_SUPENTEL'";
        $valor_ant= $conexion->query($query);
        $row=$valor_ant->fetch_assoc();

        


     
        

		
        $consulta = "UPDATE supentel set NOM_SUPENTEL='$NOM_SUPENTEL' WHERE ID_SUPENTEL=$ID_SUPENTEL";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar Cliente";
              
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
			 header('Location: listadoSupE.php');
		}


        

		
		mysqli_close($conexion);
		
		
		?>