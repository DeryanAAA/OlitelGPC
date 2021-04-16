<!DOCTYPE html>
<html lang="en">

<?php include "bd.php";  
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['rolcobr'] == '3' ){

} else {

   header('Location:index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}
?>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-4.0.0/estilo.css"> 
<script src="assets/javascript/jquery-3.5.1.min.js"></script>
<script src="assets/javascript/main.js"></script>
<script src="assets/javascript/jquery.min.js"></script>

<body>

    
                        
<?php

                        
                        $salida = "";
                        $query = "SELECT * FROM informe_de_pago ORDER By ID_IP";

                        if(isset($_POST['consulta'])){
                          $q = $conexion->real_escape_string($_POST['consulta']);
                          $query = "SELECT * FROM informe_de_pago WHERE ID_IP LIKE '%$q%' OR CP LIKE '%$q%' OR CC LIKE '%$q%' OR NRO_COTI LIKE '%$q%' OR ESTADO LIKE '%$q%' OR FECHAENVIOIP LIKE '%$q%' OR NIP LIKE '%$q%' OR VALOR_IP LIKE '%$q%' OR VALOR_FACTURADO LIKE '%$q%' OR OBSERVACIONES LIKE '%$q%'";
                        }

                        $resultado = $conexion->query($query);

                        if($resultado->num_rows > 0){

                            

                           
                            
                            
                            
                        } else {

                            $salida.="No hay datos :(";

                        }

                        

                            $salida.="</tbody></table>";

                        echo $salida;
                        $conexion->close();

                        
?>


</body>
</html>                
                    

