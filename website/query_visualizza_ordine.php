<?  
session_start();
include ("connessione.php");
$utente=strip_tags($_SESSION['username']);
$admin=$_SESSION['admin'];
if($admin==false){
$query = "SELECT cf FROM cliente WHERE email = '$utente' ";
$ris= mysqli_query ($connessione,$query);
$rs = mysqli_fetch_assoc($ris);
$cf = $rs['cf'];
$queryyy = mysqli_query($connessione,"SELECT * FROM ordine where cf = '$cf' ");
}
if($admin==true){
$queryyy = mysqli_query($connessione,"SELECT * FROM ordine ");
}


            while($ciclo=mysqli_fetch_assoc($queryyy)){
            
                  $idO = $ciclo[idO];
                  $data = $ciclo[data];
                  $stato = $ciclo[stato];
                  $prezzo_tot = $ciclo[prezzo];
                  include("script_tabella_storico.php");
                  }

  mysqli_close($connessione);      

?>