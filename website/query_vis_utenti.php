<?php
	include ("connessione.php");

	$query_u = mysqli_query($connessione,"SELECT * FROM cliente");	
	echo $query_u;
	while($ciclo=mysqli_fetch_assoc($query_u)){
        $cf = $ciclo[cf];
        $nome = $ciclo[nome];
        $cognome = $ciclo[cognome];
        $indirizzo = $ciclo[indirizzo];
        $mail = $ciclo[email];
        $telefono = $ciclo[telefono];
        include "script_tabella_utenti.php";
	}

	mysqli_close($connessione);
?>