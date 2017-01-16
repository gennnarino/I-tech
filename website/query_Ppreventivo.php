<?php
session_start();
include("connessione.php");
$prezzo=$_POST['prezzo'];
$id= $_POST['id'];
echo $id;

$prox_stato = $_POST['stato'];
$query = "UPDATE riparazione SET prezzo = '$prezzo',stato= '$prox_stato' WHERE idR = '$id' ";

if (mysqli_query ($connessione,$query)) {

	echo '<script language=javascript>alert("Preventivo inviato")</script>';
	echo '<script language=javascript>document.location.href="riparazioni.php?rip=2"</script>';
	
	}
?>