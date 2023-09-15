<form action="controllers/MessageController.php?action=envoi" method="post">
    <label for="destinataire_id">Destinataire :</label>
    <select id="destinataire_id" name="destinataire_id" required>
        <!-- Remplissez cette liste déroulante avec les utilisateurs enregistrés -->
    </select>

    <label for="contenu_message">Message :</label>
    <textarea id="contenu_message" name="contenu_message" required></textarea>

    <button type="submit">Envoyer</button>
</form>
