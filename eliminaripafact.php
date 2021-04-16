<?php

 require("bd.php");
			
			$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
			
			//Validar conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}





$id_fact= $_REQUEST['fact'];
$id_ip= $_REQUEST['ip'];




$ejecutar = "DELETE FROM `pago_fact` WHERE pago_fact.id_ip ='$id_ip' AND pago_fact.id_fact = '$id_fact'";


$resultado = mysqli_query($conexion,$ejecutar);

if (!$resultado){
    echo "Error";
}else{
    
    
    
    
    
    
    header ('Location: devolvervalorafac.php?id_fact='.$id_fact.'&ip_fact='.$id_ip);
    
    
    
    
    
    
    
}

?>