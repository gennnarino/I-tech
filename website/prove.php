<?php
	$nomehost = 'netflics.hopto.org'; 
$nomeuser = 'itech';
$password = 'itech';
$dbname='negozio';

$mysqli = new mysqli('netflics.hopto.org', 'itech', 'itech', 'negozio');
    if ($mysqli->connect_error) {
        die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
    } else {
        echo 'Connesso. ' . $mysqli->host_info . "\n";
    }
?>