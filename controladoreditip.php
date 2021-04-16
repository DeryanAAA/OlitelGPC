		<?php

$nip = $_POST['nip'];
$vip = $_POST['vip'];
$fip = $_POST['fip'];
$ncoti = $_POST['ncoti'];
$id_ip = $_POST['id_ip'];
$observaciones = $_POST['observaciones'];





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
		
        $consulta = "UPDATE INFORME_DE_PAGO set NIP='".$nip."', FECHAENVIOIP='".$fip."', NRO_COTI='".$ncoti."', VALOR_IP=".$vip.", OBSERVACIONES='".$observaciones."' WHERE ID_IP=".$id_ip;
		/*	$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar proy.";
              
			}
        $ok=mysqli_stmt_bind_param($resultado,"sssss",$nip,$fip,$ncoti,$vip,$id_ip,$observaciones);
			$ok=mysqli_stmt_execute($resultado);*/


/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/



/*
if($ok == false){
            echo "error en ejecucion";
				
			}else{
            
          header('Location: listadoip.php');
            
            
        }
*/
        $resultado = mysqli_query($conexion, $consulta);		

		if(!$resultado){  		

			echo 'MySQL Error: ' . mysqli_error($conexion).' favor reportar al administrador del sistema<br>'.$consulta;  
			//echo 'MySQL Error: favor reportar al administrador del sistema<br>';  

			exit;  

		}  else {
			 header('Location: listadoip.php');
		}

		
		mysqli_close($conexion);
		
		
		?>