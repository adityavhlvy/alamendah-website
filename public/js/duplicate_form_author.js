const button = document.getElementById("author-add");
const buttonRemove = document.querySelectorAll("#author-remove");
const authors = document.getElementsByClassName("authors")[0];
const authorField = document.getElementsByClassName("author")[0];
button.addEventListener("click", () => {
    const newAuthor = authorField.cloneNode(true);
    const newButton = newAuthor.querySelector("button");
    newButton.classList.add("rotate-45");
    newButton.addEventListener("click", () => {
        newAuthor.remove();
    });
    authors.appendChild(newAuthor);
});

buttonRemove.forEach((element) => {
    element.addEventListener("click", () => {
        element.parentElement.remove();
    });
});
