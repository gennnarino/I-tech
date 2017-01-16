<?php
session_start(); 
$user="a";
$admin=true;
include ("connessione.php");
if($admin==false){
$queryy = "SELECT cf FROM cliente WHERE email = '$user' ";
	$ris= mysqli_query ($connessione,$queryy);
	$rs = mysqli_fetch_assoc($ris);
	$cf = $rs['cf'];
$queryyy = mysqli_query($connessione,"SELECT * FROM riparazione where cliente = '$cf' ");
    while($ciclo=mysqli_fetch_assoc($queryyy)){
          
            $id = $ciclo[idR];
            $descrizione = $ciclo[descrizione];
            $prezzo = $ciclo[prezzo];
            $stato = $ciclo[stato];
            $cliente = $ciclo[cliente];
            include("script_tabella_riparazioni.php");
    
} 
    
} else if($admin==true){
    
$query = mysqli_query($connessione,"SELECT * FROM riparazione");

while($ciclo=mysqli_fetch_assoc($query)){
          
            $id = $ciclo[idR];
            $descrizione = $ciclo[descrizione];
            $prezzo = $ciclo[prezzo];
            $stato = $ciclo[stato];
            $cliente = $ciclo[cliente];
            include("script_tabella_riparazioni.php");
    
} 
}
mysqli_close($connessione);
?>