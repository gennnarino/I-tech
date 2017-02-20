<?php 
	session_start();
	include ("connessione.php");
	$idP=strip_tags($_POST['idP']);
	echo $idP;
	$prezzo_mod=strip_tags($_POST['prezzo_mod']);
	if(is_numeric($prezzo_mod)){
		$query= "UPDATE prodotto SET prezzo_out = $prezzo_mod WHERE idP = $idP";
		mysqli_query($connessione,$query);
		echo '<script language=javascript>alert("Prezzo aggiornato")</script>';
		echo '<script language=javascript>document.location.href="magazzino.php?mag=1"</script>';
	}
	else{
		echo '<script language=javascript>alert("Il valore immesso in prezzo non è valido")</script>';
		echo '<script language=javascript>document.location.href="prodotti.php"</script>';
	}
	

?>