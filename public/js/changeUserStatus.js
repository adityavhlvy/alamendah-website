const isAdmins = document.querySelectorAll("#isAdmin");
isAdmins.forEach((isAdmin) => {
    isAdmin.addEventListener("change", (e) => {
        e.preventDefault();
        const user = isAdmin.nextElementSibling;
        fetch("api/dashboard/change-user-status", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                isAdmin: isAdmin.checked,
                userid: user.value,
            }),
        })
            .then((response) => response.json())
            .then((data) => {
                console.log("Success: ", data);
            })
            .catch((error) => {
                console.error("Error: ", error);
            });
    });
});
