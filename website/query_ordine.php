<?php 
	include ("connessione.php");

	$user="a";
	$queryy = "SELECT cf FROM cliente WHERE email = '$user' ";
	$ris= mysqli_query ($connessione,$queryy);
	$rs = mysqli_fetch_assoc($ris);
	$cf = $rs['cf'];
	$query = "INSERT INTO ordine (cf,stato,prezzo,data) VALUES ('$cf', 'PAGATO',0,NOW())"; 
	$ris =mysqli_query($connessione,$query);
	$query = "SELECT MAX(idO) FROM ordine WHERE cf = '$cf'"; 
	$ris =mysqli_query($connessione,$query);
	$rs = mysqli_fetch_assoc($ris);
	$id=$rs['MAX(idO)'];

	$idP=$_POST['idP'];
	$prezzo=$_POST['prezzo'];
	$quantità=$_POST['inputQuantita'];

	array_push($prodotti,$idP,$prezzo,$quantità);
	$conta = count($prodotti);
	echo $conta;

	$prezzo_tot=0;

	for($i=0;$i<$conta;$i=$i+3){
		$idP=$prodotti[$i];
		$quantita=$prodotti[$i+1];
		$prezzo=$prodotti[$i+2];
		$query1 ="INSERT INTO acquisto (idP,idO,quantita) VALUES ('$idP',$id','$quantita')";
    	echo $query1 . '<br>';
		$prezzo_tot=$prezzo_tot+$prezzo;
    	echo $prezzo_tot .'<br>';
	}
	$query = "UPDATE 'ordine' SET 'prezzo'='$prezzo_tot' WHERE ordine.idO='$id'"; 
	$_SESSION['carrello']=$prodotti;
	echo $prodotti[0];
	$ris =mysqli_query($connessione,$query);


?>