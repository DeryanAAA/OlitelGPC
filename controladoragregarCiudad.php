<?php
$ID_REGION= $_POST['ID_REGION'];
$NOM_CIUDAD = $_POST['NOM_CIUDAD'];

require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO ciudad (ID_REGION, NOM_CIUDAD) VALUES (".$ID_REGION.", '".$NOM_CIUDAD."')";

/*$sql .= "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '2','".$cor."')";*/


if (mysqli_multi_query($conexion, $sql)) {

 echo "<script language='JavaScript'>
		if(confirm('El registro se ha guardado exitosamente. Desea agregar otro?')){
			window.location.href='formagregarCiudad.php'; 
		}else{
			window.location.href='listadoCiudad.php'; 
		}

	</script>";

}
else {
echo "Error: " . $sql . "<br>
" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

