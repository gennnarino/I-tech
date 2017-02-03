<?php 
	session_start();
	include ("connessione.php");
	$idP=$_POST['idP'];
	echo $idP;
	$quantita=$_POST['quantita'];
	$n_prodotti=$_POST['n_prodotti'];
	if(is_numeric($quantita)){
		$tot=$quantita+$n_prodotti;
		$query= "UPDATE prodotto SET quantita = $tot WHERE idP = $idP";
		mysqli_query($connessione,$query);
		echo '<script language=javascript>alert("Quantità aggiornata")</script>';
		echo '<script language=javascript>document.location.href="magazzino.php?mag=1"</script>';
	}
	else{
		echo '<script language=javascript>alert("Il valore immesso in quantità non è valido")</script>';
		echo '<script language=javascript>document.location.href="prodotti.php"</script>';
	}
	

?>