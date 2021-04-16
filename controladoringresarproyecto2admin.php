<?php 

$cp = $_GET['idproy'];
$sup = $_GET['idst'];
$cor = $_GET['idcoord'];
$sup2 = $_GET['idst2'];
require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS,NI) VALUES ('".$cp."', '1','".$sup."','10'),('".$cp."', '2','".$cor."','00'),('".$cp."', '1','".$sup2."','20')";

/*$sql .= "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '2','".$cor."')";*/


if (mysqli_multi_query($conexion, $sql)) {
           header('Location: listadoproyectosadmin.php ');


}
else {
echo "Error: " . $sql . "<br>
" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

