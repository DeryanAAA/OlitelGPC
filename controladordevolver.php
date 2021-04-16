		<?php
			
$id_fact = $_POST['id_fact'];
$id_ip = $_POST['id_ip'];

$valor = $_POST['valor'];
		
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


$query="SELECT * FROM FACTURA WHERE ID_FACT ='$id_fact'";
        $valor_ant= $conexion->query($query);
        $row=$valor_ant->fetch_assoc();

 $sum = $row['POR_FACTURAR'] + $valor;



$query2="SELECT * FROM informe_de_pago WHERE id_ip ='$id_ip'";
        $valor_antip= $conexion->query($query2);
        $row2=$valor_antip->fetch_assoc();

 $res = $row2['VALOR_FACTURADO'] - $valor;


		
        $consulta = "UPDATE factura set POR_FACTURAR=? WHERE ID_FACT=?";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar proy.";
              
			}
        $ok=mysqli_stmt_bind_param($resultado,"ss",$sum,$id_fact);
			$ok=mysqli_stmt_execute($resultado);


/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/





if($ok == false){
            echo "error en ejecucion 1";
				
			}else{
				
				
				
        $consulta2 = "UPDATE informe_de_pago set VALOR_FACTURADO=? WHERE ID_IP=?";
			$resultado2 = mysqli_prepare($conexion, $consulta2);
		
			if(!$resultado2){
				echo "Error al editar proy.";
              
			}
        $ok2=mysqli_stmt_bind_param($resultado2,"ss",$res,$id_ip);
			$ok2=mysqli_stmt_execute($resultado2);

				
			

if($ok2 == false){
            echo "error en ejecucion 2";
				
			}else{
							
				
            
    header ('Location: formeditfact.php?ID_FACT='.$id_fact);
            
            
			}
			
			
        }

        

		
		mysqli_close($conexion);
		
		
		?>