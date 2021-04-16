<!-- 
Creado por Luisetfree & tecnosetfree
Web: http://luisetfree.over-blog.es
Facebook:https://www.facebook.com/tecnosetfree/
Twitter: @tecnosetfree
Apoyanos con tus visitas y comentarios en nuestras redes sociales para seguir avanzando y traer contenido de calidad.

 -->
<?php
session_start();
?>

<?php

include 'bd.php';

$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$roladmin ='1';
$roluser ='2';
$rolcobr ='3';
$rolst = '4';

$sql = "SELECT * FROM PERSONAS WHERE RUT= '$username'";


$result = $conexion->query($sql);


if ($result->num_rows > 0) {     }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);
 // if (password_verify($password, $row['password'])) { 
if ($password==$row['CLAVE']) { 

/*
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
   
    header('Location:principal.php');
*/

    
    if($roladmin==$row['ID_ROL']){
     
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['rol'] =$rol;
    $_SESSION['roladmin'] =$roladmin;
  


    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    header('Location:principaladmin.php');//redirecciona a la pagina del usuario
     
 } else if($roluser==$row['ID_ROL']){
         $_SESSION['loggedin'] = true;
    
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['rol'] =$rol;
        
    $_SESSION['roluser'] =$roluser;

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    header('Location:principal.php');//redirecciona a la pagina del usuario
     
 } else if($rolcobr==$row['ID_ROL']){
         $_SESSION['loggedin'] = true;
    
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['rol'] =$rol;
        
    $_SESSION['rolcobr'] =$rolcobr;

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    header('Location:principalcobranza.php');//redirecciona a la pagina del usuario
     
 } else if($rolst==$row['ID_ROL']){
         $_SESSION['loggedin'] = true;
    
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['rol'] =$rol;
        
    $_SESSION['rolst'] =$rolst;

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    header('Location:principalst.php');//redirecciona a la pagina del usuario
     
 }
    

    
   
    
 } else { 
   //echo "Username o Password estan incorrectos.";
	echo "<script language='JavaScript'>alert('Error! Usuario o Password incorrectos'); parent.location.href='index.php'; </script>";

  // echo "<br><a href='index.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>






<?php  
/*

session_start();


$user = $_POST['usuario'];
$clave = $_POST['clave'];

$_SESSION['usuario'] = $user;





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



$consulta = "SELECT * FROM PERSONAS WHERE RUT='$user' and CLAVE='$clave'";
$resultado=mysqli_query($conexion , $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    
header("Location:principal.php");
    
}else {
    
    header("location:index.php");
    
}

mysqli_free_result($resultado);
mysqli_close($conexion);
*/


?>   