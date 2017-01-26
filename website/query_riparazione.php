<?php
include ("connessione.php");
$descrizione=$_POST['textMessaggio'];
$user=$_COOKIE['username'];
//Richiedo il codice fiscale del cliente
$queryy = "SELECT cf FROM cliente WHERE email = '$user' ";
$ris= mysqli_query ($connessione,$queryy);
$rs = mysqli_fetch_assoc($ris);
$cf = $rs['cf'];

$query = "INSERT INTO riparazione (descrizione,prezzo,stato,cliente)
 VALUES ('$descrizione', 0 ,'RICHIESTA','$cf' )"; 
if (mysqli_query ($connessione,$query)) {
echo '<script language=javascript>alert("Riparazione Rischiesta Correttamente")</script>';
	echo '<script language=javascript>document.location.href="home.php"</script>';
}
?>