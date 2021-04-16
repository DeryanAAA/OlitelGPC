<?php

include ("bd.php");

//pasamos id del país
if(!empty($_POST["id_cargo"])) 
{
   $sql ="SELECT cdp.ID_PERSONAS, p.NOM_PERSONAS FROM cargo_de_persona as cdp inner join personas as p on p.ID_PERSONAS= cdp.ID_PERSONAS where cdp.ID_CARGO=" . $_POST["id_cargo"] . " and p.ACTIVO='si' ";

   	$consulta_persona = mysqli_query($conexion,$sql);
 
   //construimos lista nueva dependiente
   ?>
     <option value=""> Seleccione </option>
   <?php
   
   while($persona= $consulta_persona->fetch_object())
   {
	   ?>
		  <option value="<?php echo $persona->ID_PERSONAS; ?>"><?php echo $persona->NOM_PERSONAS; ?></option>
	   <?php
   }
}
?>