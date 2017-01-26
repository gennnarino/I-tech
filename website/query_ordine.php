 <?php 
 include ("connessione.php");
session_start();
$utente=$_SESSION['username'];

$query = "SELECT cf FROM cliente WHERE email = '$utente' ";
echo $query.'<br>';

$ris= mysqli_query ($connessione,$query);
$rs = mysqli_fetch_assoc($ris);
$cf = $rs['cf'];
$prezzo_tot=$_POST['totale_ordine'];
echo $prezzo_tot.'<br>';

$query = "INSERT INTO ordine (cf,stato,prezzo,data) VALUES ('$cf', 'PAGATO','$prezzo_tot',NOW())"; 
$ris =mysqli_query($connessione,$query);
echo $query.'<br>';

$query = "SELECT MAX(idO) FROM ordine WHERE cf = '$cf'"; 
$ris =mysqli_query($connessione,$query);
$rs = mysqli_fetch_assoc($ris);
$id=$rs['MAX(idO)'];
echo $query.'<br>';
$carrello=$_SESSION['carrello'];
$prodotti=explode(',',$carrello);
$conta = count($prodotti);


for($i=0;$i<$conta;$i=$i+4){
	$idP=$prodotti[$i];
	$quantita=$prodotti[$i+2];
    
	$query ="UPDATE prodotto SET quantita=quantita-'$quantita' WHERE idP='$idP'"; 
	$ris =mysqli_query($connessione,$query);
    echo $query.'<br>';


	$query ="INSERT INTO acquisto (idP,idO,quantita) VALUES ('$idP',$id','$quantita')";
	$ris =mysqli_query($connessione,$query);
    echo $query.'<br>';

}

?>