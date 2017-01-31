<?php
session_start(); 

include ("connessione.php");
$user=$_POST['mail'];
$pass=$_POST['pass'];
$carrello;
$query = "SELECT * FROM admin WHERE email = '$user' AND passw = '$pass' ";
$ris =mysqli_query($connessione,$query);
if(mysqli_num_rows($ris) == 1){
	$_SESSION['username'] = $user;
	$_SESSION['admin'] = true;
	$_SESSION['loggato'] = true;
	$_SESSION['password'] = $pass;
	echo '<script language=javascript>document.location.href="home.php"</script>';  
} 
else{
	$queryy = "SELECT * FROM cliente WHERE email = '$user' AND passw = '$pass' ";
	$riss =mysqli_query($connessione,$queryy);
	if(mysqli_num_rows($riss) == 1){
 		$_SESSION['username'] = $user;
 		$_SESSION['admin'] = false;
		$_SESSION['loggato'] = true;
		$_SESSION['password'] = $pass;
		$_SESSION['carrello'] = $carrello;
		echo '<script language=javascript>document.location.href="home.php"</script>';  
	}
	else{
		echo '<script language=javascript>document.location.href="index.php"</script>';
	}
}
mysqli_close($connessione);
?>
