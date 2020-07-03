<?php
if(empty($_POST)){
        echo '<p>Aucune donnée reçue.<p>';
    }
    else
    {        
        echo '<p>Nom et prénom : ' .$_POST['user_name'].'</p>';
        echo '<p>E-mail : ' .$_POST['user_mail'].'</p>';
        echo '<p>Message : '.$_POST['user_message'].'</p>';
    }
?>
