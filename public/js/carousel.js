const carouselClass = ["-translate-0x", "-translate-1x", "-translate-2x"];
const carousels = document.querySelectorAll("#carousel a");
let i = 0;
let point = true;

document.querySelector("#carousel #right").addEventListener("click", () => {
    if (i < max) {
        i++;
        carousels.forEach((e) => {
            e.classList.remove(carouselClass[i - 1]);
            e.classList.add(carouselClass[i]);
        });
    }
});

document.querySelector("#carousel #left").addEventListener("click", () => {
    if (i > 0) {
        i--;
        carousels.forEach((e) => {
            e.classList.remove(carouselClass[i + 1]);
            e.classList.add(carouselClass[i]);
        });
    }
});

setInterval(() => {
    if (i == 2) {
        point = false;
    } else if (i == 0) {
        point = true;
    }
    if (point) {
        i++;
        carousels.forEach((e) => {
            e.classList.remove(carouselClass[i - 1]);
            e.classList.add(carouselClass[i]);
        });
    } else {
        i--;
        carousels.forEach((e) => {
            e.classList.remove(carouselClass[i + 1]);
            e.classList.add(carouselClass[i]);
        });
    }
}, 7000);
