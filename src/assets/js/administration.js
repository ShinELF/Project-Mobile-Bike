console.log("admin js chargé !");

let addButton = document.getElementById("add-button");
let form = document.getElementById("add-form");
let background = document.getElementById("background");
let closeButton = document.getElementById("close-button");
let boutiqueContainer = document.getElementById("boutique-container");

addButton.addEventListener("click", () => {
    form.classList.replace("form-hidden", "form-displayed");
    background.classList.replace("product-displayed", "form-hidden");
});

closeButton.addEventListener("click", () => {
    form.classList.replace("form-displayed", "form-hidden");
    background.classList.replace("form-hidden", "product-displayed");
});

// background.addEventListener("click", () => {
//     form.classList.replace("form-displayed", "form-hidden");
// });

// Récupérer le contenu de /boutique et l'insérer dans une div
async function chargerBoutique() {
    try {
        const response = await fetch('/boutique');
        const html = await response.text();
        document.getElementById('contenu-boutique').innerHTML = html;
    } catch (error) {
        console.error('Erreur lors du chargement:', error);
    }
}

// Appeler la fonction au chargement de la page
document.addEventListener('DOMContentLoaded', chargerBoutique);