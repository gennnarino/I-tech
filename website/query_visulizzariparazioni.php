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
echo $id . $descrizione . $prezzo . $stato .$cliente . '<br>';
    
} 

mysqli_close($connessione);
?>