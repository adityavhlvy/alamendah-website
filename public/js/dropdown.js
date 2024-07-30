const dropdown = document.getElementById("dropdown");
const listmenu = document.getElementById("list-menu");
const theClass = ["show-hidden-menu", "hidden"];
dropdown.addEventListener("click", () => {
    theClass.forEach((e) => {
        listmenu.classList.toggle(e);
    });
});
