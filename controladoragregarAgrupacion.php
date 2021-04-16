<?php
$NOM_AGRUP= $_POST['NOM_AGRUP'];


require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO agrupacion (NOM_AGRUP) VALUES ('".$NOM_AGRUP."')";

/*$sql .= "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '2','".$cor."')";*/


if (mysqli_multi_query($conexion, $sql)) {
	echo "<script language='JavaScript'>
		if(confirm('El registro se ha guardado exitosamente. Desea agregar otro?')){
			window.location.href='formagregarAgrupacion.php'; 
		}else{
			window.location.href='listadoAgrupacion.php'; 
		}

	</script>";
           //header('Location: formagregarAgrupacion.php');


}
else {
	
// echo "Error: " . $sql . "<br>
// " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

