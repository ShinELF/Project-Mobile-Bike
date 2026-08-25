const account = document.getElementById("account")
const burger = document.getElementById("burger");
const navMenu = document.getElementById("navigation");

burger.addEventListener("click", () => {
burger.classList.toggle("open");
navMenu.classList.toggle("open");
});

// Fermer le menu quand on clique sur un lien
document.querySelectorAll(".navigation li a").forEach((link) => {
link.addEventListener("click", () => {
    burger.classList.remove("open");
    navMenu.classList.remove("open");
});
});

// Fermer le menu burger si on redimensionne au-dessus de 768px
window.addEventListener("resize", () => {
if (window.innerWidth >= 768) {
    burger.classList.remove("open");
    navMenu.classList.remove("open");
}
});

