<?php
$idfactura= $_POST['id_fact'];
$ocfactura = $_POST['ocfactura'];

require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

if(strpos($ocfactura, ',')) {
	$listaOC=explode(",",$ocfactura);
	$longitud=count($listaOC);
	for($i=0;$i<$longitud;$i++) {
		//echo "valor $i = ". $listaOC[$i]."<br>";
		$sql = "INSERT INTO oc (ID_FACT, NOC) VALUES ('".$idfactura."', '".$listaOC[$i]."')";
		$ok=mysqli_multi_query($conexion, $sql);
	}	
	if ($ok) {
        header('Location: listadofacturascobranza.php');
	}
	else {
		echo "Error: " . $sql . "<br>
		" . mysqli_error($conexion);
	}

}
else{
	$sql = "INSERT INTO oc (ID_FACT, NOC) VALUES ('".$idfactura."', '".$ocfactura."')";
	if (mysqli_multi_query($conexion, $sql)) {
	   header('Location: listadofacturascobranza.php');
	}
	else {
		echo "Error: " . $sql . "<br>
		" . mysqli_error($conexion);
	}
}





mysqli_close($conexion);

?>

