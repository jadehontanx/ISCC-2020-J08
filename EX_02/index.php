<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/vitrine.css">
</head>

<body>
    <?php require "header.php" ?>
<?php
if ($_GET['page'] == 'Accueil')
{
    require "vitrine-accueil.php";
}

else if ($_GET['page'] == 'Programme')
{
    require "vitrine-programme.php";
}
else if ($_GET['page'] == 'Contact')
{
    require "vitrine-contacts.php";
}
else if ($_GET ['page'] == "contact-form")
{
    require "contact-form.php";
}
else 
{
    require "404.php";
}
?>


</body>
<?php require "footer.php" ?>

</html>