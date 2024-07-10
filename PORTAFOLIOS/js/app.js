function toggleMenu(menuId) {
    var submenu = document.getElementById(menuId);
    if (submenu.style.display === "none" || submenu.style.display === "") {
        submenu.style.display = "block";
    } else {
        submenu.style.display = "none";
    }
}

function openPDF(pdfUrl) {
    document.getElementById('pdfFrame').src = pdfUrl;
    document.getElementById('pdfModal').style.display = "block";
}

function closeModal() {
    document.getElementById('pdfModal').style.display = "none";
    document.getElementById('pdfFrame').src = "";
}

window.onclick = function(event) {
    var modal = document.getElementById('pdfModal');
    if (event.target == modal) {
        closeModal();
    }
}