<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/welcome.css">
    <link rel="stylesheet" href="../style/classe.css">
    <script defer src="../js/welcome.js"></script> 
    <title>L'univers du DEV</title>
</head>
<body>
    
    <header>
        <nav>
       
        </nav>
    </header>

    <section id="msg_welcome">
        <h2 class="txt_center">TEST Blog-Elevate</h2>
        <p>Statut : 15 sept 07:56 </p>
      
    </section>

    <div id="welcome_choice_form">
    <section id="form_inscription">
        <h2>Inscription</h2>
        <div class="form-container" id="form_inscription_container">
            <?php include './form_inscription.php'; ?>
        </div>
    </section>

    <section id="form_connexion">
        <h2>Connexion</h2>
        <div class="form-container" id="form_connexion_container">
            <?php include './form_connexion.php'; ?>
        </div>
    </section>
</div>



    <footer>
        <p  class="txt_center">2023</p>
    </footer>

</body>
</html>
