f<?php
$cp= $_POST['cp'];
$nom_fase = $_POST['nomfase'];
$proyecto = $_POST['proyecto'];
require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO FASE (CP, NOM_FASE) VALUES ('".$cp."', '".$nom_fase."')";

/*$sql .= "INSERT INTO COMPROMETIDOS (CP,ID_CARGO,ID_PERSONAS) VALUES ('".$cp."', '2','".$cor."')";*/


if (mysqli_multi_query($conexion, $sql)) {
           header('Location: listadofases.php?cp='.$cp.'&p='.$proyecto);


}
else {
echo "Error: " . $sql . "<br>
" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

