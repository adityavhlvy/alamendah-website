const selectLang = document.getElementById("lang");
const needTranslate = document.getElementsByClassName("translate");

selectLang.addEventListener("change", () => {
    Array.from(needTranslate).forEach((value, index) => {
        const requestToTranslate = {
            source_lang: "auto",
            target_lang: selectLang.value,
            text: value.innerHTML,
        };
        translate(requestToTranslate, needTranslate[index]);
    });
});

function translate(data, div) {
    $.post(
        "https://script.google.com/macros/s/AKfycbzcxRaOVVphuA5u0RKkXmnrxwxluYRSsl5dhqnZqtDKEzapEvgfEPa_Pibi2ZntEWsr/exec",
        data,
        (response) => {
            div.innerHTML = JSON.parse(response).translatedText;
        }
    ).fail((jqXHR, textStatus, errorThrown) => {
        console.error("Error: ", textStatus, errorThrown);
    });
}
