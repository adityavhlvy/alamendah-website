const dropdown = document.getElementById("dropdown");
const listmenu = document.getElementById("list-menu");
const theClass = [
    "border-solid",
    "border-2",
    "border-dark-grey",
    "p-5",
    "rounded-lg",
    "flex",
    "flex-col",
    "absolute",
    "right-20",
    "top-[5.8rem]",
    "bg-white",
    "hidden",
];
dropdown.addEventListener("click", () => {
    theClass.forEach((e) => {
        listmenu.classList.toggle(e);
    });
});
