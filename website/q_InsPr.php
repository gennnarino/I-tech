<?php
    session_start(); 

    include ("connessione.php");

    $target_dir = "website/imgProd";
    $target_file = basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo '<script language=javascript>alert("File Immagine")</script>';
            $uploadOk = 1;
        } 
        else {
            echo '<script language=javascript>alert("File NON Immagine")</script>';
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo '<script language=javascript>alert("Immagine Esistente")</script>';
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo '<script language=javascript>alert("File Troppo Grande")</script>';
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo '<script language=javascript>alert("SOLO Immagini")</script>';
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        //echo '<script language=javascript>alert("Immagine non trovata")</script>';
        echo '<script language=javascript>document.location.href="magazzino.php?mag=0"</script>';
        // if everything is ok, try to upload file
    } 
    else {
            $categoria=$_POST['categoria'];
            $modello=$_POST['modello'];
            $marca=$_POST['marca'];
            $descrizione=$_POST['descrizione'];
            $immagine=$target_file;
            $prezzo_in=$_POST['prezzo_IN'];
            $prezzo_out=$_POST['prezzo_OUT'];
            $quantita=$_POST['quantita'];
        
            if($categoria!=null && $modello!=null && $marca!=null && $descrizione!=null && $immagine!=null && $prezzo_in!=null && $prezzo_out!=null && $quantita!=null){
                if(is_numeric($prezzo_in) && is_numeric($prezzo_out) && is_numeric($quantita)){
                    $query = "SELECT idP FROM prodotto WHERE categoria='$categoria', modello='$modello', marca='$marca'";
                    if(mysqli_query ($connessione,$query)){
                        $queryy = "INSERT INTO prodotto (categoria,modello,marca,descrizione,immagine,prezzo_in,prezzo_out,quantita) VALUES ('$categoria', '$modello','$marca','$descrizione','$immagine',$prezzo_in,$prezzo_out,$quantita)";
                        if (mysqli_query ($connessione,$queryy)) {
                            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                echo '<script language=javascript>alert("Prodotto inserito correttamente")</script>';
                                echo '<script language=javascript>document.location.href="magazzino.php?mag=1"</script>';
                            }
                            else {
                                echo '<script language=javascript>alert("Immagine non inserita, riprovare")</script>';
                            }
                        }
                        else {
                            echo '<script language=javascript>alert("Erore sconosciuto durante l\'inserimento del prodotto")</script>';
                            echo '<script language=javascript>document.location.href="magazzino.php?mag=0"</script>';
                        }
                    }
                    else{
                        echo '<script language=javascript>alert("Prodotto esistente")</script>';
                        echo '<script language=javascript>document.location.href="magazzino.php?mag=0"</script>';
                    }
                }
                else{
                    echo '<script language=javascript>alert("Hai inserito valori non numerici")</script>';
                    echo '<script language=javascript>document.location.href="magazzino.php?mag=0"</script>';
                }
                
            }
            else{
                echo '<script language=javascript>alert("Sono obbligatori tutti i campi")</script>';
                echo '<script language=javascript>document.location.href="magazzino.php?mag=0"</script>';
            }
        
    }   
?>
