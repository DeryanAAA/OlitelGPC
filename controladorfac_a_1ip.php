<?php

require("bd.php");

$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}




$nfactura = $_POST['nfactura'];
$vfactura = $_POST['vfactura'];
$ip = $_POST['ipfac'];
$id_fact = $_POST['id_fact'];
$valor_a_facturar = $_POST['valor_a_facturar'];
$por_facturar = $_POST['por_facturar'];


$queryx="SELECT * FROM INFORME_DE_PAGO WHERE ID_IP ='$ip'";
$resultadox= $conexion->query($queryx);
$rowx=$resultadox->fetch_assoc();

$valor_facturado =0;
$valor_facturado = $rowx['VALOR_FACTURADO'];

 $xfact = 0;
    
$xfact = $por_facturar - $valor_a_facturar;


echo $xfact;



$afact = 0;

$afact = $valor_facturado + $valor_a_facturar;

echo $afact;


$sql = "INSERT INTO PAGO_FACT (ID_FACT,ID_IP) VALUES ('".$id_fact."', '".$ip."')";



if (mysqli_multi_query($conexion, $sql)) {

    
   
    
$sql2 = "UPDATE FACTURA SET POR_FACTURAR = '$xfact' where ID_FACT = '$id_fact'";

$resultado2 = mysqli_query($conexion, $sql2);
    

    
    
$sql2 = "UPDATE INFORME_DE_PAGO SET VALOR_FACTURADO = '$afact' where ID_IP = '$ip'";
    

$resultado2 = mysqli_query($conexion, $sql2);

    
header ('Location: listadofacturascobranza.php');
}
else {
// echo "Error: " . $sql . "<br>
// " . mysqli_error($conexion);

echo "<script language='JavaScript'>
	alert('Error!! el IP ya se encuentra asociado a la factura. Seleccioné otro IP');
		history.back();	
	</script>";

}

mysqli_close($conexion);

?>








































