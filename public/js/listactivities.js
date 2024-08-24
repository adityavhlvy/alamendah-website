const resetListForwardOption = (listForward) => {
    document.body.addEventListener("click", (e) => {
        if (
            e.target.contains(listForward) &&
            !listForward.classList.contains("opacity-0")
        ) {
            listForward.classList.add("opacity-0");
        }
    });
};

const checkSiblingsListForwardOption = (element) => {
    Array.from(activities).forEach((sibling) => {
        const siblingListForward = sibling.querySelector("#List");
        if (
            element != sibling &&
            !siblingListForward.classList.contains("opacity-0")
        ) {
            siblingListForward.classList.add("opacity-0");
        }
    });
};

const whatsAppEventListener = (element) => {
    const Whatsapp = element.querySelector("#Whatsapp");
    Whatsapp.addEventListener("click", (event) => {
        event.preventDefault();
        const whatsappShareURL = `whatsapp://send?text=${encodeURIComponent(
            Whatsapp.getAttribute("data-link")
        )}`;
        let a = document.createElement("a");
        a.href = whatsappShareURL;
        a.click();
        ListForward.classList.toggle("opacity-0");
    });
};

const linkEventListener = (element) => {
    const Link = element.querySelector("#Link");
    Link.addEventListener("click", (event) => {
        event.preventDefault();
        const copy = document.createElement("input");
        copy.value = Link.getAttribute("data-link");
        document.body.appendChild(copy);
        copy.select();
        document.execCommand("copy");
        document.body.removeChild(copy);
        Swal.fire({
            icon: "success",
            title: "URL Berhasil disalin",
            showConfirmButton: false,
            timer: 1000,
        });
        ListForward.classList.toggle("opacity-0");
    });
};

const forwardEvent = (element) => {
    const ForwardButton = element.querySelector("#Forward");
    const ListForward = element.querySelector("#List");
    ForwardButton.addEventListener("click", (event) => {
        event.preventDefault();
        checkSiblingsListForwardOption(element);
        ListForward.classList.toggle("opacity-0");
        whatsAppEventListener(element);
        linkEventListener(element);
    });
    resetListForwardOption(ListForward);
};

const activities = document.getElementsByClassName("activities");
if (requestRoute === "homepage") {
    Array.from(activities).forEach((element) => {
        const DescriptionButton = element.querySelector("#Description");
        forwardEvent(element);
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
        forwardEvent(element);
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
