const selectElement = document.getElementById("lang");
const arrowElement = document.getElementById("arrow");
let clicked = false;
selectElement.parentElement.addEventListener("click", function () {
    if (clicked) {
        selectElement.blur();
        clicked = false;
    } else {
        selectElement.focus();
        clicked = true;
    }
});
selectElement.addEventListener("focus", function () {
    arrowElement.classList.add("rotate");
});
selectElement.addEventListener("blur", function () {
    arrowElement.classList.remove("rotate");
    clicked = false;
});
