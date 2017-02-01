<?php 
/*
  creazione di un database con MySQLi.
  La prima operazione richiesta sarà quella relativa alla definizione
  del blocco dei parametri per la connessione
*/
// nome di host
$host = "netflics.hopto.org";
// username dell'utente in connessione
$DBuser = "itech";
// password dell'utente
$DBpassword = "itech";

$db ="itech";
// stringa di connessione al DBMS
$connessione = new mysqli($host, $DBuser, $DBpassword, $db);

?>