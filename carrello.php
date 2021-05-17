<?php 
    session_start();
    if (!isset($_SESSION['accessoPermesso'])) header('Location: Login.php');
    print_r($_SESSION['fiori']);
    print_r($_SESSION['frutta']);
    print_r($_SESSION['altro']);
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stile.css" type="text/css" media="all">
        <title>Carrello</title>
    </head>
    <body>
    <div class="Home"> <a class="active" href="index.php">Home</a> </div>
    <h2>Carrello</h2>

    </body>
</html>