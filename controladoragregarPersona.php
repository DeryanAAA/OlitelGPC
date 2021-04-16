		<?php
			
$RUT = $_POST['RUT'];
$NOM_PERSONAS = $_POST['NOM_PERSONAS'];
$ID_ROL  = $_POST['ID_ROL'];
$CLAVE =$_POST['CLAVE'];
$activo ="si";

/*

echo $nom_cc;
echo $agrupacion;
echo $estado;
echo $detalle;
echo $linea;

*/



require("bd.php");
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

mysqli_select_db($conexion, $base_datos) or die("No se encuentra la BD");
mysqli_set_charset($conexion, "utf8");


$consulta = "INSERT INTO personas (RUT,ID_LINEA,NOM_PERSONAS,ID_ROL,CLAVE,ACTIVO) VALUES (?,?,?,?,?,?)";

$resultado = mysqli_prepare($conexion, $consulta);


if(!$resultado){
				echo "Error al Registrar.";
              
			}


$ok=mysqli_stmt_bind_param($resultado,"sssss",$RUT,$NOM_PERSONAS,$ID_ROL,$CLAVE,$activo);
$ok=mysqli_stmt_execute($resultado);




   
 






if($ok == false){
            echo "error en ejecucion bd";
				
			}else{
            
           header('Location: listadoPersona.php');
            
        }





mysqli_close($conexion);






















?>















