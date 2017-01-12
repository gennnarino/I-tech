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
        echo '<script language=javascript>alert("NON Inserito Correttamente")</script>';
        echo '<script language=javascript>document.location.href="magazzino.php?mag=0"</script>';
        // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo '<script language=javascript>alert("Immagine inserita Correttamente")</script>';
            
            $categoria=$_POST['categoria'];
            $modello=$_POST['modello'];
            $marca=$_POST['marca'];
            $descrizione=$_POST['descrizione'];
            $immagine=$_POST['fileToUpload'];
            $prezzo_in=$_POST['prezzo_IN'];
            $prezzo_out=$_POST['prezzo_OUT'];
            $quantita=$_POST['quantita'];

            $query = "INSERT INTO prodotto (categoria,modello,marca,descrizione,immagine,prezzo_in,prezzo_out,quantita) VALUES ('$categoria', '$modello','$marca','$descrizione','$immagine',$prezzo_in,$prezzo_out,$quantita)";
            if (mysqli_query ($connessione,$query)) {
                echo '<script language=javascript>alert("Inserito Correttamente")</script>';
                echo '<script language=javascript>document.location.href="magazzino.php?mag=1"</script>';
            }
            else {
                echo '<script language=javascript>alert("NON Inserito Correttamente")</script>';
                echo '<script language=javascript>document.location.href="magazzino.php?mag=0"</script>';
            }
        }
        else {
            echo '<script language=javascript>alert("NON Immagine inserita Correttamente")</script>';
        }
    }   
?>
