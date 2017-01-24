<?php 
	session_start();
    $_SESSION['prezzo_tot']=0;
	$carrello=$_SESSION['carrello'];
    $prezzo_totale=$_SESSION['prezzo_tot'];
	$idP=$_POST['idP'];
	$quantita=$_POST['quantita'];
	$prezzo=$_POST['prezzo'];
	$modello=$_POST['modello'];
	$carrello=$carrello.$idP.','.$modello.','.$quantita.','.$prezzo.',';
	$_SESSION['carrello']=$carrello;
    $prezzo_totale=$prezzo_totale+$prezzo*$quantita;
    $_SESSION['prezzo_tot']=$prezzo_totale;
	echo '<script language=javascript>alert("Prodotto aggiunto al carrello")</script>';
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>