<?php
$nfactura= $_POST['nfactura'];
$cfactura = $_POST['cfactura'];
$vfactura = $_POST['vfactura'];

require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO FACTURA (NFACT, ID_CL, VALOR) VALUES ('".$nfactura."', ".$cfactura.",'".$vfactura."')";

/*$sql .= "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '2','".$cor."')";*/


if (mysqli_multi_query($conexion, $sql)) {
           header('Location: facturarvarios2.php?nfactura='.$nfactura.'&vfactura='.$vfactura);


}
else {
echo "Error: " . $sql . "<br>
" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

