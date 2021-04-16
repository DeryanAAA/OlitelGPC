<?php
$nombre = $_POST['nactividad'];
$descripcion = $_POST['dactividad'];
$tipo = $_POST['tactividad'];
$meta = $_POST['mactividad'];
$encargado = $_POST['eactividad'];
$inicio = $_POST['fiactividad'];
$termino = $_POST['ftactividad'];
$porcentaje = 0;
$avance = 0;
$idactividad = $_POST['idactividad'];
$cp = $_POST['cp'];
$idfase = $_POST['idfase'];
$proyecto = $_POST['proyecto'];
//echo "s0=".$proyecto;
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
		
        $consulta = "UPDATE ACTIVIDAD set NOM_ACTIVIDAD=?, DESC_ACTIVIDAD=?, ID_TIPO=?, ENCARGADO=?, FECHA_INICIO=?, FECHA_TERMINO=?, META_ACTIVIDAD=?   WHERE ID_ACTIVIDAD=?";
			$resultado = mysqli_prepare($conexion, $consulta);
		
			if(!$resultado){
				echo "Error al editar proy.";
              
			}
        $ok=mysqli_stmt_bind_param($resultado,"ssssssss",$nombre,$descripcion,$tipo,$encargado,$inicio,$termino,$meta,$idactividad);
			$ok=mysqli_stmt_execute($resultado);


/*------------------------------------------------------------------*/

/*------------------------------------------------------------------*/


   
    



if($ok == false){
            echo "error en ejecucion";
				
			}else{
            
           header('Location: visordeactividades.php?idfase='.$idfase.'&p='.$proyecto.'&cp='.$cp);
            
            
        }

        

		
		mysqli_close($conexion);
		
		
		?>











