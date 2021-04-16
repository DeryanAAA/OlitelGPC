<?php
//Tragen Sie hier Ihre Datenbankinformationen ein und den Namen der Backup-Datei
/*$mysqlDatabaseName ='sgpc';
$mysqlUserName ='sgpc';
$mysqlPassword ='_sgpc123';
$mysqlHostName ='localhost';
$mysqlImportFilename ='C:\xampp\htdocs\GPC2.0\bd\backupgpc.sql';

//Por favor, no haga ningún cambio en los siguientes puntos
//Importación de la base de datos y salida del status
$command='mysql -h' .$mysqlHostName .' -u' .$mysqlUserName .' --password="' .$mysqlPassword .'" ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
exec($command); exit();
switch($worked){
case 0:
echo 'Los datos del archivo <b>' .$mysqlImportFilename .'</b> se han importado correctamente a la base de datos <b>' .$mysqlDatabaseName .'</b>';
break;
case 1:
echo 'Se ha producido un error durante la importación. Por favor, compruebe si el archivo está en la misma carpeta que este script. Compruebe también los siguientes datos de nuevo: <br/><br/><table><tr><td>Nombre de la base de datos MySQL:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b>NOTSHOWN</b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$mysqlHostName .'</b></td></tr><tr><td>Nombre de archivo de la importación de MySQL:</td><td><b>' .$mysqlImportFilename .'</b></td></tr></table>';
break;
}*/
?>
<?php
$mysqlDatabaseName ='sgpc';
$mysqlUserName ='sgpc';
$mysqlPassword ='_sgpc123';
$mysqlHostName ='localhost';
$mysqlImportFilename ='C:\xampp\htdocs\GPC2.0\bd\backupgpc.sql';
echo "Su base esta siendo restaurada.......\n<br>";
system("cat ".$mysqlImportFilename ." | mysql --host=localhost --user=".$mysqlUserName." --password=".$mysqlPassword);
echo "Fin. Su base está emplazada en su alojamiento.";
?>