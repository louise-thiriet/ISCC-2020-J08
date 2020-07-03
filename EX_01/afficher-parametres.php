<a href="afficher-parametres.php?param1=valeur1&amp;param2=valeur2">Afficher les paramètres</a>

<?php
foreach($_GET as $clef => $valeur){
    echo '<ul>';
    echo '<li>clé= ' .$clef. ', valeur= ' .$valeur. '</li>';
    echo '</ul>';
}
?>