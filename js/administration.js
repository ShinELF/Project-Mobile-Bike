console.log("admin js chargé !");

let addButton = document.getElementById("addButton");

addButton.addEventListener ("click", () => {
    console.log("boutton cliqué !");
    window.open("http://localhost:3000/administration/add");
});