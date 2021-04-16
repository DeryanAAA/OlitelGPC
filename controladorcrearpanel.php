<?php
$npanel = $_POST['npanel'];
$idfase = $_POST['idfase'];
$cp = $_POST['cp'];
$proyecto = $_POST['proyecto'];
   //echo "proyecto=".$proyecto ;


require("bd.php");
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

mysqli_select_db($conexion, $base_datos) or die("No se encuentra la BD");
mysqli_set_charset($conexion, "utf8");


$consulta = "INSERT INTO PANEL (NOMBRE_PANEL, ID_FASE) VALUES (?,?)";

$resultado = mysqli_prepare($conexion, $consulta);


if(!$resultado){
				echo "Error al Registrar.";
              
			}


$ok=mysqli_stmt_bind_param($resultado,"ss",$npanel,$idfase);
$ok=mysqli_stmt_execute($resultado);

/*------------------------------------------------------------------*/


   
 
 









if($ok == false){
            echo "error en ejecucion bd";
				
			}else{
            
           header('Location: visordeactividades.php?idfase='.$idfase.'&p='.$proyecto.'&cp='.$cp);
            
        }





mysqli_close($conexion);






















?>















