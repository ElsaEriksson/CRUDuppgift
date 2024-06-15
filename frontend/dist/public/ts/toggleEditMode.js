"use strict";
function toggleEditMode() {
    var defaultButtons = document.getElementById("defaultButtons");
    var editButtons = document.getElementById("editButtons");
    var viewTitle = document.getElementById("viewTitle");
    var editTitle = document.getElementById("editTitle");
    var viewDescription = document.getElementById("viewDescription");
    var editDescription = document.getElementById("editDescription");
    var viewPrice = document.getElementById("viewPrice");
    var editPrice = document.getElementById("editPrice");
    if (defaultButtons.style.display === "none") {
        defaultButtons.style.display = "flex";
        editButtons.style.display = "none";
        viewTitle.style.display = "inline";
        editTitle.style.display = "none";
        viewDescription.style.display = "inline";
        editDescription.style.display = "none";
        viewPrice.style.display = "inline";
        editPrice.style.display = "none";
    }
    else {
        defaultButtons.style.display = "none";
        editButtons.style.display = "flex";
        viewTitle.style.display = "none";
        editTitle.style.display = "inline";
        viewDescription.style.display = "none";
        editDescription.style.display = "inline";
        viewPrice.style.display = "none";
        editPrice.style.display = "inline";
    }
}
