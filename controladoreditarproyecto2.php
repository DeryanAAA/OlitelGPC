<?php 

$cp = $_GET['idproy'];
$sup = $_GET['idst'];
$cor = $_GET['idcoord'];
$sup2 = $_GET['idst2'];



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
		
        $consultax = "UPDATE COMPROMETIDOS set ID_PERSONAS = ?  WHERE CP= ? and ID_CARGO = '2'";
			$resultadox = mysqli_prepare($conexion, $consultax);
		
			if(!$resultadox){
				echo "Error al editar proy.";
              
			}
        $ok=mysqli_stmt_bind_param($resultadox,"ss",$cor,$cp);
			$ok=mysqli_stmt_execute($resultadox);





 $consulta2 = "UPDATE COMPROMETIDOS SET ID_PERSONAS = ? where cp = ? and NI = '10'";
			$resultado2 = mysqli_prepare($conexion, $consulta2);
		
			if(!$resultado2){
				echo "Error al editar proy.";
              
			}
        $ok2=mysqli_stmt_bind_param($resultado2,"ss",$sup,$cp);
			$ok2=mysqli_stmt_execute($resultado2);




$consulta3 = "UPDATE COMPROMETIDOS SET ID_PERSONAS = ? where cp = ? and NI = '20'";
			$resultado3 = mysqli_prepare($conexion, $consulta3);
		
			if(!$resultado3){
				echo "Error al editar proy.";
              
			}
        $ok3=mysqli_stmt_bind_param($resultado3,"ss",$sup2,$cp);
			$ok3=mysqli_stmt_execute($resultado3);













if($ok3 == false || $ok2 == false || $ok == false){
            echo "error en ejecucion";
				
			}else{
            
          header('Location: listadoproyectos.php');
            
            
        }





/*




require("bd.php");


$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);


if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

$sql = "UPDATE COMPROMETIDOS SET ID_PERSONAS = '$cor' where cp = '$cp' and id_cargo = '2' and NI = '00'";

$resultado = mysqli_query($conexion, $sql);





$sql2 = "UPDATE COMPROMETIDOS SET ID_PERSONAS = '$sup' where cp = '$cp' and id_cargo = '1' and NI = '10'";

$resultado2 = mysqli_query($conexion, $sql2);



$sql3 = "UPDATE COMPROMETIDOS SET ID_PERSONAS = '$sup' where cp = '$cp' and id_cargo = '1' and NI = '20'";

$resultado3 = mysqli_query($conexion, $sql3);


mysqli_close($conexion);


header('Location: listadoproyectos.php');
*/



?>

