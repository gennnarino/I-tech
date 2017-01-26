<?php

include ("connessione.php");
$user=$_POST['mail'];
$pass=$_POST['pass'];
$carrello="";
$query = "SELECT * FROM admin WHERE email = '$user' AND passw = '$pass' ";
$ris =mysqli_query($connessione,$query);
if(mysqli_num_rows($ris) == 1){
	setcookie("username", $user);
	setcookie("admin", true);
	setcookie("loggato", true);
	setcookie("password", $pass);
	echo '<script language=javascript>document.location.href="home.php"</script>';  
} 
else{
	$queryy = "SELECT * FROM cliente WHERE email = '$user' AND passw = '$pass' ";
	$riss =mysqli_query($connessione,$queryy);
	if(mysqli_num_rows($riss) == 1){
 		setcookie("username", $user);
	setcookie("admin", false);
	setcookie("loggato", true);
	setcookie("password", $pass);
		setcookie("carrello",$carrello);
		echo '<script language=javascript>document.location.href="home.php"</script>';  
	}
	else{
		echo '<script language=javascript>document.location.href="index.php"</script>';
	}
}
mysqli_close($connessione);
?>
