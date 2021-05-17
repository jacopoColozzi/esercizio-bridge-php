<?php
if(isset($_POST['aggiungiCarrello'])) {
        $prodotto = explode("\"", $_POST['aggiungiCarrello'])[1];
        $_SESSION[$tabella][] = $prodotto;
        echo "<p>$prodotto aggiunto al carrello. Clicca <a href='carrello.php'>qui</a> per andare al carrello. </p> ";
        $query = "select disponibilita from $tabella where nome='$prodotto'";
        $risultato = mysqli_query($connessione, $query);
        $disponibilita = mysqli_fetch_array($risultato)['disponibilita'];
        if($disponibilita>0) {
            $disponibilita--;
            $query = "update $tabella set disponibilita='$disponibilita' where nome='$prodotto'";
            $risultato = mysqli_query($connessione, $query);
        }
}
?>