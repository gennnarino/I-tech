<?php 
	$carrello=$_COOKIE['carrello'];
	$idP=$_POST['idP'];
	$quantita=$_POST['quantita'];
	$prezzo=$_POST['prezzo'];
	$modello=$_POST['modello'];
	$carrello=$carrello.$idP.','.$modello.','.$quantita.','.$prezzo.',';
	setcoookie("carrello",$carrello);
    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>