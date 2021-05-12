<?php
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

<form>
</form>
<?php
    $db_creato = true; // senza questo connection.php va a creare il db di nuovo
    require_once("connection.php");
    if(!isset($_POST['invio'])) {
        ?>
        <h1> Metti in vendita i tuoi prodotti </h1>
        <form action= <?php echo "\"{$_SERVER['PHP_SELF']}\""?> method="POST">
        <p>Nome: <input type="text" name="nome"> </p>
        <p>Disponibilit&agrave;: <input type="number" name="disp" > </p>
        <p>Prezzo: <input type="number" name="prezzo" > </p>
        <input type="submit" name="invio" value="invio"> 
        </form>
        <?php
            } else {
                $query = "insert into $tabellaProdotti values('0', '{$_POST['nome']}', '{$_POST['disp']}', '{$_POST['prezzo']}')";
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
        <table border="1" cellspacing="1" cellpadding="3">
            <thead>
            <tr>
                <th>Codice</th> <th>Nome</th> <th>Disponibilit&agrave;</th> <th>Prezzo</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $query = "select * from $tabellaProdotti";
                $risultato=mysqli_query($connessione, $query);
                foreach($risultato as $c=>$v) {
                    echo "<tr>\n<td>{$v['codice']}</td>";
                    echo "<td>{$v['nome']}</td>";
                    echo "<td>{$v['disponibilita']}</td>";
                    echo "<td>{$v['prezzo']}&euro;</td>\n</tr>";
                }
            ?>
        </tbody>
        </table>



</body>
</html>