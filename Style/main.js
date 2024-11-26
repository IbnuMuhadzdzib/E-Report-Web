function toggleEdit() {
    var inputNama = document.getElementById("nama");
    var inputJudul = document.getElementById("judul");
    var inputTanggal = document.getElementById("tanggal");
    var inputDesc = document.getElementById("desc");
    var editBtn = document.getElementById("btn");
    var submitBtn = document.getElementById("submitBtn");
    var cancelBtn = document.getElementById("cancelBtn");

    if (inputNama.hasAttribute("readonly")) {
        inputNama.removeAttribute("readonly");
        inputJudul.removeAttribute("readonly");
        inputTanggal.removeAttribute("readonly");
        inputDesc.removeAttribute("readonly");
        editBtn.style.display = "none";
        submitBtn.style.display = "inline-block";
        cancelBtn.style.display = "inline-block";
    } else {
        inputNama.setAttribute("readonly", "readonly");
        inputJudul.setAttribute("readonly", "readonly");
        inputTanggal.setAttribute("readonly", "readonly");
        inputDesc.setAttribute("readonly", "readonly");
        editBtn.style.display = "inline-block";
        submitBtn.style.display = "none";
    }
}

function batalEdit() {
    var inputNama = document.getElementById("nama");
    var inputJudul = document.getElementById("judul");
    var inputTanggal = document.getElementById("tanggal");
    var inputDesc = document.getElementById("desc");
    var editBtn = document.getElementById("btn");
    var submitBtn = document.getElementById("submitBtn");
    var cancelBtn = document.getElementById("cancelBtn");

    inputNama.setAttribute("readonly", "readonly");
    inputJudul.setAttribute("readonly", "readonly");
    inputTanggal.setAttribute("readonly", "readonly");
    inputDesc.setAttribute("readonly", "readonly");

    editBtn.style.display = "inline-block";
    submitBtn.style.display = "none";
    cancelBtn.style.display = "none";
};

function validateForm() {
    var pw1 = document.getElementById("pw1").value;
    var pw2 = document.getElementById("pw2").value;
    var errorMessage = document.getElementById("error-message");

    if (pw1 !== pw2) {
        errorMessage.style.display = "block";
        return false;
    } else {
        errorMessage.style.display = "none";
        return true;
    }
}