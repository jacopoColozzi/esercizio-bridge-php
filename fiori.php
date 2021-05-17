<?php 
    session_start();
    if (!isset($_SESSION['accessoPermesso'])) header('Location: Login.php');
    require_once("connection.php");
    $qselect = "SELECT * FROM $tabellaFiori";
    $resultQ = mysqli_query($connessione, $qselect);
    $row = mysqli_fetch_array($resultQ);
    if(isset($_POST['aggiungiCarrello'])) {
        $prodotto = explode("\"", $_POST['aggiungiCarrello'])[1];
        $_SESSION['fiori'][] = $prodotto;
        echo "<p>$prodotto aggiunto al carrello. Clicca <a href='carrello.php'>qui</a> per andare al carrello. </p> ";
    }
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
        <p><strong>qui ti presentiamo i nostri fiori</strong></p>
        <p>se ti interessano, le puoi comprare nella pagine dei fiori</p>
        <form action= <?php echo "\"{$_SERVER['PHP_SELF']}\""?> method="POST">
        <?php 
        $qselect = "SELECT * FROM $tabellaFiori";
        $resultQ = mysqli_query($connessione, $qselect);
        foreach($resultQ as $chiave => $v)
        echo" <div class=\"card\"><img src=\"{$v['percorso']}\" alt=\"Avatar\" style=\"width:100%\">
             \n<div class=\"container\">
            <h4><b>{$v['nome']}</b></h4>
            <h4><b>{$v['prezzo']}&euro;</b></h4> 
            \n</div> 
            <input type=\"submit\" name=\"aggiungiCarrello\" value='Aggiungi \"{$v['nome']}\" al carrello'>
            \n</div>";
        ?>
        </form>
    </body>
</html>