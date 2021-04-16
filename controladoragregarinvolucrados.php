<?php 

$cc = $_POST['cc'];
$cargo = $_POST['cargo'];
$persona = $_POST['persona'];
require("bd.php");

echo $cc;
echo $cargo;
echo $persona;



$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO INVOLUCRADOS_EN_CC (ID_CC,ID_CARGO,ID_PERSONAS) VALUES ('".$cc."', '".$cargo."','".$persona."')";



if (mysqli_multi_query($conexion, $sql)) {
           header('Location: formeditcc.php?cc='.$cc);


}
else {
echo "Error: " . $sql . "<br>
" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
