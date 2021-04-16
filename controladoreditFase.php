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
	$ID_FASE = $_POST['idfase'];
	$nomfase = $_POST['nomfase'];
	$cp = $_POST['cp'];
	$p = $_POST['proyecto'];
	$query="SELECT * FROM fase WHERE ID_FASE  ='$ID_FASE'";
	$valor_ant= $conexion->query($query);
	$row=$valor_ant->fetch_assoc();
	$consulta = "UPDATE fase set ID_FASE ='$ID_FASE ', NOM_FASE='$nomfase' WHERE ID_FASE ='$ID_FASE '";
	$resultado = mysqli_prepare($conexion, $consulta);
	if(!$resultado){
		echo "Error al editar Fase";
	}
	$resultado = mysqli_query($conexion, $consulta);

/*------------------------------------------------------------------*/
 if(!$resultado){       
	echo 'MySQL Error: ' . mysqli_error($conexion).' favor reportar al administrador del sistema<br>'.$consulta;  
	exit;  
}  else {
	 header('Location: listadofases.php?cp='.$cp.'&p='.$p);
}
mysqli_close($conexion);
?>