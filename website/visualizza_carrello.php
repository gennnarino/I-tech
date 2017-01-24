<?php 

$carrello=$_SESSION['carrello'];
$prodotti=explode(',',$carrello);

$conta = count($prodotti);

for($i=0;$i<$conta;$i=$i+3){
$idP=$prodotti[$i];
$quantita=$prodotti[$i+1];
$prezzo=$prodotti[$i+2];
include("script_tabella_carrello.php");
}
?>