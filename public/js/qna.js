const listQna = document.querySelectorAll("#QNA div#Question");
listQna.forEach((element) => {
    element.addEventListener("click", () => {
        const answer = element.querySelector("#Answer");
        answer.classList.toggle("hidden");
    });
});
