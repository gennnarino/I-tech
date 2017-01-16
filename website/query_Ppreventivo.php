<?php
session_start();
include("connessione.php");
$prezzo=$_POST['prezzo'];
$id= $_POST['id'];
$query = "UPDATE riparazione SET prezzo = '$prezzo',stato= 'ACCETTAZIONE' WHERE idR = '$id' ";

if (mysqli_query ($connessione,$query)) {
	echo '<script language=javascript>document.location.href="visualizza_Riparazione.php"</script>';
	echo '<script language=javascript>alert("Preventivo inviato")</script>';
	}
?>