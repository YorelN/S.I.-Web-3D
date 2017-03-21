<?php Message::display()?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <p>
        <label for="email">Email :</label>
        <input type="email" name="mail" id="email" required>
    </p>
    <p>
        <label for="pass">Mot de passe:</label>
        <input type="password" name="password" id="pass" required>
    </p>

    <p>
        <label for="univ">Université</label>
        <input type="text" name="universite" id="univ" required>
    </p>
    <input type="submit" name="submit" value="S'inscrire">
</form>
