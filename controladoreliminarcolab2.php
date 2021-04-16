<?php

 require("bd.php");
			
			$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
			
			//Validar conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}





$id= $_REQUEST['cp'];
$persona= $_REQUEST['persona'];
$cargo= $_REQUEST['cargo'];


echo $id;
echo $persona;
echo $cargo;

$ejecutar = "DELETE FROM `comprometidos` WHERE comprometidos.cp ='$id' AND comprometidos.ID_PERSONAS = '$persona' AND comprometidos.ID_CARGO = '$cargo'";


$resultado = mysqli_query($conexion,$ejecutar);

if (!$resultado){
    echo "Error";
}else{
    
    
    
    header ('Location: formeditproyectos.php?cp='.$id);
    
    
    
    
    
    
    
}

?>