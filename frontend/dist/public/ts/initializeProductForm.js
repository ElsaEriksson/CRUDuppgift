"use strict";
function initializeProductForm() {
    var customSelect = document.querySelector(".custom-select");
    document.addEventListener("click", function (e) {
        if (customSelect && !customSelect.contains(e.target)) {
            customSelect.classList.remove("open");
        }
    });
    var form = document.getElementById("productForm");
    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            postRequest();
        });
    }
    else {
        console.error("Couldn't find the form element.");
    }
}
