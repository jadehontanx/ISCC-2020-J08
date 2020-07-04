<?php

echo "<ul>";
foreach ($_GET as $key => $value)
{
    echo "<li>cle=" . $key . ", valeur =" . $value . "</li>";
}
echo "</ul>";
