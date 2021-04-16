<?php
$nfactura= $_POST['nfactura'];
$cfactura = $_POST['cfactura'];
$vfactura = $_POST['vfactura'];
$ffactura = $_POST['ffactura'];

require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO FACTURA (NFACT, ID_CL, VALOR,POR_FACTURAR,F_FACTURA) VALUES ('".$nfactura."', ".$cfactura.",'".$vfactura."','".$vfactura."','".$ffactura."')";

/*$sql .= "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '2','".$cor."')";*/


if (mysqli_multi_query($conexion, $sql)) {
           header('Location: listadofacturascobranza.php');


}
else {
echo "<script language='JavaScript'>
	alert('Error al intentar guardar el registro');
		history.back();	
	</script>";
}

mysqli_close($conexion);

?>

