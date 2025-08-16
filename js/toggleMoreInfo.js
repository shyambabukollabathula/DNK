function toggleMoreInfo() {
    var moreInfo = document.getElementById("moreInfo");
    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block"; // Show the additional information
    } else {
        moreInfo.style.display = "none"; // Hide the additional information
    }
}