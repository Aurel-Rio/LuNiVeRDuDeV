// Récupérez les éléments des sections de formulaire
const formInscription = document.getElementById("form_inscription");
const formConnexion = document.getElementById("form_connexion");

// Récupérez les éléments des divs de formulaire
const formInscriptionContainer = document.getElementById("form_inscription_container");
const formConnexionContainer = document.getElementById("form_connexion_container");

// Ajoutez des écouteurs d'événements pour basculer l'affichage des divs de formulaire
formInscription.addEventListener("click", () => {
    formInscriptionContainer.style.display = "block";
    formConnexionContainer.style.display = "none";
});

formConnexion.addEventListener("click", () => {
    formInscriptionContainer.style.display = "none";
    formConnexionContainer.style.display = "block";
});

// Récupérez les éléments des croix de fermeture
const closeInscriptionButton = document.getElementById("close_inscription");
const closeConnexionButton = document.getElementById("close_connexion");

// Ajoutez des écouteurs d'événements pour fermer les formulaires lorsque la croix est cliquée
closeInscriptionButton.addEventListener("click", () => {
    formInscriptionContainer.style.display = "none";
});

closeConnexionButton.addEventListener("click", () => {
    formConnexionContainer.style.display = "none";
});
