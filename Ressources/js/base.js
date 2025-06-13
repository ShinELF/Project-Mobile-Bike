const burger = document.getElementById("burger");
const navMenu = document.getElementById("navbar");

burger.addEventListener("click", () => {
burger.classList.toggle("open");
navMenu.classList.toggle("open");
});

// Fermer le menu quand on clique sur un lien
document.querySelectorAll(".nav-menu li a").forEach((link) => {
link.addEventListener("click", () => {
    burger.classList.remove("open");
    navMenu.classList.remove("open");
});
});

// Fermer le menu burger si on redimensionne au-dessus de 1024px
window.addEventListener("resize", () => {
if (window.innerWidth >= 1024) {
    burger.classList.remove("open");
    navMenu.classList.remove("open");
}
});
