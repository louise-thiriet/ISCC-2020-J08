<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>mini-site-routing</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<header>
<nav class="menu">
        <a href="http://localhost/ISCC/J08/EX_01/mini-site-rooting.php?page=1">Accueil</a>
        <a href="http://localhost/ISCC/J08/EX_01/mini-site-rooting.php?page=2">Page 2</a>
        <a href="http://localhost/ISCC/J08/EX_01/mini-site-rooting.php?page=3">Page 3</a>
    </nav>
<?php
if($_GET['page'] == 1){
     echo '<h1>' .$title = 'Accueil!</h1>';}
elseif($_GET['page'] == 2){
    echo '<h1>' .$title = 'Page 2!</h1>';}
else{
    echo '<h1>' .$title = 'Page 3!</h1>';}
 
?>

</header>
</html>
