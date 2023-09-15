<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../utils/bddConnexion.php');
session_start();

class UserController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function connexion($email, $mot_de_passe) {
        $sql = "SELECT * FROM utilisateurs WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        var_dump($user); // Ajout du var_dump

        if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
            $_SESSION['nom_utilisateur'] = $user['nom'];
            $enableRedirection = false; // Mettez à false lors du débogage
            if ($enableRedirection) {
                header('Location: ../views/my_account.php');
                exit;
            }
        } else {
            return false;
        }
    }

    public function inscription() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['mot_de_passe']) || empty($_POST['confirmation_mot_de_passe'])) {
                echo "Veuillez remplir tous les champs du formulaire.";
                exit();
            }

            if ($_POST['mot_de_passe'] !== $_POST['confirmation_mot_de_passe']) {
                echo "Les mots de passe ne correspondent pas.";
                exit();
            }

            $email = $_POST['email'];
            $sql = "SELECT * FROM utilisateurs WHERE email = :email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

            var_dump($existingUser); // Ajout du var_dump

            if ($existingUser) {
                echo "Cet email est déjà enregistré.";
                exit();
            }

            $nom = $_POST['nom'];
            $mot_de_passe = $_POST['mot_de_passe'];
            $hashedPassword = password_hash($mot_de_passe, PASSWORD_BCRYPT);

            $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (:nom, :email, :mot_de_passe)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nom', htmlspecialchars($nom));
            $stmt->bindParam(':email', htmlspecialchars($email));
            $stmt->bindParam(':mot_de_passe', $hashedPassword);

            if ($stmt->execute()) {
                $_SESSION['nom_utilisateur'] = $nom;
                $enableRedirection = true; // Mettez à false lors du débogage
                if ($enableRedirection) {
                    header('Location: ../views/my_account.php');
                    exit();
                }
            } else {
                echo "Une erreur s'est produite lors de l'inscription.";
                exit();
            }
        }
    }
}
?>
