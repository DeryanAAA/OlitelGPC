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

$nfact = $_POST['nfact'];
$vfact = $_POST['vfact'];
$ffact = $_POST['ffact'];
$idfact = $_POST['id_fact'];
$ID_CL = $_POST['ID_CL'];


  $query="SELECT * FROM FACTURA WHERE ID_FACT ='$idfact'";
        $valor_ant= $conexion->query($query);
        $row=$valor_ant->fetch_assoc();

        
        $dif = 0;
        
            

if($vfact>$row['VALOR']){
    
    $dif = $vfact-$row['VALOR'];
     $total = $row['POR_FACTURAR']+$dif;

    
}else if($vfact<$row['VALOR']){
    
    $dif = $row['VALOR']-$vfact;
     $total = $row['POR_FACTURAR']-$dif;

    
}




     
        

		
        // $consulta = "UPDATE FACTURA set NFACT=?, VALOR=?, F_FACTURA=?, ID_CL=? WHERE ID_FACT=?";
			// $resultado = mysqli_prepare($conexion, $consulta);
		
			// if(!$resultado){
				// echo "Error al editar proy.";
              
			// }
        // $ok=mysqli_stmt_bind_param($resultado,"ssss",$nfact,$vfact,$ffact,$ID_CL,$idfact);
			// $ok=mysqli_stmt_execute($resultado);

		  $consulta = "UPDATE FACTURA set NFACT='$nfact', VALOR=$vfact,F_FACTURA='$ffact',ID_CL= $ID_CL WHERE ID_FACT=$idfact";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar Factura";
              
			}
			$resultado = mysqli_query($conexion, $consulta);
/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/

 if(!$resultado){  		

			echo 'MySQL Error: ' . mysqli_error($conexion).' favor reportar al administrador del sistema<br>'.$consulta;  
			//echo 'MySQL Error: favor reportar al administrador del sistema<br>';  

			exit;  

		}  else {
			 header('Location: listadofacturascobranza.php');
		}


        

		
		mysqli_close($conexion);
		


        
		
		
		?>