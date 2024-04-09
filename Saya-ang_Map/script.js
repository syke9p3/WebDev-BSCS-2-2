function showPopup(id) {
    document.getElementById(id).style.display = "block";
}

function hidePopup(id) {
    document.getElementById(id).style.display = "none";
}

function showLegend() {
    const legendContainer = document.getElementById('legendContainer');
    legendContainer.classList.toggle('open');
}




