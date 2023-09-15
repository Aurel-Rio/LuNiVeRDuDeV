<?php
session_start(); // Démarrez la session pour accéder aux données de session

// Assurez-vous que l'utilisateur est connecté et récupérez son nom depuis la session
$nomUtilisateur = isset($_SESSION['nom_utilisateur']) ? $_SESSION['nom_utilisateur'] : '';

// Obtenez la date actuelle
$dateActuelle = date("d F Y"); // Format de date au choix
$heureActuelle = date("H:i"); // Format d'heure au choix
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
</head>
<body>
    <div>
        <?php if (!empty($nomUtilisateur)) : ?>
            <h1>Bienvenue, <?php echo $nomUtilisateur; ?> !</h1>
        <?php else : ?>
            <h1>Bienvenue</h1>
        <?php endif; ?>
        <p>Date : <?php echo $dateActuelle; ?></p>
        <p>Heure : <?php echo $heureActuelle; ?></p>
    </div>

    <!-- Le reste de votre contenu HTML ici -->
</body>
</html>
