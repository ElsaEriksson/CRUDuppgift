"use strict";
function saveChangesFromPut(productId) {
    var _a, _b, _c;
    var editTitleElement = document.getElementById("editTitle");
    var editDescriptionElement = document.getElementById("editDescription");
    var editPriceElement = document.getElementById("editPrice");
    var editTitleValue = (_a = editTitleElement === null || editTitleElement === void 0 ? void 0 : editTitleElement.value) !== null && _a !== void 0 ? _a : "";
    var editDescriptionValue = (_b = editDescriptionElement === null || editDescriptionElement === void 0 ? void 0 : editDescriptionElement.value) !== null && _b !== void 0 ? _b : "";
    var editPriceValue = (_c = editPriceElement === null || editPriceElement === void 0 ? void 0 : editPriceElement.value) !== null && _c !== void 0 ? _c : "";
    var data = new FormData();
    data.append("id", productId);
    data.append("title", editTitleValue);
    data.append("description", editDescriptionValue);
    data.append("price", editPriceValue);
    fetch("/public/functions/putEditProduct.php", {
        method: "POST",
        body: data,
    })
        .then(function (response) { return response.json(); })
        .then(function (data) {
        if (data.success) {
            var viewTitleElement = document.getElementById("viewTitle");
            var viewDescriptionElement = document.getElementById("viewDescription");
            var viewPriceElement = document.getElementById("viewPrice");
            if (viewTitleElement && viewDescriptionElement && viewPriceElement) {
                viewTitleElement.innerText = editTitleValue;
                viewDescriptionElement.innerText = editDescriptionValue;
                viewPriceElement.innerText = editPriceValue + " kr";
                toggleEditMode();
            }
            else {
                console.error("One or more elements not found.");
            }
        }
        else {
            alert("Error saving changes");
        }
    })
        .catch(function (error) {
        console.error("Error:", error);
        alert("Error saving changes");
    });
}
