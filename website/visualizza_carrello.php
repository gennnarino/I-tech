<?php 

$carrello=$_COOKIE['carrello'];
echo $carrello ;
$prodotti=explode(',',$carrello);

$conta = count($prodotti);
    
	for($i=0;$i<$conta;$i=$i+4){
		$idP=$prodotti[$i];
		$modello=$prodotti[$i+1];
		$quantita=$prodotti[$i+2];
		$prezzo=$prodotti[$i+3];
        include("script_tabella_carrello.php");
		$totale_ordine=$totale_ordine+$prezzo*$quantita;

        
    }


?>