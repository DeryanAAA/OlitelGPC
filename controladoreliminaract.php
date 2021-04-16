<?php
$idactividad = $_GET['idactividad'];
$idfase = $_GET['idfase'];
$proyecto = $_GET['p'];
$cp = $_GET['cp'];

//echo "proyecto=".$proyecto;
 require("bd.php");
			
			$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
			
			//Validar conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}






$ejecutar="DELETE from ACTIVIDAD  WHERE ID_ACTIVIDAD  ='$idactividad'";

$resultado = mysqli_query($conexion,$ejecutar);

if (!$resultado){
    echo "Error";
}else{
    
    
    
           header('Location: visordeactividades.php?idfase='.$idfase.'&p='.$proyecto.'&cp='.$cp);
    
    
    
    
    
    
    

}
?>
