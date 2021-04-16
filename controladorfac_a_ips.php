<?php
$nfactura = $_POST['nfactura'];
$vfactura = $_POST['vfactura'];
$ip = $_POST['ipfac'];
$id_fact = $_POST['id_fact'];
$valor_a_facturar = $_POST['valor_a_facturar'];
$por_facturar = $_POST['por_facturar'];



 $xfact = 0;
    
    $xfact = $por_facturar - $valor_a_facturar;





require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "INSERT INTO PAGO_FACT (ID_FACT,ID_IP) VALUES ('".$id_fact."', '".$ip."')";



if (mysqli_multi_query($conexion, $sql)) {

    
   
    
$sql2 = "UPDATE FACTURA SET POR_FACTURAR = '$xfact' where ID_FACT = '$id_fact'";

$resultado2 = mysqli_query($conexion, $sql2);
    

    
    
$sql2 = "UPDATE INFORME_DE_PAGO SET VALOR_FACTURADO = '$valor_a_facturar' where ID_IP = '$ip'";

$resultado2 = mysqli_query($conexion, $sql2);
    
header ('Location: form_fac_a_ips.php?nfactura='.$nfactura.'&vfactura='.$vfactura.'&idfactura='.$id_fact);
}
else {
echo "<script language='JavaScript'>
	alert('Error!! el IP ya se encuentra asociado a la factura. Seleccioné otro IP');
		history.back();	
	</script>";
}

mysqli_close($conexion);

?>


















