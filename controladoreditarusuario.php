		<?php

$id_usuario = $_POST['id'];
$nom_usuario = $_POST['nom_usuario'];
$rut_usuario = $_POST['rut_usuario'];
$rol_usuario = $_POST['rol_usuario'];
$clave_usuario = $_POST['clave_usuario'];





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
		
        $consulta = "UPDATE PERSONAS set NOM_PERSONAS=?, RUT=?, ID_ROL=?, CLAVE=? WHERE ID_PERSONAS=?";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar proy.";
              
			}
        $ok=mysqli_stmt_bind_param($resultado,"sssss",$nom_usuario,$rut_usuario,$rol_usuario,$clave_usuario,$id_usuario);
			$ok=mysqli_stmt_execute($resultado);


/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/




if($ok == false){
            echo "error en ejecucion";
				
			}else{
            
          header('Location: listadopersonas.php');
            
            
        }

        

		
		mysqli_close($conexion);
		
		
		?>