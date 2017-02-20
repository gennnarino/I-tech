<?php 
session_start();
include ("connessione.php");
$utente=strip_tags($_SESSION['username']);

$query = "SELECT cf FROM cliente WHERE email = '$utente' ";
$ris= mysqli_query ($connessione,$query);
$rs = mysqli_fetch_assoc($ris);
$cf = $rs['cf'];
$prezzo_tot=strip_tags($_POST['totale_ordine']);

$query = "INSERT INTO ordine (cf,stato,prezzo,data) VALUES ('$cf', 'PAGATO',$prezzo_tot,CURDATE())"; 
$ris =mysqli_query($connessione,$query);

$query = "SELECT MAX(idO) FROM ordine WHERE cf = '$cf'"; 
$ris =mysqli_query($connessione,$query);
$rs = mysqli_fetch_assoc($ris);
$id=$rs['MAX(idO)'];
$carrello=$_COOKIE["carrello"];
$prodotti=explode(',',$carrello);
$conta = count($prodotti);

$i=1;
do{ 
	$i=$i-1;
	$idP=$prodotti[$i];
	$quantita=$prodotti[$i+2];
    
	$query ="UPDATE prodotto SET quantita=quantita-$quantita , venduti=venduti+$quantita WHERE idP=$idP"; 
	$ris =mysqli_query($connessione,$query);

	$query ="INSERT INTO acquisto (idP,idO,quantita) VALUES ($idP,$id,$quantita)";
	$ris =mysqli_query($connessione,$query);

    $i=$i+5;
}while($i<$conta);

setcookie("carrello", null);
echo '<script language=javascript>document.location.href="home.php"</script>';

?>