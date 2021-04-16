		<?php
			

echo $estado;



$id_cc= $_REQUEST['cc'];

$no = "nulo";




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
		
        $consulta = "UPDATE CENTRO_DE_COSTO set ESTADO=? WHERE ID_CC=?";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar usuario";
              
			}
        $ok=mysqli_stmt_bind_param($resultado,"ss",$no,$id_cc);
			$ok=mysqli_stmt_execute($resultado);


/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/




if($ok == false){
            echo "error en ejecucion";
				
			}else{
            
          header('Location: listadocc.php');
            
            
        }

        

		
		mysqli_close($conexion);
		
		
		?>