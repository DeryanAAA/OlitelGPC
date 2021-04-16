<?php


$id= $_REQUEST['idpersona'];

$no = "no";




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
		
        $consulta = "UPDATE PERSONAS set ACTIVO=? WHERE ID_PERSONAS=?";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar usuario";
              
			}
        $ok=mysqli_stmt_bind_param($resultado,"ss",$no,$id);
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