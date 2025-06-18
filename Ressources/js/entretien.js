
const prevEntretienBtn = document.getElementById("index-button-prev");
const nextEntretienBtn = document.getElementById("index-button-next");

// declaration du tableau comments des éléments du DOM pour les commentaires
const comments = [];
// alimentation du tableau comments par un boucle
comments.forEach(element => {
    
});
// declaration du tableau dots des éléments du DOM pour les points

// alimentation du tableau dots par un boucle


nextEntretienBtn.addEventListener("click", () => {

    const com1 = document.querySelector(".com1");
    const com2 = document.querySelector(".com2");
    const com3 = document.querySelector(".com3");
    const com4 = document.querySelector(".com4");
    const com5 = document.querySelector(".com5");
    const com6 = document.querySelector(".com6");

    const dot1 = document.querySelector(".dot1");
    const dot2 = document.querySelector(".dot2");
    const dot3 = document.querySelector(".dot3");
    const dot4 = document.querySelector(".dot4");
    const dot5 = document.querySelector(".dot5");
    const dot6 = document.querySelector(".dot6");


    // boucle 
    com1.classList.replace("com1", "com2");
    com2.classList.replace("com2", "com3");
    com3.classList.replace("com3", "com4");
    com4.classList.replace("com4", "com5");
    com5.classList.replace("com5", "com6");
    com6.classList.replace("com6", "com1");

    dot1.classList.replace("dot1", "dot2");
    dot2.classList.replace("dot2", "dot3");
    dot3.classList.replace("dot3", "dot4");
    dot4.classList.replace("dot4", "dot5");
    dot5.classList.replace("dot5", "dot6");
    dot6.classList.replace("dot6", "dot1");


});

prevEntretienBtn.addEventListener("click", () => {

    const com1 = document.querySelector(".com1");
    const com2 = document.querySelector(".com2");
    const com3 = document.querySelector(".com3");
    const com4 = document.querySelector(".com4");
    const com5 = document.querySelector(".com5");
    const com6 = document.querySelector(".com6");
    
    com1.classList.replace("com1", "com6");
    com2.classList.replace("com2", "com1");
    com3.classList.replace("com3", "com2");
    com4.classList.replace("com4", "com3");
    com5.classList.replace("com5", "com4");
    com6.classList.replace("com6", "com5");

});