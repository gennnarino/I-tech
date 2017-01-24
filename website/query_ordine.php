 <?php 
 include ("connessione.php");
$prodotti=array();
$prezzo_tot=$_SESSION['prezzo_tot']
$user="a";
$queryy = "SELECT cf FROM cliente WHERE email = '$user' ";
$ris= mysqli_query ($connessione,$queryy);
$rs = mysqli_fetch_assoc($ris);
$cf = $rs['cf'];

$query = "INSERT INTO ordine (cf,stato,prezzo,data) VALUES ('$cf', 'PAGATO','$prezzo_tot',NOW())"; 
$ris =mysqli_query($connessione,$query);
$query = "SELECT MAX(idO) FROM ordine WHERE cf = '$cf'"; 
$ris =mysqli_query($connessione,$query);
$rs = mysqli_fetch_assoc($ris);
$id=$rs['MAX(idO)'];

$carrello=$_SESSION['carrello'];
$prodotti=explode(',',$carrello);

$conta = count($prodotti);

for($i=0;$i<$conta;$i=$i+4){
$idP=$prodotti[$i];
$quantita=$prodotti[$i+1];
$query ="INSERT INTO acquisto (idP,idO,quantita) VALUES ('$idP',$id','$quantita')";
$ris =mysqli_query($connessione,$query);
}

