<?php 
	session_start();
	$carrello=$_COOKIE["carrello"];
	$idP=$_POST['idP'];
	$quantita=$_POST['quantita'];
	$prezzo=$_POST['prezzo'];
	$modello=$_POST['modello'];
	if(is_numeric($quantita)){
		$carrello=$carrello.$idP.','.$modello.','.$quantita.','.$prezzo.',';
        setcookie("carrello", $carrello);

    	header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	else{
		echo '<script language=javascript>alert("Il valore immesso in quantità non è valido")</script>';
		echo '<script language=javascript>document.location.href="prodotti.php"</script>';
	}
	

?>