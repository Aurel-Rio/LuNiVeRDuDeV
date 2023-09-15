<?php
require_once('../utils/bddConnexion.php');

class MessageController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function envoi($expediteur_id, $destinataire_id, $contenu_message) {
        $sql = "INSERT INTO messages (expediteur_id, destinataire_id, contenu) VALUES (:expediteur_id, :destinataire_id, :contenu)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':expediteur_id', $expediteur_id);
        $stmt->bindParam(':destinataire_id', $destinataire_id);
        $stmt->bindParam(':contenu', htmlspecialchars($contenu_message));

        if ($stmt->execute()) {
            // Message envoyé avec succès
            return true;
        } else {
            // Échec de l'envoi du message
            return false;
        }
    }
}
?>
