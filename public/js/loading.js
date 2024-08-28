document.addEventListener("DOMContentLoaded", () => {
    const button = document.querySelectorAll('button[type="submit"]');
    Array.from(button).forEach((element) => {
        element.addEventListener("click", function (e) {
            e.preventDefault();
            const load = document.getElementById("Load");
            load.classList.remove("hidden");
            load.classList.add("flex");
            e.target.closest("form").submit();
        });
    });
});
