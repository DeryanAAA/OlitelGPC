<?php
$idfactura= $_POST['id_fact'];
$ocfactura = $_POST['ocfactura'];
echo $ocfactura
require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO oc (ID_FACT, ID_OC) VALUES ('".$idfactura."', ".$ocfactura.")";

/*$sql .= "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '2','".$cor."')";*/


if (mysqli_multi_query($conexion, $sql)) {
           header('Location: listadofacturascobranza.php');


}
else {
echo "Error: " . $sql . "<br>
" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

