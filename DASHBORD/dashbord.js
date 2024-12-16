document.querySelectorAll("#normal-player").forEach((element) => {
    element.style.display = "none";
});
document.getElementById("post").addEventListener("change", function() {
    if (document.getElementById("post").value === "GK") {
        document.querySelectorAll("#normal-player").forEach((element) => {
            element.style.display = "none";
        });
        document.querySelectorAll("#propriete-GK").forEach((element) => {
            element.style.display = "block";
        });
    } else {
        document.querySelectorAll("#normal-player").forEach((element) => {
            element.style.display = "block";
        });
        document.querySelectorAll("#propriete-GK").forEach((element) => {
            element.style.display = "none";
        });
    }
});