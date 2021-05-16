<?php 
    require_once("connection.php");
    session_start();
    if (!isset($_SESSION['accessoPermesso'])) header('Location: Login.php');
    
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stile.css" type="text/css" media="all">
        <title>Sito di esposizione</title>
    </head>
    <body>
    <h2>Benvenuto sul nostro sito di esposizione</h2>
        <ul class="navi">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="fiori.php">Fiori</a></li>
            <li><a href="frutta.php">Frutta</a></li>
            <li><a href="aggiungiProdottiVendita.php">Aggiungi altri Prodotti al sito</a></li>
            <li><a href="altriProdotti.php">Altri Prodotti dal sito</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </body>
</html>