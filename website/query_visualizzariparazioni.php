<?php
session_start(); 

include ("connessione.php");

$query = mysqli_query($connessione,"SELECT * FROM riparazione");

while($ciclo=mysqli_fetch_assoc($query)){
          
            $id = $ciclo[idR];
            $descrizione = $ciclo[descrizione];
            $prezzo = $ciclo[prezzo];
            $stato = $ciclo[stato];
            $cliente = $ciclo[cliente];
            include("script_tabella_riparazioni.php");
    
} 

mysqli_close($connessione);
?>