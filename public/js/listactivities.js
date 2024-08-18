const activities = document.getElementsByClassName("activities");
if (requestRoute === "homepage") {
    Array.from(activities).forEach((element) => {
        const DescriptionButton = element.querySelector("#Description");
        DescriptionButton.addEventListener("click", (event) => {
            event.preventDefault();
            const p = element.querySelector("#Content p");
            element.classList.toggle("h-[36rem]");
            element.classList.toggle("h-[24rem]");
            p.classList.toggle("hidden");
            Array.from(activities).forEach((e) => {
                if (e.classList.contains("h-[36rem]") && e != element) {
                    e.classList.remove("h-[36rem]");
                    const anyParagraph = e.querySelector("#Content p");
                    anyParagraph.classList.add("hidden");
                    e.classList.add("h-[24rem]");
                }
            });
        });
    });
} else if (requestRoute === "activity") {
    Array.from(activities).forEach((element) => {
        const DescriptionButton = element.querySelector("#Description");
        DescriptionButton.addEventListener("click", (event) => {
            event.preventDefault();
            Array.from(activities).forEach((e) => {
                if (e.classList.contains("row-span-2") && e != element) {
                    e.classList.remove("row-span-2");
                    e.classList.remove("h-[41.75rem]");
                    e.classList.add("h-[20rem]");
                    const anyParagraph = e.querySelector("#Content p");
                    anyParagraph.classList.add("hidden");
                }
            });
            const p = element.querySelector("#Content p");
            element.classList.toggle("row-span-2");
            element.classList.toggle("h-[20rem]");
            element.classList.toggle("h-[41.75rem]");
            p.classList.toggle("hidden");
        });
    });
}
