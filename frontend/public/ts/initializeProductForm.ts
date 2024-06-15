function initializeProductForm() {
  const customSelect = document.querySelector(
    ".custom-select"
  ) as HTMLDivElement;

  document.addEventListener("click", function (e: MouseEvent) {
    if (customSelect && !customSelect.contains(e.target as Node)) {
      customSelect.classList.remove("open");
    }
  });

  const form = document.getElementById("productForm") as HTMLFormElement | null;
  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      postRequest();
    });
  } else {
    console.error("Couldn't find the form element.");
  }
}
