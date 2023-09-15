<form action="../controllers/UserController.php?action=inscription" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required>

    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" id="mot_de_passe" name="mot_de_passe" required>

    <label for="confirmation_mot_de_passe">Confirmer le mot de passe :</label>
    <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" required>

    <button type="submit">S'inscrire</button>
</form>
