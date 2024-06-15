"use strict";
function chooseImage() {
    var selectTrigger = document.querySelector(".custom-select-trigger");
    var customSelect = document.querySelector(".custom-select");
    var options = document.querySelectorAll(".custom-option");
    var hiddenInput = document.getElementById("selectImage");
    var imagePreview = document.getElementById("imagePreview");
    selectTrigger.addEventListener("click", function () {
        customSelect.classList.toggle("open");
    });
    options.forEach(function (option) {
        option.addEventListener("click", function () {
            var value = option.getAttribute("data-value");
            hiddenInput.value = value !== null && value !== void 0 ? value : "";
            selectTrigger.style.backgroundImage = "url(".concat(value, ")");
            imagePreview.style.backgroundImage = "url(".concat(value, ")");
            customSelect.classList.remove("open");
        });
    });
    initializeProductForm();
}
document.addEventListener("DOMContentLoaded", chooseImage);
