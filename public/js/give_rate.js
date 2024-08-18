const Like = document.getElementById("Like");
const Dislike = document.getElementById("Dislike");
function sendViewer(data) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: "/api/rate",
        type: "POST",
        data: JSON.stringify(data),
        contentType: "application/json",
        success: function (response) {
            console.log("Response dari server: ", response);
        },
        error: function (xhr, status, error) {
            console.error("Error: ", error);
        },
    });
}
Like.addEventListener("click", () => {
    const data = {
        userid: userid,
        articleid: articleid,
        viewer_impression: true,
    };
    sendViewer(data);
});

Dislike.addEventListener("click", () => {
    const data = {
        userid: userid,
        articleid: articleid,
        viewer_impression: false,
    };
    sendViewer(data);
});
