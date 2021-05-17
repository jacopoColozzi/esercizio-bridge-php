<?php 
    session_start();
    if (!isset($_SESSION['accessoPermesso'])) header('Location: Login.php');
    echo "<?xml version = \"1.0\"?>"; 
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title> Metti in vendita i tuoi prodotti </title>
    <link rel="stylesheet" href="stile.css" type="text/css" media="all">
</head>
<body>

<div class="Home"> <a class="active" href="index.php">Home</a> </div>
<?php
    require_once("connection.php");
    if(!isset($_POST['invio'])) {
        ?>
        <h1> Metti in vendita i tuoi prodotti </h1>
        <form action= <?php echo "\"{$_SERVER['PHP_SELF']}\""?> method="POST">
        <p>Nome: <input type="text" name="nome" /> </p>
        <p>Disponibilit&agrave;: <input type="number" name="disp" /> </p>
        <p>Prezzo: <input type="number" name="prezzo" /> </p>
    </p>
        <input type="submit" name="invio" value="invio"> 
        </form>
        <?php
            } else {
                $query = "insert into $tabellaProdotti values( '{$_POST['nome']}', '{$_POST['disp']}', '{$_POST['prezzo']}')";
                $risultato=mysqli_query($connessione, $query);
                    if($risultato) {
                        echo "<p>Inserito Correttamente</p>";
                    } else {
                        echo "<p>Inserito non Correttamente</p>";
                        echo $connessione->error;
                    }
        ?>
        <p> <a href=<?php echo "\"{$_SERVER['PHP_SELF']}\""?> > torna al form  </a> </p>
        <?php } ?>
</body>
</html>