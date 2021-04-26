<?php
			
            $concepto = $_POST['CP'];
            $tiposervicio = $_POST['ID_TIPO'];
            $ncoti = $_POST['NRO_COTI'];
            $estado =$_POST['ESTADO'];
            $fechaenvio =$_POST['FECHAENVIOIP'];
            $nip =$_POST['NIP'];
            $valorip =$_POST['VALOR_IP'];
            $observaciones =$_POST['OBSERVACIONES'];
          
            
          
            
            
            
            require("bd.php");
            $conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
            
            if(mysqli_connect_errno()){
                echo "error al conectar";
                exit();    
            }
            
            mysqli_select_db($conexion, $base_datos) or die("No se encuentra la BD");
            mysqli_set_charset($conexion, "utf8");
            
            
            $consulta = "INSERT INTO INFORME_DE_PAGO (CP,ID_TIPO,NRO_COTI,ESTADO,FECHAENVIO,NIP,VALOR_IP,OBSERVACIONES) VALUES (?,?,?,?,?,?,?,?)";
            
            $resultado = mysqli_prepare($conexion, $consulta);
            
            
            if(!$resultado){
                            echo "Error al Registrar.";
                          
                        }
            
            
            $ok=mysqli_stmt_bind_param($resultado,"sssss",$concepto,$tiposervicio,$ncoti,$estado,$fechaenvio,$nip,$valorip,$observaciones);
            $ok=mysqli_stmt_execute($resultado);
            
            
            
            
               
             
            
            
            
            
            
            
            if($ok == false){
                        echo "error en ejecucion bd";
                            
                        }else{
                        
                   
                     echo "<script language='JavaScript'>
                    if(confirm('El registro se ha guardado exitosamente. Desea agregar otro?')){
                        window.location.href='formagregarcc.php'; 
                    }else{
                        window.location.href='listadoip.php'; 
                    }
            
                </script>";
                        
                    }
            
            
            
            
            
            mysqli_close($conexion);
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            ?>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            