const burger = document.getElementById("burger");
const navMenu = document.getElementById("nav-menu");

burger.addEventListener("click", () => {
burger.classList.toggle("active");
navMenu.classList.toggle("active");
});

// Fermer le menu quand on clique sur un lien
document.querySelectorAll(".nav-menu li a").forEach((link) => {
link.addEventListener("click", () => {
    burger.classList.remove("active");
    navMenu.classList.remove("active");
});
});

// Fermer le menu burger si on redimensionne au-dessus de 1024px
window.addEventListener("resize", () => {
if (window.innerWidth >= 1024) {
    burger.classList.remove("active");
    navMenu.classList.remove("active");
}
});
