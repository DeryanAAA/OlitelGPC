		<?php
			
$nom_cc = $_POST['NOM_CC'];
$agrupacion = $_POST['ID_AGRUP'];
$estado = $_POST['estadocc'];
$detalle =$_POST['ID_DETALLE'];
$linea =$_POST['ID_LINEA'];

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


$consulta = "INSERT INTO CENTRO_DE_COSTO (NOM_CC,ID_LINEA,ID_AGRUP,ID_DETALLE,ESTADO) VALUES (?,?,?,?,?)";

$resultado = mysqli_prepare($conexion, $consulta);


if(!$resultado){
				echo "Error al Registrar.";
              
			}


$ok=mysqli_stmt_bind_param($resultado,"sssss",$nom_cc,$linea,$agrupacion,$detalle,$estado);
$ok=mysqli_stmt_execute($resultado);




   
 






if($ok == false){
            echo "error en ejecucion bd";
				
			}else{
            
       
		 echo "<script language='JavaScript'>
		if(confirm('El registro se ha guardado exitosamente. Desea agregar otro?')){
			window.location.href='formagregarcc.php'; 
		}else{
			window.location.href='listadocc.php'; 
		}

	</script>";
            
        }





mysqli_close($conexion);






















?>















