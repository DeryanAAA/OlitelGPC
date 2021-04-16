<?php 

header('Content-type: aplication/vnd.ms-excel;charset=iso-8859-15');

header('Content-Disposition: attachment; filename=usuarios.xls');

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
		
			$consulta = "SELECT * FROM PERSONAS";
			$resultado = mysqli_query($conexion, $consulta);
      
      mysqli_query("SET NAMES 'utf8'");

      
      
?><head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</head>

  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> RUT </th>
                          <th> Nombre</th>
                          <th> Rol </th>
                          
                          <th> Clave</th>
                            <th> Activo </th>
                            
                            
                            
                        </tr>
                      </thead>
                      <tbody>
                       
                        <?php  while($fila = mysqli_fetch_array($resultado)){ 
       
                        echo "<tr><td>"; 
                          
            
                
                        echo $fila['RUT']."</td><td>";
                        echo $fila['NOM_PERSONAS']."</td><td>";
                        
                         $query3="SELECT * FROM ROL where ID_ROL = ".$fila['ID_ROL'];
                        $resultado3= $conexion->query($query3);
                        $row3=$resultado3->fetch_assoc();
                        
                        echo $row3['NOM_ROL']."</td><td>";
                        
                        
    
                        echo $fila['CLAVE']."</td><td>";
                        echo $fila['activo']."</td>";
    
                        

                        echo "</tr>";    
                            
                        }
                          ?>
                          
                          
                          </tbody>
                      </table>