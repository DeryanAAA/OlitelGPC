<?php
$nom_usuario = $_POST['nom_usuario'];
$rut_usuario = $_POST['rut_usuario'];
$rol_usuario = $_POST['rol_usuario'];
$clave_usuario = $_POST['clave_usuario'];



require("bd.php");
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

mysqli_select_db($conexion, $base_datos) or die("No se encuentra la BD");
mysqli_set_charset($conexion, "utf8");


$consulta = "INSERT INTO PERSONAS (NOM_PERSONAS,RUT, ID_ROL, CLAVE) VALUES (?,?,?,?)";

$resultado = mysqli_prepare($conexion, $consulta);


if(!$resultado){
				echo "Error al Registrar.";
              
			}


$ok=mysqli_stmt_bind_param($resultado,"ssss",$nom_usuario,$rut_usuario,$rol_usuario,$clave_usuario);
$ok=mysqli_stmt_execute($resultado);

/*------------------------------------------------------------------*/


   
    $query = "SELECT * FROM PERSONAS ORDER BY ID_PERSONAS DESC LIMIT 1";
    
    $result = $conexion->query($query);

    
    
                while ( $row = $result->fetch_array() )    
                {
   
    
                         
                        
                       $PER = $row['ID_PERSONAS'];
        
            
                }  
 









if($ok == false){
            echo "error en ejecucion bd";
				
			}else{
            
           header('Location: controladoringresarusuario2.php?id_personas='.$PER);
            
        }





mysqli_close($conexion);






















?>















