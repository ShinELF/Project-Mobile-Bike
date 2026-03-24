console.log("admin js chargé !");

let inputField = document.getElementById("image");
let imagePreview = document.querySelector(".imagePreview");

inputField.addEventListener("change", (event) => {
    const file = event.target.files[0];
    let url = URL.createObjectURL(file);
    imagePreview.innerHTML = `<img src="${url}">` ;
    console.log(url);
}) 

