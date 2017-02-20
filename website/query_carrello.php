<?php 
	session_start();
	$carrello=$_COOKIE["carrello"];
	$idP=strip_tags($_POST['idP']);
	$quantita=strip_tags($_POST['quantita']);
	$prezzo=strip_tags($_POST['prezzo']);
	$modello=strip_tags($_POST['modello']);
	$n_prodotti=strip_tags($_POST['n_prodotti']);
	if(is_numeric($quantita)){
		if($n_prodotti>$quantita){
			$carrello=$carrello.$idP.','.$modello.','.$quantita.','.$prezzo.',';
        	setcookie("carrello", $carrello);
        	//echo '<script language=javascript>alert("Prodotto inserito correttamente")</script>';
    		header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
		else{
			echo '<script language=javascript>alert("La quantità di prodotti scelta non è disponibile")</script>';
			echo '<script language=javascript>document.location.href="prodotti.php"</script>';
		}
		
	}
	else{
		echo '<script language=javascript>alert("Il valore immesso in quantità non è valido")</script>';
		echo '<script language=javascript>document.location.href="prodotti.php"</script>';
	}
	

?>