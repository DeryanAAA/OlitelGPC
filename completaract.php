<?php $hoy = date("Y-m-d");
$idactividad = $_GET['idactividad'];     
$cp = $_GET['cp'];     
$p = $_GET['p'];   
//$porcentaje = 100;
$avanceReal= $_GET['av'];  
echo "avanceReal= ". $avanceReal ."<br>"; 
//echo "act= ".$idactividad; exit();
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



	$consulta1 = "SELECT * FROM ACTIVIDAD WHERE ID_ACTIVIDAD = '".$idactividad."'";

			$resultado1 = mysqli_query($conexion, $consulta1);


          while($fila = mysqli_fetch_array($resultado1)){ 
		  
		  $ava = $fila["META_ACTIVIDAD"];
		  }


//$porcentaje=round(($avanceReal*100)/$ava);
$porcentaje=number_format(($avanceReal*100)/$ava,2);




		
        $consulta = "UPDATE ACTIVIDAD set  PORCENTAJE_ACTIVIDAD =".$porcentaje." WHERE ID_ACTIVIDAD=".$idactividad;
		//echo    $consulta; exit();
		$ok=mysqli_multi_query($conexion, $consulta);
			// $resultado = mysqli_prepare($conexion, $consulta);
		
			// if(!$resultado){
				// echo "Error al editar proy.";
              
			// }
        // $ok=mysqli_stmt_bind_param($resultado,"sss",$porcentaje,$idactividad);
			// $ok=mysqli_stmt_execute($resultado);



   
    



if($ok == false){
            echo "error en ejecucion";
				
			}else{
            
           
            $consulta3 = "INSERT INTO DETALLE_ACTIVIDAD (FECHA, ID_ACTIVIDAD, DESCRIPCION) VALUES (?,?,?)";

			$resultado3 = mysqli_prepare($conexion, $consulta3);


if(!$resultado3){
				echo "Error al Registrar.";
              
			}

$desc = "Se completó la tarea exitosamente";
$ok3=mysqli_stmt_bind_param($resultado3,"sss",$hoy,$idactividad,$desc);
$ok3=mysqli_stmt_execute($resultado3);



if($ok3 == false){
            echo "error en ejecucion bd";
				
			}else{
            
           header('Location: actividadst.php?cp='.$cp.'&p='.$p);
            
        }
            
        }

        

		
		mysqli_close($conexion);
		
		
		?>











