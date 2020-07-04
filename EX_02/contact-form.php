<!DOCTYPE html>
<html>
   
    <?php
     if(isset($_POST['submit']))
    {
           echo "<p> Nom et prénom : " . $_POST['Nom'] . "</p>";
           echo "<p> email : " . $_POST['email'] . "<p>";
           echo "<p>Message : " . $_POST['message'] . "</p>";
     }
     else 
     {
        echo "<p> Aucune donnée reçu.</p>";
     }
  ?>

</html>
        

