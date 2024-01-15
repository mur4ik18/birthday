function displayExplanations() {
    var explanationDiv = document.getElementById("explanation");
    if (explanationDiv.style.display === "block") {
        explanationDiv.style.display = "none";
    } else {
        explanationDiv.style.display = "block";
    }
}