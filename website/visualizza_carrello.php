<?php 
session_start();
$carrello=$_COOKIE["carrello"];
$prodotti=explode(',',$carrello);
$conta=0;
$conta = count($prodotti);
if  ($conta==0){
    
    echo '<script language=javascript>alert("Nessun Prodotto nel carrello")</script>';
    echo '<script language=javascript>document.location.href="prodotti.php"</script>';
 
}
else {

	for($i=0;$i<$conta;$i=$i+4){
		$idP=$prodotti[$i];
		$modello=$prodotti[$i+1];
		$quantita=$prodotti[$i+2];
		$prezzo=$prodotti[$i+3];
        include("script_tabella_carrello.php");
		$totale_ordine=$totale_ordine+$prezzo*$quantita;
        
	}
    
    $idP=0;
    $modello="";
    $quantita="";
    $prezzo=0;
$prodotti=array();
$carrello="";
}
?>