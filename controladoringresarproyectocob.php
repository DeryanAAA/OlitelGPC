<?php
// $ott = $_POST['ott'];
// $sitio = $_POST['sitio'];
// $tipo = $_POST['tipopro'];
// $nompro =$_POST['nom_pro'];
// $desc =$_POST['desc_pro'];
// $fechacreac =$_POST['fdc'];
// $ciud =$_POST['ciudpro'];
// $region =$_POST['regionpro'];
// $estado = $_POST['estado'];
// $avance = $_POST['avan'];
// $supentel = $_POST['supentel'];
// $jde = $_POST['jde'];
// $cc = $_POST['cc'];
// $fei = $_POST['fei'];
// $fri = $_POST['fri'];
// $fet = $_POST['fet'];
// $frt = $_POST['frt'];
// $fda = $_POST['fda'];
// $fdinf = $_POST['fdinf'];
// $creadopor = $_POST['creadopor'];
// $ID_PERSONAS= $_POST['ID_PERSONAS'];


(isset($_POST['ott'])) ? $ott=$_POST['ott'] : $ott='';
$ott = utf8_decode($ott);
(isset($_POST['sitio'])) ? $sitio=$_POST['sitio'] : $sitio='';
$sitio = utf8_decode($sitio);
(isset($_POST['tipopro'])) ? $tipo=$_POST['tipopro'] : $tipo='';
$tipo = utf8_decode($tipo);
(isset($_POST['nom_pro'])) ? $nompro=$_POST['nom_pro'] : $nompro='';
$nompro = utf8_decode($nompro);
(isset($_POST['desc_pro'])) ? $desc=$_POST['desc_pro'] : $desc='';
$desc = utf8_decode($desc);
(isset($_POST['fdc'])) ? $fechacreac=$_POST['fdc'] : $fechacreac='';
$fechacreac = utf8_decode($fechacreac);
(isset($_POST['ciudpro'])) ? $ciud=$_POST['ciudpro'] : $ciud='';
$ciud = utf8_decode($ciud);
(isset($_POST['regionpro'])) ? $region=$_POST['regionpro'] : $region='';
$region = utf8_decode($region);
(isset($_POST['estado'])) ? $estado=$_POST['estado'] : $estado='';
$estado = utf8_decode($estado);
(isset($_POST['avan'])) ? $avance=$_POST['avan'] : $avance='';
$avance = utf8_decode($avance);
(isset($_POST['supentel'])) ? $supentel=$_POST['supentel'] : $supentel='';
$supentel = utf8_decode($supentel);
(isset($_POST['jde'])) ? $jde=$_POST['jde'] : $jde='';
$jde = utf8_decode($jde);
(isset($_POST['cc'])) ? $cc=$_POST['cc'] : $cc='';
$cc = utf8_decode($cc);
(isset($_POST['fei'])) ? $fei=$_POST['fei'] : $fei='';
$fei = utf8_decode($fei);
(isset($_POST['fri'])) ? $fri=$_POST['fri'] : $fri='';
$fri = utf8_decode($fri);
(isset($_POST['fet'])) ? $fet=$_POST['fet'] : $fet='';
$fet = utf8_decode($fet);
(isset($_POST['frt'])) ? $frt=$_POST['frt'] : $frt='';
$frt = utf8_decode($frt);
(isset($_POST['fda'])) ? $fda=$_POST['fda'] : $fda='';
$fda = utf8_decode($fda);
(isset($_POST['fdinf'])) ? $fdinf=$_POST['fdinf'] : $fdinf='';
$fdinf = utf8_decode($fdinf);
(isset($_POST['creadopor'])) ? $creadopor=$_POST['creadopor'] : $creadopor='';
$creadopor = utf8_decode($creadopor);
(isset($_POST['ID_PERSONAS'])) ? $ID_PERSONAS=$_POST['ID_PERSONAS'] : $ID_PERSONAS='';
$ID_PERSONAS = utf8_decode($ID_PERSONAS);

echo "tipo=". $tipo;

require("bd.php");
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

mysqli_select_db($conexion, $base_datos) or die("No se encuentra la BD");
mysqli_set_charset($conexion, "utf8");


$consulta = "INSERT INTO CONCEPTO (ID_CC, ID_TIPO, ID_SUPENTEL, ID_JDE, ID_CIUDAD, NOMBRE, FECHA_CREACION, SITIO, ESTADO, AVANCE, DESCRIPCION, OTT, INI_ASIG, INI_REAL, TER_ASIG, TER_REAL, FEC_INF, FECHADEASIGNACION, creadopor, ID_REGION,ID_PERSONAS) VALUES (".$cc.",".$tipo.",".$supentel.",".$jde.",".$ciud.",'".$nompro."','".$fechacreac."','".$sitio."','".$estado."',".$avance.",'".$desc."','".$ott."','".$fei."','".$fri."','".$fet."','".$frt."','".$fdinf."','".$fda."','".$creadopor."',".$region.",".$ID_PERSONAS.")";
/*
$resultado = mysqli_prepare($conexion, $consulta);


if(!$resultado){
				echo "Error al Registrar.";
              
			}


$ok=mysqli_stmt_bind_param($resultado,"sssssssssssssssssss",$cc,$tipo,$supentel,$jde,$ciud,$nompro,$fechacreac,$sitio,$estado,$avance,$desc,$ott,$fei,$fri,$fet,$frt,$fdinf,$fda,$creadopor);
$ok=mysqli_stmt_execute($resultado);
*/
/*------------------------------------------------------------------*/


 


/*


if($ok == false){
            echo "error en ejecucion bd";
				
			}else{
            
           header('Location: listadoproyectoscobranza.php');
            
        }




*/
if (mysqli_multi_query($conexion, $consulta)) {
	if ($tipo==1){
        header('Location: listadoproyectoscobranza.php');
	}else{
		header('Location: listadoservicios.php');
	}

}
else {
/*echo "Error: " . $consulta . "<br>
" . mysqli_error($conexion);*/
echo "<script language='JavaScript'>
		alert('Error al intentar guardar el registro'/n". $consulta ."/n".mysqli_error($conexion).");

			window.location.href='formagrproyectocobranza.php'; 
	</script>";
}



mysqli_close($conexion);






















?>















