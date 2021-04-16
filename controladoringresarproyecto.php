<?php
$ott = $_POST['ott'];
$sitio = $_POST['sitio'];
$tipo = $_POST['tipopro'];
$nompro =$_POST['nom_pro'];
$desc =$_POST['desc_pro'];
$fechacreac =$_POST['fdc'];
$ciud =$_POST['ciudpro'];
$estado = $_POST['estado'];
$avance = $_POST['avan'];
$supentel = $_POST['supentel'];
$jde = $_POST['jde'];
$cc = $_POST['cc'];
$fei = $_POST['fei'];
$fri = $_POST['fri'];
$fet = $_POST['fet'];
$frt = $_POST['frt'];
$fda = $_POST['fda'];
$fdinf = $_POST['fdinf'];
$creadopor = $_POST['creadopor'];



require("bd.php");
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

mysqli_select_db($conexion, $base_datos) or die("No se encuentra la BD");
mysqli_set_charset($conexion, "utf8");


$consulta = "INSERT INTO CONCEPTO (ID_CC, ID_TIPO, ID_SUPENTEL, ID_JDE, ID_CIUDAD, NOMBRE, FECHA_CREACION, SITIO, ESTADO, AVANCE, DESCRIPCION, OTT, INI_ASIG, INI_REAL, TER_ASIG, TER_REAL, FEC_INF, FECHADEASIGNACION, creadopor) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$resultado = mysqli_prepare($conexion, $consulta);


if(!$resultado){
				echo "Error al Registrar.";
              
			}


$ok=mysqli_stmt_bind_param($resultado,"sssssssssssssssssss",$cc,$tipo,$supentel,$jde,$ciud,$nompro,$fechacreac,$sitio,$estado,$avance,$desc,$ott,$fei,$fri,$fet,$frt,$fdinf,$fda,$creadopor);
$ok=mysqli_stmt_execute($resultado);

/*------------------------------------------------------------------*/


   
 






if($ok == false){
            echo "error en ejecucion bd";
				
			}else{
            
           header('Location: listadoproyectos.php');
            
        }





mysqli_close($conexion);






















?>















