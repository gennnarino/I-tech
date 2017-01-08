<?php
session_start(); 
include ("connessione.php");

$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$indirizzo=$_POST['indirizzo'];
$cf=$_POST['cf'];
$telefono=$_POST['telefono'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];

echo $nome;
echo $cognome;
echo $cf;
echo $telefono;
echo $mail;
echo $pass;
echo $indirizzo;


?>