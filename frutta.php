<?php 
    session_start();
    if (!isset($_SESSION['accessoPermesso'])) header('Location: Login.php');
    require_once("connection.php");
    $tabella=$tabellaFrutta;
    require("aggiungiAlCarrello.php");
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stile.css" type="text/css" media="all">
        <title>Sito di esposizione</title>
    </head>
    <body>
    <div class="Home"> <a class="active" href="index.php">Home</a> </div>
        <h2>Ti presentiamo la nostra frutta</h2>
        <form action= <?php echo "\"{$_SERVER['PHP_SELF']}\""?> method="POST">
        <?php 
        $qselect1 = "SELECT * FROM $tabellaFrutta";
        $risultato = mysqli_query($connessione, $qselect1);
        require("elencoProdotti.php");
        ?>
        </form>
    </body>
</html>