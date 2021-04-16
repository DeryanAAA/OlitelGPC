		<?php
			
			
 $nom_cc = $_POST['NOM_CC'];

$agrupacion = $_POST['ID_AGRUP'];
$estado = $_POST['estado'];
$detalle =$_POST['ID_DETALLE'];
$linea =$_POST['ID_LINEA'];
$id_cc =$_POST['ID_CC'];


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
		
        $consulta = "UPDATE CENTRO_DE_COSTO set NOM_CC='$nom_cc', ID_LINEA=$linea, ID_AGRUP=$agrupacion, ID_DETALLE=$detalle, ESTADO='$estado'  WHERE ID_CC=$id_cc";

			$resultado = mysqli_prepare($conexion, $consulta);
		
			// if(!$resultado){
				// echo "Error al editar proy.";
              
			// }
        // $ok=mysqli_stmt_bind_param($resultado,"ssssss",$nom_cc,$linea,$agrupacion,$detalle,$estado,$id_cc);
				 
			// $ok=mysqli_stmt_execute($resultado);

// $consulta = "UPDATE supentel set NOM_SUPENTEL='$NOM_SUPENTEL' WHERE ID_SUPENTEL=$ID_SUPENTEL";
			// $resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar Cliente";
              
			}
			$resultado = mysqli_query($conexion, $consulta);
/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/


   
    



 if(!$resultado){  
            echo "error en ejecucion";
				
			}else{
            
          header('Location: listadocc.php ');
            
            
        }

        

		
		mysqli_close($conexion);
		
		
		?>