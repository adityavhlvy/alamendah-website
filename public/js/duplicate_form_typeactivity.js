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
const duplicatedForm = document.getElementById("Activity");
const activity = document.getElementsByClassName("activity")[0];

button.addEventListener("click", () => {
    const newActivity = activity.cloneNode(true);
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

addImagePreviewListener(activity);

const optionButton = document.getElementById("Option-add");
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
