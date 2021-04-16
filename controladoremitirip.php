<?php
$cp = $_POST['cp'];
$fechaenvioip = $_POST['fdc'];
$TIPOIP = $_POST['TIPOIP'];
$VALORIP = $_POST['valorip'];
$idip = $_POST['nip'];
$ncoti =$_POST['ncoti'];
$OBSERVACIONES=$_POST['observaciones'];



require("bd.php");
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if(mysqli_connect_errno()){
    echo "error al conectar";
    exit();    
}

mysqli_select_db($conexion, $base_datos) or die("No se encuentra la BD");
mysqli_set_charset($conexion, "utf8");


//$consulta = "INSERT INTO informe_de_pago (nip,ID_TIPO,VALOR_IP,FECHAENVIOIP,CP,NRO_COTI,OBSERVACIONES) VALUES (?,?,?,?,?,?,?)";
$consulta = "INSERT INTO informe_de_pago (nip,ID_TIPO,VALOR_IP,FECHAENVIOIP,CP,NRO_COTI,OBSERVACIONES) VALUES ('".$idip."',".$TIPOIP.",".$VALORIP.",'".$fechaenvioip."',".$cp.",'".$ncoti."','".$OBSERVACIONES."')";
/*
$resultado = mysqli_prepare($conexion, $consulta);


if(!$resultado){
				echo "Error al Registrar.";
              
			}


$ok=mysqli_stmt_bind_param($resultado,"ssssss",$idip,$TIPOIP,$VALORIP,$fechaenvioip,$cp,$ncoti,$OBSERVACIONES);
$ok=mysqli_stmt_execute($resultado);*/

$resultado = mysqli_query($conexion, $consulta);		

		if(!$resultado){  		

			echo 'MySQL Error: ' . mysqli_error($conexion).' favor reportar al administrador del sistema<br>'.$consulta;  
			//echo 'MySQL Error: favor reportar al administrador del sistema<br>';  

			exit;  

		}  else {
			 header('Location: listadoip.php');
		}

/*------------------------------------------------------------------*/


   
 






/*


if($ok == false){
            echo "error en ejecucion bd";
				
			}else{
            
          
            
        }


*/


mysqli_close($conexion);






















?>















