<?php
	$nomehost = 'netflics.hopto.org'; 
	$nomeuser = 'itech';
	$password = 'itech';
	$dbname = 'negozio';

	$mysqli = new mysqli($nomehost,$nomeuser,$password,$dbname);
    	if ($mysqli->connect_error) {
        	die('Errore di connessione (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
    } else {
    	mysqli_query("INSERT INTO cliente (cf,nome,cognome,indirizzo,email,pssw,telefono) VALUES ('frssfn90d28d708s','stefano','foresta','via torino','stefano@itech.it',12345678,0000000000)");
    }
    ?>