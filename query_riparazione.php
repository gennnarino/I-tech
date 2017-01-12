<?php
session_start(); 
include ("connessione.php");

$queryy = "SELECT cf FROM cliente WHERE email = '$user' ";

if (mysqli_query ($connessione,$queryy)) {
    
	$rs = mysqli_fetch_assoc($queryy);

            $cf = $rs[cf];
}
else {
    echo '<script language=javascript>document.location.href="registrazione.php"</script>';
   }

?>