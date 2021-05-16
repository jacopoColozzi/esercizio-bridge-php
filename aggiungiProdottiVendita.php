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
    require_once("connection.php");
    if(!isset($_POST['invio'])) {
        ?>
        <h1> Metti in vendita i tuoi prodotti </h1>
        <form action= <?php echo "\"{$_SERVER['PHP_SELF']}\""?> method="POST" enctype="multipart/form-data">
        <p>Nome: <input type="text" name="nome" /> </p>
        <p>Disponibilit&agrave;: <input type="number" name="disp" /> </p>
        <p>Prezzo: <input type="number" name="prezzo" /> </p>
        <p>
            Foto: <input type="file" name="file" />
        </p>
        <input type="radio" name="tipo" value="fiori"> Fiori <br />
        <input type="radio" name="tipo" value="frutta"> Frutta <br />
        <input type="radio" name="tipo" value="altro"> Generico
    </p>
        <input type="submit" name="invio" value="invio"> 
        </form>
        <?php
            } else {
                $percorso = '/esercizio-bridge-php/img';

                if(strcmp($_POST['tipo'], "fiori")==0) {
                    $percorso .= '/fiori';
                    $query = "insert into $tabellaFiori values('{$_POST['nome']}', '$percorso', '{$_POST['disp']}', '{$_POST['prezzo']}')";
                } else if(strcmp($_POST['tipo'], "frutta")==0) {
                    $percorso .= '/frutta';
                    $query = "insert into $tabellaFrutta values('{$_POST['nome']}', '$percorso', '{$_POST['disp']}', '{$_POST['prezzo']}')";
                } else {
                    $percorso .= '/altri';
                    $query = "insert into $tabellaProdotti values('0', '{$_POST['nome']}', '$percorso' '{$_POST['disp']}', '{$_POST['prezzo']}')";
                }
                $risultato=mysqli_query($connessione, $query);
                    if($risultato) {
                        echo "<p>Inserito Correttamente</p>";
                    } else {
                        echo "<p>Inserito non Correttamente</p>";
                        echo $connessione->error;
                    }
                    print_r($_POST);
                    echo "<br>";
                    print_r($_FILES);
                    foreach ($_FILES as $file) {
                        if (UPLOAD_ERR_OK === $file['error']) {
                            print_r($file);
                            $fileName = basename($file['name']);
                            move_uploaded_file($file['tmp_name'], $percorso.DIRECTORY_SEPARATOR.$fileName);
                        } else {
                            echo "Errore ".$file['error'];
                        }
                    }
        ?>
        <p> <a href=<?php echo "\"{$_SERVER['PHP_SELF']}\""?> > torna al form  </a> </p>
        <?php } ?>
</body>
</html>