const button = document.getElementById("button");
button.addEventListener("click", () => {
    const select = button.querySelector("#dropdown");
    select.classList.toggle("hidden");
    const options = select.querySelectorAll("div");
    options.forEach((value) => {
        value.addEventListener("click", () => {
            const MinimumPerson = document.getElementById("MinimumPerson");
            const Price = document.getElementById("Price");
            const numberFormatter = new Intl.NumberFormat("id-ID");
            MinimumPerson.innerHTML = value.getAttribute("data-minimum-person");
            Price.innerHTML = numberFormatter.format(
                value.getAttribute("data-price")
            );
        });
    });
});
