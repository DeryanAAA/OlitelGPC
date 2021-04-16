<?php 

$cp = $_POST['cp'];
$cargo = $_POST['cargo'];
$persona = $_POST['persona'];
require("bd.php");

echo $cp;
echo $cargo;
echo $persona;



$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '".$cargo."','".$persona."')";



if (mysqli_multi_query($conexion, $sql)) {
           header('Location: formeditproyectosadmin.php?cp='.$cp);


}
else {
echo "Error: " . $sql . "<br>
" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
