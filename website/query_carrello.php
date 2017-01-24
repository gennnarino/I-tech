<?php 
	session_start();
	$carrello=$_SESSION['carrello'];
	$idP=$_POST['idP'];
	$quantita=$_POST['quantita'];
	$prezzo=$_POST['prezzo'];
	$modello=$_POST['modello'];
	$carrello=$carrello.$idP.','.$modello.','.$quantita.','.$prezzo.',';
	$_SESSION['carrello']=$carrello;
	echo $carrello;
?>