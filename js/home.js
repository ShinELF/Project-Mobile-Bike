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
