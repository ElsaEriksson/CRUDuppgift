"use strict";
function postRequest() {
  var _a, _b, _c, _d;
  var inputTitleElement = document.getElementById("titleInput");
  var inputDescriptionElement = document.getElementById("descriptionInput");
  var inputPriceElement = document.getElementById("priceInput");
  var inputImageElement = document.getElementById("selectImage");
  var inputTitleValue =
    (_a =
      inputTitleElement === null || inputTitleElement === void 0
        ? void 0
        : inputTitleElement.value) !== null && _a !== void 0
      ? _a
      : "";
  var inputDescriptionValue =
    (_b =
      inputDescriptionElement === null || inputDescriptionElement === void 0
        ? void 0
        : inputDescriptionElement.value) !== null && _b !== void 0
      ? _b
      : "";
  var inputPriceValue =
    (_c =
      inputPriceElement === null || inputPriceElement === void 0
        ? void 0
        : inputPriceElement.value) !== null && _c !== void 0
      ? _c
      : "";
  var inputImageValue =
    (_d =
      inputImageElement === null || inputImageElement === void 0
        ? void 0
        : inputImageElement.value) !== null && _d !== void 0
      ? _d
      : "";
  var data = new FormData();
  data.append("title", inputTitleValue);
  data.append("description", inputDescriptionValue);
  data.append("price", inputPriceValue);
  data.append("img", inputImageValue);
  fetch("/public/services/postNewProduct.php", {
    method: "POST",
    body: data,
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      if (data.success) {
        window.location.href = "/drinkMaster";
      } else {
        alert("Error saving changes");
      }
    })
    .catch(function (error) {
      console.error("Error:", error);
      alert("Error saving changes");
    });
}
