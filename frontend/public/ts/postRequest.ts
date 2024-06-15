function postRequest() {
  const inputTitleElement = document.getElementById(
    "titleInput"
  ) as HTMLInputElement;
  const inputDescriptionElement = document.getElementById(
    "descriptionInput"
  ) as HTMLInputElement;
  const inputPriceElement = document.getElementById(
    "priceInput"
  ) as HTMLInputElement;
  const inputImageElement = document.getElementById(
    "selectImage"
  ) as HTMLInputElement;

  const inputTitleValue = inputTitleElement?.value ?? "";
  const inputDescriptionValue = inputDescriptionElement?.value ?? "";
  const inputPriceValue = inputPriceElement?.value ?? "";
  const inputImageValue = inputImageElement?.value ?? "";

  const data = new FormData();
  data.append("title", inputTitleValue);
  data.append("description", inputDescriptionValue);
  data.append("price", inputPriceValue);
  data.append("img", inputImageValue);

  fetch("/public/functions/postNewProduct.php", {
    method: "POST",
    body: data,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        window.location.href = "/drinkMaster";
      } else {
        alert("Error saving changes");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("Error saving changes");
    });
}
