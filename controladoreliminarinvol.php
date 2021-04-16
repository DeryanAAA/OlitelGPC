<?php

 require("bd.php");
			
			$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
			
			//Validar conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}





$id= $_REQUEST['cc'];
$persona= $_REQUEST['persona'];
$cargo= $_REQUEST['cargo'];


echo $id;
echo $persona;
echo $cargo;

$ejecutar = "DELETE FROM `INVOLUCRADOS_EN_CC` WHERE INVOLUCRADOS_EN_CC.ID_CC ='$id' AND INVOLUCRADOS_EN_CC.ID_PERSONAS = '$persona' AND INVOLUCRADOS_EN_CC.ID_CARGO = '$cargo'";


$resultado = mysqli_query($conexion,$ejecutar);

if (!$resultado){
    echo "Error";
}else{
    
    
    
    header ('Location: formeditcc.php?cc='.$id);
    
    
    
    
    
    
    
}

?>