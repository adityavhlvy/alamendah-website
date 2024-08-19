function doPost(request) {
    var error = null;
    if (typeof request.parameter.source_lang == undefined) {
        error = "source_lang is required";
    } else if (typeof request.parameter.target_lang == undefined) {
        error = "target_lang is required";
    } else if (typeof request.parameter.text == undefined) {
        error = "text is required";
    } else {
        var source_lang = request.parameter.source_lang.trim();
        var target_lang = request.parameter.target_lang.trim();
        var text = request.parameter.text.trim();

        if (source_lang == "auto") {
            source_lang = "";
        }

        try {
            var translate = LanguageApp.translate(
                text,
                source_lang,
                target_lang
            );
        } catch (err) {
            error = err.message;
        }
    }

    if (error == null) {
        var result = JSON.stringify({
            status: "success",
            translatedText: translate,
        });
    } else {
        var result = JSON.stringify({
            status: "error",
            message: error,
        });
    }

    return ContentService.createTextOutput(result);
}
