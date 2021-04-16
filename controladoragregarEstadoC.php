<?php
$NOM_EO_COB= $_POST['NOM_EO_COB'];


require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO estado_cobranza (NOM_EO_COB) VALUES ('".$NOM_EO_COB."')";

/*$sql .= "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '2','".$cor."')";*/


if (mysqli_multi_query($conexion, $sql)) {
       
echo "<script language='JavaScript'>
		if(confirm('El registro se ha guardado exitosamente. Desea agregar otro?')){
			window.location.href='formagregarEstadoC.php'; 
		}else{
			window.location.href='listadoEstadoC.php'; 
		}

	</script>";

}
else {
echo "Error: " . $sql . "<br>
" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

