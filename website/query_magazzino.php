<?  
    include ("connessione.php");

    

    $query = "SELECT * FROM prodotto";

    $ris =mysqli_query($connessione,$query);
    $quanti = mysqli_num_rows($ris);
    if ($quanti == 0)
    {
	   echo '<script language=javascript>document.location.href="magazzino.php?mag=1"</script>';
    }
    else
    {
        while ($row = mysqli_fetch_assoc($ris)) {
            $marca=$row["marca"];
            $modello=$row["modello"];
            $prezzo_OUT=$row["prezzo_OUT"];
            $prezzo_IN=$row["prezzo_IN"];
            $quantita=$row["quantita"];
            $immagine=$row["immagine"];
            $descrizione=$row["descrizione"];
            $categoria=$row["categoria"];
            $venduti=$row["venduti"];
            $idP=$row["idP"];
            $magazzino=1;
            include("script_tabella_prodotti.php");
        }       
    }

    mysqli_close($connessione);
?>