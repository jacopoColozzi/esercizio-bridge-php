<?php
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
    <?php
        require_once("connection.php");
        $query = "select * from $tabellaProdotti";
        $risultato=mysqli_query($connessione, $query);
        if ($risultato['num_rows']>0) {
    ?>
        <table border="1" cellspacing="1" cellpadding="3">
            <thead>
            <tr>
                <th>Codice</th> <th>Nome</th> <th>Disponibilit&agrave;</th> <th>Prezzo</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach($risultato as $c=>$v) {
                    echo "<tr>\n<td>{$v['codice']}</td>";
                    echo "<td>{$v['nome']}</td>";
                    echo "<td>{$v['disponibilita']}</td>";
                    echo "<td>{$v['prezzo']}&euro;</td>\n</tr>";
                }
            }
            ?>
        </tbody>
        </table>



</body>
</html>