function saveChangesFromPut(productId: string) {
  const editTitleElement = document.getElementById(
    "editTitle"
  ) as HTMLInputElement;
  const editDescriptionElement = document.getElementById(
    "editDescription"
  ) as HTMLInputElement;
  const editPriceElement = document.getElementById(
    "editPrice"
  ) as HTMLInputElement;

  const editTitleValue = editTitleElement?.value ?? "";
  const editDescriptionValue = editDescriptionElement?.value ?? "";
  const editPriceValue = editPriceElement?.value ?? "";

  const data = new FormData();
  data.append("id", productId);
  data.append("title", editTitleValue);
  data.append("description", editDescriptionValue);
  data.append("price", editPriceValue);

  fetch("/public/functions/putEditProduct.php", {
    method: "POST",
    body: data,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        const viewTitleElement = document.getElementById("viewTitle");
        const viewDescriptionElement =
          document.getElementById("viewDescription");
        const viewPriceElement = document.getElementById("viewPrice");

        if (viewTitleElement && viewDescriptionElement && viewPriceElement) {
          viewTitleElement.innerText = editTitleValue;
          viewDescriptionElement.innerText = editDescriptionValue;
          viewPriceElement.innerText = editPriceValue + " kr";
          toggleEditMode();
        } else {
          console.error("One or more elements not found.");
        }
      } else {
        alert("Error saving changes");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("Error saving changes");
    });
}
