<?php
function restore($server, $username, $password, $dbname, $location){
    //connection
	//echo "valores= ".$server ."/". $username."/". $password."/". $dbname;
	
	 if(mysqli_select_db(mysqli_connect($server, $username, $password, $dbname), $dbname)){
       echo "database exists";
	    $sql1 = 'DROP DATABASE '.$dbname;
         $retval = mysqli_query( mysqli_connect($server, $username, $password, $dbname), $sql1 );
		  if(! $retval ) {
            die('no se pudo eliminar la Base de datos: ' . mysqli_error());
         }
		 else{
			 echo "La base de datos ha sido eliminada";
		 }
}else{
	echo "La base de datos NO existe";
}
		$sql2 = 'CREATE DATABASE '.$dbname;
		
		 $retval = mysqli_query(mysqli_connect($server, $username, $password),$sql2 );
         
         if(! $retval ) {
            die('No se pudo crear la base de datos: ' . mysqli_error());
         }else{
			 echo "La base de datos ha sido Creada";
		 }
		
    $conn = new mysqli($server, $username, $password, $dbname); 




    //variable use to store queries from our sql file
    $sql = '';
    
    //get our sql file
    $lines = file($location);

    //return message
    $output = array('error'=>false);
    
    //loop each line of our sql file
    foreach ($lines as $line){

        //skip comments
        if(substr($line, 0, 2) == '--' || $line == ''){
            continue;
        }

        //add each line to our query
        $sql .= $line;

        //check if its the end of the line due to semicolon
        if (substr(trim($line), -1, 1) == ';'){
            //perform our query
            $query = $conn->query($sql);
            if(!$query){
            	$output['error'] = true;
                $output['message'] = $conn->error;
            }
            else{
            	$output['message'] = 'Base de datos restaurada con éxito';
            }

            //reset our query variable
            $sql = '';
            
        }
    }

    return $output;
}

function backDb($host, $user, $pass, $dbname, $tables = '*'){
		//make db connection
		$conn = new mysqli($host, $user, $pass, $dbname);
		if ($conn->connect_error) {
		    die("La conexión falló: " . $conn->connect_error);
		}

		//get all of the tables
		if($tables == '*'){
			$tables = array();
			$sql = "SHOW TABLES";
			$query = $conn->query($sql);
			while($row = $query->fetch_row()){
				$tables[] = $row[0];
			}
		}
		else{
			$tables = is_array($tables) ? $tables : explode(',',$tables);
		}

		//getting table structures
		$outsql = '';
		foreach ($tables as $table) {
    
		    // Prepare SQLscript for creating table structure
		    $sql = "SHOW CREATE TABLE $table";
		    $query = $conn->query($sql);
		    $row = $query->fetch_row();
		    
		    $outsql .= "\n\n" . $row[1] . ";\n\n";
		    
		    $sql = "SELECT * FROM $table";
		    $query = $conn->query($sql);
		    
		    $columnCount = $query->field_count;

		    // Prepare SQLscript for dumping data for each table
		    for ($i = 0; $i < $columnCount; $i ++) {
		        while ($row = $query->fetch_row()) {
		            $outsql .= "INSERT INTO $table VALUES(";
		            for ($j = 0; $j < $columnCount; $j ++) {
		                $row[$j] = $row[$j];
		                
		                if (isset($row[$j])) {
		                    $outsql .= '"' . $row[$j] . '"';
		                } else {
		                    $outsql .= '""';
		                }
		                if ($j < ($columnCount - 1)) {
		                    $outsql .= ',';
		                }
		            }
		            $outsql .= ");\n";
		        }
		    }
		    
		    $outsql .= "\n"; 
		}

		// Save the SQL script to a backup file
	    $backup_file_name = $dbname . '_backup.sql';
	    $fileHandler = fopen($backup_file_name, 'w+');
	    fwrite($fileHandler, $outsql);
	    fclose($fileHandler);

	    // Download the SQL backup file to the browser
	    header('Content-Description: File Transfer');
	    header('Content-Type: application/octet-stream');
	    header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
	    header('Content-Transfer-Encoding: binary');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($backup_file_name));
	    ob_clean();
	    flush();
	    readfile($backup_file_name);
	    exec('rm ' . $backup_file_name);

	}



?>