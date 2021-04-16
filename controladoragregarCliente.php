<?php
$RUT_CL= $_POST['RUT_CL'];
$NOM_CL = $_POST['NOM_CL'];

require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO CLIENTE (RUT_CL, NOM_CL) VALUES ('".$RUT_CL."', '".$NOM_CL."')";

/*$sql .= "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '2','".$cor."')";*/


if (mysqli_multi_query($conexion, $sql)) {

echo "<script language='JavaScript'>
		if(confirm('El registro se ha guardado exitosamente. Desea agregar otro?')){
			window.location.href='formagregarCliente.php'; 
		}else{
			window.location.href='listadoCliente.php'; 
		}

	</script>";

}
else {
echo "Error: " . $sql . "<br>
" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

