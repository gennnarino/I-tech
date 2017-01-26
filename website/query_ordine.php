 <?php 
 include ("connessione.php");
$utente=$_COOKIE['username'];

$query = "SELECT cf FROM cliente WHERE email = '$utente' ";
echo $query.'<br>';
$vuoto=',';
$ris= mysqli_query ($connessione,$query);
$rs = mysqli_fetch_assoc($ris);
$cf = $rs['cf'];
$prezzo_tot=$_POST['totale_ordine'];

$query = "INSERT INTO ordine (cf,stato,prezzo,data) VALUES ('$cf', 'PAGATO',$prezzo_tot,NOW())"; 
$ris =mysqli_query($connessione,$query);
echo $query.'<br>';

$query = "SELECT MAX(idO) FROM ordine WHERE cf = '$cf'"; 
$ris =mysqli_query($connessione,$query);
$rs = mysqli_fetch_assoc($ris);
$id=$rs['MAX(idO)'];
echo $query.'<br>';
$carrello=$_COOKIE['carrello'];
$prodotti=explode(',',$carrello);
$conta = count($prodotti);

$i=1;
 
	$i=$i-1;
	$idP=$prodotti[$i];
	$quantita=$prodotti[$i+2];
    
	$query ="UPDATE prodotto SET quantita=quantita-$quantita WHERE idP=$idP"; 
	$ris =mysqli_query($connessione,$query);
    echo $query.'<br>';


	$query ="INSERT INTO acquisto (idP,idO,quantita) VALUES ($idP,$id,$quantita)";
	$ris =mysqli_query($connessione,$query);
    echo $query.'<br>';
    $i=$i+5;

setcookie("carrello", null);
		echo '<script language=javascript>document.location.href="home.php"</script>';

?>