<?php
    session_start();
    require_once("connection.php");
    if (!isset($_SESSION['accessoPermesso'])) header('Location: Login.php');
    $tabella=$tabellaProdotti;
    require("aggiungiAlCarrello.php");
    
    echo "<?xml version = \"1.0\"?>"; 
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title> Altri Prodotti </title>
    <link rel="stylesheet" href="stile.css" type="text/css" media="all">
</head>
<body>
<div class="Home"> <a class="active" href="index.php">Home</a> </div>
<form action= <?php echo "\"{$_SERVER['PHP_SELF']}\""?> method="POST">
    <?php
        $query = "select * from $tabellaProdotti";
        $risultato=mysqli_query($connessione, $query);
        $numeroTuple = mysqli_num_rows($risultato);
        if ($numeroTuple==0)
            exit();
        require("elencoProdotti.php");
        ?>
        </form>
</body>
</html>