const Trip = document.getElementById("Trip");
const div = Array.from(Trip.getElementsByTagName("div"));
const Submit = document.getElementById("Submit");

let tripType = div.find((value) =>
    value.classList.contains("bg-blue-sea")
).innerHTML;

function makeActive(element) {
    element.classList.add("bg-blue-sea");
    element.classList.add("text-white");
    element.classList.add("font-bold");
}

function removeActive(e) {
    e.classList.remove("bg-blue-sea");
    e.classList.remove("text-white");
    e.classList.remove("font-bold");
}

function makeNonActive(e) {
    e.classList.add("bg-bright-grey");
    e.classList.add("text-black");
}

function removeNonActive(element) {
    element.classList.remove("bg-bright-grey");
    element.classList.remove("text-black");
}

div.forEach((element) => {
    element.addEventListener("click", () => {
        div.forEach((e) => {
            if (e.classList.contains("bg-blue-sea")) {
                removeActive(e);
                makeNonActive(e);
            }
        });
        removeNonActive(element);
        makeActive(element);
        tripType = element.innerHTML;
        console.log(tripType);
    });
});

Submit.addEventListener("click", () => {
    const Date = document.getElementById("Date");
    const Package = document.getElementById("Package");
    const Quantity = document.getElementById("Quantity");
    const Code = document.getElementById("Code");
    const load = document.getElementById("Load");
    load.classList.remove("hidden");
    load.classList.add("flex");
    if (Date.value) {
        if (Package.value) {
            if (Quantity.value) {
                let encodedMessage;
                if (Code.value) {
                    encodedMessage = encodeURIComponent(
                        `Hello, my name is ${username}. I want to order some package that name is ${Package.value} in ${Date.value} with ${Quantity.value} people. I want to do that in ${tripType} I Have some redeem code, "${Code.value}".`
                    );
                } else {
                    encodedMessage = encodeURIComponent(
                        `Hello, my name is ${username}. I want to order some package that name is ${Package.value} in ${Date.value} with ${Quantity.value} people. I want to do that in ${tripType}`
                    );
                }
                const message = `https://wa.me/6285162784180?text=${encodedMessage}`;
                window.open(message, "_blank");
                window.location.href = "/home";
            }
        }
    }
});
