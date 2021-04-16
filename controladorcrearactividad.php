<?php
$nombre = $_POST['nactividad'];
$descripcion = $_POST['dactividad'];
$tipo = $_POST['tactividad'];
$meta = $_POST['mactividad'];
$encargado = $_POST['eactividad'];
$inicio = $_POST['fiactividad'];
$termino = $_POST['ftactividad'];
$creacion = $_POST['fdc'];
$idpanel = $_POST['idpanel'];
$cp = $_POST['cp'];
$porcentaje = 0;
$avance = 0;
$idfase = $_POST['idfase'];
$proyecto = $_POST['proyecto'];
require("bd.php");
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

mysqli_select_db($conexion, $base_datos) or die("No se encuentra la BD");
mysqli_set_charset($conexion, "utf8");


$consulta = "INSERT INTO ACTIVIDAD (NOM_ACTIVIDAD, DESC_ACTIVIDAD, ID_PANEL,ID_TIPO, PORCENTAJE_ACTIVIDAD,FECHA_INICIO,FECHA_TERMINO,META_ACTIVIDAD,AVANCE_ACTIVIDAD,ENCARGADO,CREADO) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

$resultado = mysqli_prepare($conexion, $consulta);


if(!$resultado){
				echo "Error al Registrar.";
              
			}


$ok=mysqli_stmt_bind_param($resultado,"sssssssssss",$nombre,$descripcion,$idpanel,$tipo,$porcentaje,$inicio,$termino,$meta,$avance,$encargado,$creacion);
$ok=mysqli_stmt_execute($resultado);



if($ok == false){
            echo "error en ejecucion bd";
				
			}else{
            
           header('Location: visordeactividades.php?idfase='.$idfase.'&p='.$proyecto.'&cp='.$cp);
            
        }





mysqli_close($conexion);






















?>















