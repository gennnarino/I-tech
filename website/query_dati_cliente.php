<?  
    include ("connessione.php");

    $query = "SELECT * FROM cliente WHERE email = '$mail' AND passw = '$pass' ";

    $ris =mysqli_query($connessione,$query);
    $quanti = mysqli_num_rows($ris);
    if ($quanti == 0)
    {
        echo "Nessun record!";
    }
    else
    {
        $rs = mysqli_fetch_assoc($ris);

            $cf = $rs[cf];
            $nome = $rs[nome];
            $cognome = $rs[cognome];
            $indirizzo = $rs[indirizzo];
            $telefono = $rs[telefono];
       
    }
    mysqli_close($connessione);
?>