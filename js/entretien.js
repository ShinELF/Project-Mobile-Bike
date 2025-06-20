
const prevEntretienBtn = document.getElementById("maintenance-button-prev");
const nextEntretienBtn = document.getElementById("maintenance-button-next");

// declaration du tableau comments des éléments du DOM pour les commentaires
let comments = [];
document.querySelectorAll('[class^="com"]').forEach(comment => {
    comments.push(comment);
});



// declaration du tableau dots des éléments du DOM pour les points
let dots = [];
const dotElements = document.querySelectorAll('[class^="dot"]');
// alimentation du tableau dots par un boucle
dotElements.forEach(dot => {
    dots.push(dot);
});


nextEntretienBtn.addEventListener("click", () => {



    // insert at the first position the last element that has been pop
    comments.unshift(comments.pop());
        // update HTML classes
    comments.forEach((comment, index) => {
        comment.className = `com${index + 1}`;
    });

    // insert at the first position the last element that has been pop
    dots.unshift(dots.pop());
        // update HTML classes
    dots.forEach((dot, index) => {
        dot.className = `dot${index + 1}`;
    });


});

// function that put at the end with push the first element that has been shift
function previous (arr) {
    return arr.push(arr.shift());
}

prevEntretienBtn.addEventListener("click", () => {

    previous (comments);
    previous (dots);

    comments.forEach((comment, index) => {
    comment.className = `com${index + 1}`;
    });

    dots.forEach((dot, index) => {
    dot.className = `dot${index + 1}`;
    });

});