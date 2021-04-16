<?php

include ("bd.php");

//pasamos id del país
if(!empty($_POST["id_pais"])) 
{
   $sql ="SELECT ID_CIUDAD, NOM_CIUDAD FROM ciudad WHERE ID_REGION= '" . $_POST["id_pais"] . "'";
   
   //	$consulta_ciudades = $link->query($sql);
  	$consulta_ciudades = mysqli_query($conexion,$sql);
   //construimos lista nueva dependiente
   ?>
     <option value=""> Seleccione </option>
   <?php
   
   while($ciudad= $consulta_ciudades->fetch_object())
   {
	   ?>
		  <option value="<?php echo $ciudad->ID_CIUDAD; ?>"><?php echo $ciudad->NOM_CIUDAD; ?></option>
	   <?php
   }
}
?>