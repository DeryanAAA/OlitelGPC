<?php 
if(isset($_POST['id'])){
	$id=$_POST['id'];
	echo "<script language='JavaScript'>alert('entro'); </script>";exit();
	require("bd.php");
	$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
	//Validar conexión.
	if(mysqli_connect_errno()){
		echo "Error al conectar.";
		exit();
	}

	$ejecutar="SELECT cdp.ID_PERSONAS, p.NOM_PERSONAS, c.NOM_CARGO FROM cargo_de_persona as cdp inner join cargo c on c.ID_CARGO=cdp.ID_CARGO inner join personas as p on p.ID_PERSONAS= cdp.ID_PERSONAS where cdp.`ID_CARGO`=".$_POST['id']." and p.ACTIVO='si'  ";
	$resultadocolab = mysqli_query($conexion,$ejecutar);

	if (!$resultadocolab){
		echo "Error";
	}else{
		$html="";
		while ($row = $result->fetch_array() ){?
			$html.="<option value='<?php echo $row['ID_PERSONAS'] ?>'><?php echo $row['NOM_PERSONAS']; ?></option>";
		} 
    }
	
	
	// require "conexion.php";
	// $user=new ApptivaDB();
	// $u=$user->buscar("provincias","departamentos_id=".$_POST['id']);
	// $html="";
	// foreach ($u as $value)
		// $html.="<option value='".$value['id']."'>".$value['nombre']."</option>";
	echo $html;	
//endif;
}
?>