const addImagePreviewListener = (activityElement) => {
    const imageInput = activityElement.querySelector(".imageInput");
    const previewImage = activityElement.querySelector(".preview");
    imageInput.addEventListener("change", (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImage.src = e.target.result;
                previewImage.style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    });
};

const button = document.getElementById("Activity-add");
const removeActivityButton = document.querySelectorAll("#Activity-remove");
const duplicatedForm = document.getElementById("Activity");
const activity = document.getElementsByClassName("activity");

button.addEventListener("click", () => {
    const newActivity = activity[0].cloneNode(true);
    // Hapus value input dari duplikat baru
    newActivity.querySelector('input[type="text"]').value = "";
    newActivity.querySelector("textarea").value = "";
    newActivity.querySelector(".preview").src = "#"; // Reset image preview
    newActivity.querySelector(".preview").style.display = "none";
    newActivity.querySelector('input[type="file"]').value = ""; // Reset file input

    const newButton = newActivity.querySelector("button");
    newButton.classList.add("rotate-45");
    newButton.addEventListener("click", () => {
        newActivity.remove();
    });

    duplicatedForm.appendChild(newActivity);
    addImagePreviewListener(newActivity);
});

removeActivityButton.forEach((element) => {
    element.addEventListener("click", () => {
        element.parentElement.remove();
    });
});

Array.from(activity).forEach((e) => {
    addImagePreviewListener(e);
});

const optionButton = document.getElementById("Option-add");
const optionRemoveButton = document.querySelectorAll("#Option-remove");
const options = document.getElementsByClassName("options")[0];
const option = document.getElementsByClassName("option")[0];

optionButton.addEventListener("click", () => {
    const newOption = option.cloneNode(true);
    const newButton = newOption.querySelector("button");
    newButton.classList.add("rotate-45");
    newButton.addEventListener("click", () => {
        newOption.remove();
    });
    options.appendChild(newOption);
});

optionRemoveButton.forEach((e) => {
    e.addEventListener("click", () => {
        e.parentElement.remove();
    });
});
