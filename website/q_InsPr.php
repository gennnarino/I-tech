<?php
session_start(); 

include ("connessione.php");

$categoria=$_POST['categoria'];
$modello=$_POST['modello'];
$marca=$_POST['marca'];
$descrizione=$_POST['descrizione'];
$immagine=$_POST['immagine'];
$prezzo_in=$_POST['prezzo_IN'];
$prezzo_out=$_POST['prezzo_OUT'];
$quantita=$_POST['quantita'];

    $query = "INSERT INTO prodotto (categoria,modello,marca,descrizione,immagine,prezzo_in,prezzo_out,quantita)
 VALUES ('$categoria', '$modello','$marca','$descrizione','$immagine',$prezzo_in,$prezzo_out,$quantita)"; 

if (mysqli_query ($connessione,$query)) {
    echo '<script language=javascript>alert("Inserito Correttamente")</script>';
	echo '<script language=javascript>document.location.href="ins_Prodotto.php"</script>';
}
else {
    echo '<script language=javascript>alert("NON Inserito Correttamente")</script>';
	echo '<script language=javascript>document.location.href="ins_Prodotto.php"</script>';
}

?>