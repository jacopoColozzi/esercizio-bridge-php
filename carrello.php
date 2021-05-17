<?php 
    /*ini_set('display_errors', 1);
    error_reporting(E_ALL);*/
    session_start();
    if (!isset($_SESSION['accessoPermesso'])) header('Location: Login.php');
    /*print_r($_SESSION['fiori']);
    print_r($_SESSION['frutta']);
    print_r($_SESSION['prodotti']);*/
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <link rel="stylesheet" href="stile.css" type="text/css" media="all">
        <title>Carrello</title>
    </head>
    <body>
    <div class="Home"> <a class="active" href="index.php">Home</a> </div>
    <h2>Carrello</h2>
    <table border="1" cellspacing="1" cellpadding="3">
        <thead>
        <tr>
            <th>Prodotto</th> <th>Pezzi</th> <th>Prezzo</th>
        </tr>
        </thead>
        <tbody>
        <?php
            require_once("connection.php");
            $GLOBALS["pezziTot"] = 0;
            $somma=stampaCarrello('fiori', $tabellaFiori, $connessione);
            $somma+=stampaCarrello('frutta', $tabellaFrutta, $connessione);
            $somma+=stampaCarrello('prodotti', $tabellaProdotti, $connessione);
        ?>
    </tbody>
    <tfoot>
        <tr><td>Totale</td><td><?php echo $GLOBALS["pezziTot"];?> </td><td> <?php echo $somma;?>&euro;</td></tr>
    </tfoot>
    </table>
    </body>
</html>
<?php
    function stampaCarrello($arraySessione, $tabella, $connessione) {
        $prezzoTotale = 0;
        foreach($_SESSION[$arraySessione] as $nome=>$pezzi) {
            $query = "select prezzo from $tabella where nome='$nome'";
            $risultato=mysqli_query($connessione, $query);
            $prezzo = mysqli_fetch_array($risultato)['prezzo'];
            $prezzo *= $pezzi;
            $prezzoTotale += $prezzo;
            $GLOBALS["pezziTot"] += $pezzi;
            echo "<tr>\n<td>$nome</td>";
            echo "<td>$pezzi</td>";
            echo "<td>$prezzo&euro;</td></tr>";
        }
        return $prezzoTotale;
    }
?>