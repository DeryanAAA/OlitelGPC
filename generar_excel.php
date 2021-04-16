<?php 

header('Content-type: aplication/vnd.ms-excel;charset=iso-8859-15');

header('Content-Disposition: attachment; filename=proyectos.xls');

header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");

header("Content-Type: text/html;charset=utf-8");




        
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
		
			$consulta = "SELECT * FROM concepto";
			$resultado = mysqli_query($conexion, $consulta);
mysqli_query("SET NAMES 'utf8'");

      

      
      
?>

<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</head>

  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> cp </th>
                          <th> centro de costo</th>
                          <th> Tipo </th>
                          
                          <th> Porcentaje de avance</th>
                            <th> Ott </th>
                            
                            <th>Estado de proyecto</th>
                            
                            <th>Nombre de proyecto</th>
                            <th>Descripción de proyecto</th>
                            <th>Supervisor Externo</th>
                            
                            <th>Jefe Externo</th>
                            <th>Sup tec</th>
                            <th>Coordinador Olitel</th>
                            <th>Fecha asignación</th>
                            <th>Fecha de inicio Planificada</th>
                            <th>Fecha de inicio real</th>
                            <th>Fecha  entrega  informe</th>
                            
                            <th>Fecha término real</th>
                            <th>Fecha término planificada</th>
                            <th>Región</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                       
                        <?php  while($fila = mysqli_fetch_array($resultado)){ 
       
                        echo "<tr><td>"; 
                          
            
                
                        
                        $query2="SELECT * FROM centro_de_costo where id_cc = ".$fila['ID_CC'];
                        $resultado2= $conexion->query($query2);
                        $row=$resultado2->fetch_assoc();
    
                        echo $fila['CP']."</td><td>";
                        echo $row['NOM_CC']."</td><td>";
                        
                         $query3="SELECT * FROM TIPO where ID_TIPO = ".$fila['ID_TIPO'];
                        $resultado3= $conexion->query($query3);
                        $row3=$resultado3->fetch_assoc();
                        
                        echo $row3['NOM_TIPO']."</td><td>";
                        
                        echo $fila['AVANCE']."% <meter max=100 id='barra' value=".$fila['AVANCE']." low='30' high='60' optimun='100'></meter></td><td>";
    
                        echo $fila['OTT']."</td><td>";
    
                        echo $fila['ESTADO']."</td><td>";
    
                         echo $fila['NOMBRE']."</td><td>";
                          
                        echo $fila['DESCRIPCION']."</td><td>";

                        
                         $query4="SELECT * FROM SUPENTEL where ID_SUPENTEL = ".$fila['ID_SUPENTEL'];
                        $resultado4= $conexion->query($query4);
                        $row4=$resultado4->fetch_assoc();
    
                         echo $row4['NOM_SUPENTEL']."</td><td>";
                        
                          $query5="SELECT * FROM JEFE_ENTEL where ID_JDE = ".$fila['ID_JDE'];
                        $resultado5= $conexion->query($query5);
                        $row5=$resultado5->fetch_assoc();
                        
                        echo $row5['NOM_JDE']."</td><td>";
    
                       
    
                            $query8="SELECT * FROM personas, comprometidos WHERE personas.ID_PERSONAS = comprometidos.ID_PERSONAS AND comprometidos.id_cargo = 1 AND COMPROMETIDOS.CP = ".$fila['CP'];
                        $resultado8= $conexion->query($query8);
                        
                        while($row8=$resultado8->fetch_assoc()){
                            
                        echo $row8['NOM_PERSONAS'].", ";

                            
                        }
                        echo "</td><td>";

    
      $query6="SELECT * FROM personas, comprometidos WHERE personas.ID_PERSONAS = comprometidos.ID_PERSONAS AND comprometidos.id_cargo = 2 AND COMPROMETIDOS.CP = ".$fila['CP'];
                        $resultado6= $conexion->query($query6);
                        $row6=$resultado6->fetch_assoc();
    
                        echo $row6['NOM_PERSONAS']."</td><td>";
    
                        
    
                            echo $fila['FECHADEASIGNACION']."</td><td>";
    
    
                            echo $fila['INI_ASIG']."</td><td>";
    
    
                            echo $fila['INI_REAL']."</td><td>";
                            echo $fila['FEC_INF']."</td><td>";
                            echo $fila['TER_REAL']."</td><td>";
                            echo $fila['TER_ASIG']."</td><td>";
                            
                             $query9="SELECT * FROM REGION, ciudad, CONCEPTO  WHERE CONCEPTO.ID_CIUDAD = ciudad.ID_CIUDAD AND REGION.ID_REGION = CIUDAD.ID_REGION AND CONCEPTO.CP = ".$fila['CP'];
                        $resultado9= $conexion->query($query9);
                        $row9=$resultado9->fetch_assoc();
    
    
                            echo $row9['NOM_REGION']."</td><td>";

                        echo "</tr>";    
                            
                        }
                          ?>
                          
                          
                          </tbody>
                      </table>