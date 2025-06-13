
let nextButton = document.getElementById("carousel-button-next");
let prevButton = document.getElementById("carousel-button-prev");

let li1 = document.getElementById("box1");
let li2 = document.getElementById("box2");
let li3 = document.getElementById("box3");



nextButton.addEventListener("click", () => {
    const box1 = document.querySelector('.box1');
    const box2 = document.querySelector('.box2');
    const box3 = document.querySelector('.box3');
    
    box1.classList.replace('box1', 'box2');
    box2.classList.replace('box2', 'box3');
    box3.classList.replace('box3', 'box1');
});

prevButton.addEventListener("click", () => {
    const box1 = document.querySelector('.box1');
    const box2 = document.querySelector('.box2');
    const box3 = document.querySelector('.box3');
    
    box1.classList.replace('box1', 'box3');
    box2.classList.replace('box2', 'box1');
    box3.classList.replace('box3', 'box2');
});


