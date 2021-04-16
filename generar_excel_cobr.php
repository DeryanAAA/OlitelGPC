<?php 

header('Content-type: aplication/vnd.ms-excel;charset=iso-8859-15');

header('Content-Disposition: attachment; filename=cobranza.xls');


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
		
			$consulta = "SELECT * FROM INFORME_DE_PAGO, pago_fact,factura where factura.id_fact = pago_fact.id_fact and informe_de_pago.id_ip  = pago_fact.id_ip order by informe_de_pago.id_ip";
			$resultado = mysqli_query($conexion, $consulta);
			mysqli_query("SET NAMES 'utf8'");
      
      
      
?>




<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</head>
  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> N INFORME DE PAGO </th>
                          <th> N COTIZACION</th>
                          <th> CP </th>
                          
                          <th> NOMBRE PROYECTO</th>
                            <th> CC </th>
                            
                            <th>TIPO PROYECTO</th>
                            
                            <th>ESTADO COBRANZA</th>
                            <th>VALOR ENVIADO</th>
                            <th>FECHA ENVIO IP</th>
                            
                            <th>MES DE SERVICIO</th>
                            <th>OBSERVACIONES</th>
                            <th>DESCRIPCION DEL PROYECTO</th>
                            <th>VALOR PROYECTADO</th>
                            <th>FECHA FACTURA</th>
                            <th>N OC</th>
                            <th>VALOR FACTURADO</th>
                            <th>FACTURA</th>
                            <th>VALOR FACTURA</th>
                            <th>VALOR RESTANTE DE FACTURA PARA ASOCIAR</th>
                           
                            
                        </tr>
                      </thead>
                      <tbody>
                       
                        <?php  while($fila = mysqli_fetch_array($resultado)){ 
       
                        echo "<tr><td>"; 
                          
                         echo $fila['NIP']."</td><td>";
                
                        echo $fila['NRO_COTI']."</td><td>";
    
    
                    
    
                        $query2="SELECT * FROM concepto, informe_de_pago where concepto.cp = informe_de_pago.cp and informe_de_pago.cp = ".$fila['CP'];
                        $resultado2= $conexion->query($query2);
                        $row=$resultado2->fetch_assoc();
    
                        
                        echo $row['CP']."</td><td>";
                        echo $row['NOMBRE']."</td><td>";
    
    
    
                        $query3="SELECT * FROM centro_de_costo where id_cc = ".$row['ID_CC'];
                        $resultado3= $conexion->query($query3);
                        $row3=$resultado3->fetch_assoc();
    
                        echo $row3['NOM_CC']."</td><td>";
    
                           $query4="SELECT * FROM TIPO, concepto where TIPO.ID_TIPO = concepto.ID_TIPO and concepto.cp = ".$row['CP'];
                        $resultado4= $conexion->query($query4);
                        $row4=$resultado4->fetch_assoc();
                        
                        echo $row4['NOM_TIPO']."</td><td>";
    
    
                         $query5="SELECT * FROM ESTADO_COBRANZA where ID_EO_COB = ".$row['ID_EO_COB'];
                        $resultado5= $conexion->query($query5);
                        $row5=$resultado5->fetch_assoc();
                        
                        echo $row5['NOM_EO_COB']."</td><td>";
    
    
                        echo $fila['VALOR_IP']."</td><td>";
                        echo $fila['FECHAENVIOIP']."</td><td>";
    
                        echo $row5['NOM_EO_COB']."</td><td>";
                        echo $row5['NOM_EO_COB']."</td><td>";
        


    
                        echo $row['DESCRIPCION']."</td><td>";
                        echo $row['VALORPROYECTO']."</td><td>";
    
                 /*   $query6="SELECT * FROM FACTURA, PAGO_FACT, INFORME_DE_PAGO where PAGO_FACT.ID_FACT = FACTURA.ID_FACT AND PAGO_FACT.ID_IP = INFORME_DE_PAGO.ID_IP AND INFORME_DE_PAGO.ID_IP = ".$fila['ID_IP'];
                       $resultado6 = mysqli_query($conexion, $query6);
                            
                            while($row6 = mysqli_fetch_array($resultado6)){
                            echo $row6['NFACT']." : ".$row6['f_factura'];
                            
                            }*/
    
    
                                   echo $fila['F_FACTURA']."</td><td>";

    
        
$query6="SELECT * FROM OC, FACTURA where FACTURA.ID_FACT = OC.ID_FACT AND factura.ID_FACT = ".$fila['ID_FACT'];
                       $resultado6 = mysqli_query($conexion, $query6);
                            
                            while($row6 = mysqli_fetch_array($resultado6)){
                            echo $row6['ID_OC']." , ";
                            
                            }
    
                            echo "</td><td>";
    
                         echo $fila['VALOR_FACTURADO']."</td><td>";

    
                           echo $fila['NFACT']."</td><td>";

                           echo $fila['VALOR']."</td><td>";
                           echo $fila['POR_FACTURAR']."</td><td>";

    
                    /*
                        
                        echo $fila['AVANCE']."% <meter max=100 id='barra' value=".$fila['AVANCE']." low='30' high='60' optimun='100'></meter></td><td>";
    
                       
    
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
    
                         $query6="SELECT * FROM personas, comprometidos WHERE personas.ID_PERSONAS = comprometidos.ID_PERSONAS AND NI = 10 AND COMPROMETIDOS.CP = ".$fila['CP'];
                        $resultado6= $conexion->query($query6);
                        $row6=$resultado6->fetch_assoc();
    
                        echo $row6['NOM_PERSONAS']."</td><td>";
    
                          $query7="SELECT * FROM personas, comprometidos WHERE personas.ID_PERSONAS = comprometidos.ID_PERSONAS AND NI = 20 AND COMPROMETIDOS.CP = ".$fila['CP'];
                        $resultado7= $conexion->query($query7);
                        $row7=$resultado7->fetch_assoc();
                        
                        
                        if ($row7['NOM_PERSONAS'] == "Seleccionar"){
                            
                            echo "No aplica"."</td><td>";
                        }else{
                            
                            echo $row7['NOM_PERSONAS']."</td><td>";
                        }
                        
                            $query8="SELECT * FROM personas, comprometidos WHERE personas.ID_PERSONAS = comprometidos.ID_PERSONAS AND NI = 00 AND COMPROMETIDOS.CP = ".$fila['CP'];
                        $resultado8= $conexion->query($query8);
                        $row8=$resultado8->fetch_assoc();
    
                        echo $row8['NOM_PERSONAS']."</td><td>";

    
                        
    
                            echo $fila['FECHADEASIGNACION']."</td><td>";
    
    
                            echo $fila['INI_ASIG']."</td><td>";
    
    
                            echo $fila['INI_REAL']."</td><td>";
                            echo $fila['FEC_INF']."</td><td>";
                            echo $fila['TER_REAL']."</td><td>";
                            echo $fila['TER_ASIG']."</td><td>";
                            
                             $query9="SELECT * FROM REGION, ciudad, CONCEPTO  WHERE CONCEPTO.ID_CIUDAD = ciudad.ID_CIUDAD AND REGION.ID_REGION = CIUDAD.ID_REGION AND CONCEPTO.CP = ".$fila['CP'];
                        $resultado9= $conexion->query($query9);
                        $row9=$resultado9->fetch_assoc();
    
    
                            echo $row9['NOM_REGION']."</td><td>";*/

                        echo "</tr>";    
                            
                        }
                          ?>
                          
                          
                          </tbody>
                      </table>