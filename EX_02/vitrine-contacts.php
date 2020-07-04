<!DOCTYPE html>

<h2>Contact</h2>
<form action="index.php?page=contact-form" method="post">
    <fieldset>
        <label for="nom et prénom">Votre nom</label>
        <input size="20" maxlength="40" name="Nom"/>

    </fieldset>
    <fieldset>
        <label for="email">Votre email :</label>
        <input size="20" maxlength="40" name="email" />
    </fieldset>

    <fieldset>
        <label for="message">Comment améliorer mon site?</label>
        <input size="20" maxlength="40" name="message" />

    </fieldset>
    <input type="submit" value="Envoyer" name="submit"/>
</form>