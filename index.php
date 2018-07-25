

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
    <p>
        <input type="text" name="nom" value"" placeholder="Nom">
    </p>
    <p>
        <input type="text" name="prenom" value"" placeholder="Prénom">
    </p>
    <p>
        <input type="text" name="birthday" value"" placeholder="Date de naissance">
    </p>
    <p>
        <input type="submit" name="envoyer" value="envoyer">
    </p>
</form>

<?php
    require 'connectDB.php';

    $connect = new connexion();
    $connect->connect();

?>