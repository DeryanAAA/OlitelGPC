<?php

 require("bd.php");
			
			$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
			
			//Validar conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}





$id= $_REQUEST['cp'];

$ejecutar="UPDATE CONCEPTO SET ESTADO = 'nulo' WHERE cp ='$id'";

$resultado = mysqli_query($conexion,$ejecutar);

if (!$resultado){
    echo "Error";
}else{
    
    
    
    header ('Location: listadoproyectosadmin.php');
    
    
    
    
    
    
    
}

?>