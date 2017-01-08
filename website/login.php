<?php
	$nomehost = 'netflics.hopto.org'; 
	$nomeuser = 'itech';
	$password = 'itech';
	$dbname = 'negozio';

	$nomehostL = 'localhost'; 
	$nomeuserL = 'root';
	$passwordL = 'root';
	$dbnameL = 'negozio';

	

	$mysqli = new mysqli($nomehostL,$nomeuserL,$passwordL,$dbnameL);
    
    if ($mysqli->connect_error) {
    	die('Errore di connessione (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
    } 
	else {
    	
		}
	}
    
?>
