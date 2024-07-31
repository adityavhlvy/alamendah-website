const Month = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];

function showInterface(date, month, seconds, minutes, hour) {
    document.getElementById("date").innerHTML = date;
    document.getElementById("month").innerHTML = month.substring(0, 3);
    document.getElementById("hour").innerHTML =
        hour % 12 < 10 ? `0${hour % 12}` : hour % 12;
    document.getElementById("minutes").innerHTML =
        minutes < 10 ? `0${minutes}` : minutes;
    document.getElementById("seconds").innerHTML =
        seconds < 10 ? `0${seconds}` : seconds;
    document.getElementById("satuan").innerHTML = hour < 12 ? "am" : "pm";
}

function time() {
    const calendar = new Date();
    const date = calendar.getDate();
    const month = Month[calendar.getMonth()];
    const seconds = calendar.getSeconds();
    const minutes = calendar.getMinutes();
    const hour = calendar.getHours();
    showInterface(date, month, seconds, minutes, hour);
}

setInterval(() => {
    time();
}, 1000);
