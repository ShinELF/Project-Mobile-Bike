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

// Fermer le menu burger si on redimensionne au-dessus de 1024px
window.addEventListener("resize", () => {
if (window.innerWidth >= 1024) {
    burger.classList.remove("open");
    navMenu.classList.remove("open");
}
});

// **************Carousel creation**************

// Targetting the different position of the carousel and the buttons

const prevBtn = document.getElementById("index-button-prev");
const nextBtn = document.getElementById("index-button-next");

// change the position on button click
prevBtn.addEventListener("click", () => {

    const pos1 = document.querySelector(".pos1");
    const pos2 = document.querySelector(".pos2");
    const pos3 = document.querySelector(".pos3");

    pos1.classList.replace("pos1", "pos2");
    pos2.classList.replace("pos2", "pos3");
    pos3.classList.replace("pos3", "pos1");
});

nextBtn.addEventListener("click", () => {

    const pos1 = document.querySelector(".pos1");
    const pos2 = document.querySelector(".pos2");
    const pos3 = document.querySelector(".pos3");

    pos1.classList.replace("pos1", "pos3");
    pos2.classList.replace("pos2", "pos1");
    pos3.classList.replace("pos3", "pos2");
});
