const buttonImage = document.getElementById("Image-add");
const buttonImageRemove = document.querySelectorAll("#Image-remove");
const images = document.getElementsByClassName("images")[0];
const image = document.getElementsByClassName("image")[0];
buttonImage.addEventListener("click", () => {
    const newImage = image.cloneNode(true);
    const newImageButton = newImage.querySelector("button");
    newImageButton.classList.add("rotate-45");
    newImageButton.addEventListener("click", () => {
        newImage.remove();
    });
    images.appendChild(newImage);
});

buttonImageRemove.forEach((element) => {
    element.addEventListener("click", () => {
        element.parentElement.remove();
    });
});
