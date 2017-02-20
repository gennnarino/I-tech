<?php
session_start();
include("connessione.php");
$prezzo=strip_tags($_POST['prezzo']);
$id= strip_tags($_POST['id']);
$prox_stato = strip_tags($_POST['stato']);
$query = "UPDATE riparazione SET prezzo = '$prezzo',stato= '$prox_stato' WHERE idR = '$id' ";
if($prox_stato=="ACCETTAZIONE"){
		$messaggio="Preventivo con prezzo inoltrato";
	}
	else if ($prox_stato=="ACCETTATO"){
		$messaggio="Preventivo accettato, in attesa di conferma riparazione";
	}
	else if ($prox_stato=="RIFIUTATO"){
		$messaggio="Preventivo rifiutato";
	}
	else if ($prox_stato=="RIPARAZIONE_IN_CORSO"){
		$messaggio="Inizio riparazione, stato cambiato";
	}
	else if ($prox_stato=="RIPARATO"){
		$messaggio="Riparazione effettuata, inoltro messaggio";
	}
if (mysqli_query ($connessione,$query)) {

	

	echo '<script language=javascript>alert("'.$messaggio.'")</script>';
	echo '<script language=javascript>document.location.href="riparazioni.php?rip=2"</script>';
	
	}
?>