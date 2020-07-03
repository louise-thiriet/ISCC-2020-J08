<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Summer Code Camp</title>
    <link rel="stylesheet" href="vitrine">
    <link rel="stylesheet" href="vitrine-accueil">
    <link rel="stylesheet" href="vitrine-programme">
    <link rel="stylesheet" href="vitrine-contacts">
    <link rel="stylesheet" href="contact-form">
    <script src="script.js"></script>
    <style type="text/css">
    a:link
    {
    text-decoration:none;
    }
    </style>
</head>

<body>
<header>
<nav class="navigation">
            <a style="color:#17C1FF" href="http://localhost/ISCC/J08/EX_02/index.php?page=accueil">Accueil</a>
            <a style="color:#17C1FF" href="http://localhost/ISCC/J08/EX_02/index.php?page=programme">Programme</a>
            <a style="color:#17C1FF" href="http://localhost/ISCC/J08/EX_02/index.php?page=contacts">Contact</a>
        </nav>

    <div id="titre">
        <h1>Summer Code Camp</h1>
    </div>

</header>

<?php
if($_GET)
{
    if($_GET['page'] == 'accueil')
    {
        include('vitrine-accueil.html');
    }
    elseif($_GET['page'] == 'programme')
    {
        include('vitrine-programme.html');
    }
    elseif($_GET['page'] == 'contacts')
    {
        include('vitrine-contacts.html');
    }
    elseif($_GET['page'] == 'contact-form')
    {
        include('contact-form.php');
    }
    else
    {
        include('404.php');
    }
}

?>


<footer>
    <div class="image"><a href="http://www.epitech.eu"><img src="assetD04/logo_epitech.png"/></div></a></div>
</footer>
</body>
</html>