<?php
    session_start();
    if (!isset($_SESSION['accessoPermesso'])) header('Location: Login.php');
    if(isset($_POST['aggiungiCarrello'])) {
        $prodotto = explode("\"", $_POST['aggiungiCarrello'])[1];
        $_SESSION['altro'][] = $prodotto;
        echo "<p>$prodotto aggiunto al carrello. Clicca <a href='carrello.php'>qui</a> per andare al carrello. </p> ";
    }
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
        require_once("connection.php");
        $query = "select * from $tabellaProdotti";
        $risultato=mysqli_query($connessione, $query);
        $numeroTuple = mysqli_num_rows($risultato);
        if ($numeroTuple==0)
            exit();
        foreach($risultato as $c=>$v) {
            echo" <div class=\"card\">
                    \n<div class=\"container\">
                    <h4><b>{$v['nome']}</b></h4>
                    <h4><b>{$v['prezzo']}&euro;</b></h4> 
                    \n</div> 
                    <input type=\"submit\" name=\"aggiungiCarrello\" value='Aggiungi \"{$v['nome']}\" al carrello'>
                    \n</div>
                    ";
        }
            ?>
        </form>
</body>
</html>