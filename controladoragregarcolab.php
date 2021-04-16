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
           header('Location: formeditproyectos.php?cp='.$cp);


}
else {

	echo "<script language='JavaScript'>alert('ERROR al intentar agregar colaborador, por favor verifique si el colaborador que desea agregar ya se encuentra asignado al proyecto'); window.location.href='formeditproyectos.php?cp=$cp';</script>";
// echo "Error: " . $sql . "<br>
// " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
