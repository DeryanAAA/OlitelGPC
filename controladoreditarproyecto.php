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
$fdinf = $_POST['fdinf'];
$cp = $_POST['cp'];

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
		
        $consulta = "UPDATE CONCEPTO set NOMBRE=?, DESCRIPCION=?, OTT=?, ID_TIPO=?, SITIO=?, ID_CIUDAD=?, AVANCE=?, ESTADO=?, ID_SUPENTEL=?, ID_JDE=?, ID_CC=?, INI_REAL=?, TER_REAL=?, FEC_INF=?  WHERE CP=?";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar proy.";
              
			}
        $ok=mysqli_stmt_bind_param($resultado,"sssssssssssssss",$nompro,$desc,$ott,$tipo,$sitio,$ciud,$avance,$estado,$supentel,$jde,$cc,$fri,$frt,$fdinf,$cp);
			$ok=mysqli_stmt_execute($resultado);


/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/


   
    



if($ok == false){
            echo "error en ejecucion";
				
			}else{
            
          header('Location: listadoproyectos.php ');
            
            
        }

        

		
		mysqli_close($conexion);
		
		
		?>