<?php

 require("bd.php");
			
			$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
			
			//Validar conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}





$id= $_REQUEST['cp'];

$ejecutar="DELETE FROM COMPROMETIDOS WHERE cp ='$id'";

$resultado = mysqli_query($conexion,$ejecutar);

if (!$resultado){
    echo "Error";
}else{
    
    
    
    $ejecutar2="DELETE FROM CONCEPTO WHERE cp ='$id'";

    $resultado2 = mysqli_query($conexion,$ejecutar2);
    
    if(!resultado){
        
        echo "Error al eliminar";
        
    }else{ header ('Location: listadoproyectos.php');}
    
    
    
    
    
    
    
}

?>