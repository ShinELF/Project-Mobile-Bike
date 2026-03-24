console.log("admin js chargé !");

let inputField = document.getElementById("image");
let imagePreview = document.querySelector(".image-preview");

inputField.addEventListener("change", (event) => {
    const file = event.target.files[0];
    let url = URL.createObjectURL(file);
    imagePreview.innerHTML = `<img src="${url}" width=200px >` ;
    console.log(url);
}) 

