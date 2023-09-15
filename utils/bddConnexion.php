<?php
$host = "localhost"; // Adresse du serveur MySQL
$dbname = "luniversdudev0001"; // Nom de votre base de données
$username = "riozacki"; // Nom d'utilisateur de la base de données
$password = "Domino.bae.713"; // Mot de passe de la base de données

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de données réussie.";
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

?>
