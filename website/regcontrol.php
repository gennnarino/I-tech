<?php

/* DEBUG
error_reporting(E_ALL | E_STRICT);
ini_set(‘display_errors’, 1);
*/

session_start(); 
include ("connessione.php");

$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$indirizzo=$_POST['indirizzo'];
$cf=$_POST['cf'];
$telefono=$_POST['telefono'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];


$query = "INSERT INTO cliente (nome,cognome,indirizzo,cf,telefono,email,passw)
 VALUES ('$nome', '$cognome','$indirizzo','$cf',$telefono,'$mail','$pass')"; 

if (mysqli_query ($connessione,$query)) {
	echo '<script language=javascript>document.location.href="index.php"</script>';
}
else {
    echo '<script language=javascript>document.location.href="registrazione.php"</script>';
   }
 
?>