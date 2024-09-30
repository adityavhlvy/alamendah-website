const requestData = document.getElementById("Data");
Array.from(requestData.children).forEach((data) => {
    data.addEventListener("click", () => {
        Array.from(requestData.children).forEach((sibling) => {
            if (sibling != data && sibling.classList.contains("bg-blue-sea")) {
                sibling.classList.remove("bg-blue-sea");
                sibling.classList.remove("text-white");
                sibling.classList.add("bg-dark-grey");
                sibling.classList.add("text-black");
                document
                    .getElementById(sibling.innerHTML)
                    .classList.add("hidden");
            }
        });
        if (!data.classList.contains("bg-blue-sea")) {
            data.classList.remove("bg-dark-grey");
            data.classList.remove("text-black");
            data.classList.add("bg-blue-sea");
            data.classList.add("text-white");
            document.getElementById(data.innerHTML).classList.remove("hidden");
        }
    });
});
