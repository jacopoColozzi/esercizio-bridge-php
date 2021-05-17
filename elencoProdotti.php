<?php
foreach($risultato as $c=>$v) {
    echo" <div class=\"card\">
            \n<div class=\"container\">";
    if(isset($v['percorso'])) {
            echo "<img src=\"{$v['percorso']}\" alt=\"Avatar\" style=\"width:100%\">";
    }
    echo " <h4><strong>{$v['nome']}</strong></h4>
            <p>Prezzo:{$v['prezzo']}&euro;  Disponibilit&agrave;:{$v['disponibilita']}</p> ";
    if ($v['disponibilita']>0) {
        echo "<input type=\"submit\" name=\"aggiungiCarrello\" value='Aggiungi \"{$v['nome']}\" al carrello'>";
    } else {
        echo "<h4><strong>Esaurito</h4></strong>";
    }
        echo"\n</div>\n</div>";
    }
?>