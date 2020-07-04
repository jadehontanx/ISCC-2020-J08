<!DOCTYPE html>

<html>
    <head>
        <title> mini-site-routing </title>
    </head>

    <body>
        <nav>
    <a href="">Accueil !</a>
    <a href="">Page 2 !</a>
    <a href="">Page 3!</a>
</nav>

<?php
if ($_GET['page'] == '1')
{
    echo "<h1> Accueil ! </h1>";
}

if ($_GET['page'] == '2')
{
    echo "<h1>Page 2 ! </h1>";
}

if ($_GET['page'] == '3')
{
    echo "<h1>Page 3 ! </h1>";
}
?>
</body>
</html>