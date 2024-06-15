function chooseImage() {
  const selectTrigger = document.querySelector(
    ".custom-select-trigger"
  ) as HTMLDivElement;
  const customSelect = document.querySelector(
    ".custom-select"
  ) as HTMLDivElement;
  const options = document.querySelectorAll(".custom-option");
  const hiddenInput = document.getElementById(
    "selectImage"
  ) as HTMLInputElement;
  const imagePreview = document.getElementById(
    "imagePreview"
  ) as HTMLDivElement;

  selectTrigger.addEventListener("click", function () {
    customSelect.classList.toggle("open");
  });

  options.forEach(function (option) {
    option.addEventListener("click", function () {
      const value = option.getAttribute("data-value");
      hiddenInput.value = value ?? "";
      selectTrigger.style.backgroundImage = `url(${value})`;
      imagePreview.style.backgroundImage = `url(${value})`;
      customSelect.classList.remove("open");
    });
  });

  initializeProductForm();
}

document.addEventListener("DOMContentLoaded", chooseImage);
