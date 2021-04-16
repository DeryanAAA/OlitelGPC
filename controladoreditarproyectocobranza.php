        <?php
$tipo = $_POST['tipopro'];
$nompro =$_POST['nom_pro'];
$desc =$_POST['desc_pro'];
$estado = $_POST['estado'];
$avance = $_POST['avan'];
$cc = $_POST['cc'];
$cp = $_POST['cp'];
$valpro = $_POST['valpro'];
$eo_cob = $_POST['eo_cob'];
        require("bd.php");
            $conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
            //Validar conexión.
            if(mysqli_connect_errno()){
                echo "Error al conectar.";
                exit();
            }
            //Validar que exista la base de datos
            mysqli_select_db($conexion, $base_datos) or die("No se encuentra la base de datos.");
            mysqli_set_charset($conexion, "utf8");
        $consulta = "UPDATE CONCEPTO set NOMBRE=?, DESCRIPCION=?, ID_TIPO=?, AVANCE=?, ESTADO=?, ID_CC=?, VALORPROYECTO=?, ID_EO_COB=?  WHERE CP=?";
            $resultado = mysqli_prepare($conexion, $consulta);
            if(!$resultado){
                echo "Error al editar proy.";
            }
        $ok=mysqli_stmt_bind_param($resultado,"sssssssss",$nompro,$desc,$tipo,$avance,$estado,$cc,$valpro,$eo_cob,$cp);
            $ok=mysqli_stmt_execute($resultado);
/*------------------------------------------------------------------*/
/*------------------------------------------------------------------*/
if($ok == false){
	echo "error en ejecucion";
}else{
	if($tipo==1){
		header('Location: listadoproyectoscobranza.php');
	}
	else{
		header('Location: listadoservicios.php');
	}
}
mysqli_close($conexion);
?>