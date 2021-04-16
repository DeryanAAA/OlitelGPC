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

$ID_CIUDAD= $_POST['ID_CIUDAD'];
$ID_REGION= $_POST['ID_REGION'];
$NOM_CIUDAD = $_POST['NOM_CIUDAD'];

  $query="SELECT * FROM ciudad WHERE ID_CIUDAD =$ID_CIUDAD";
        $valor_ant= $conexion->query($query);
        $row=$valor_ant->fetch_assoc();

        


     
        

		
        $consulta = "UPDATE ciudad set ID_CIUDAD=$ID_CIUDAD, ID_REGION=$ID_REGION, NOM_CIUDAD='$NOM_CIUDAD' WHERE ID_CIUDAD=$ID_CIUDAD";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar Ciudad";
              
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
			 header('Location: listadoCiudad.php');
		}


        

		
		mysqli_close($conexion);
		
		
		?>