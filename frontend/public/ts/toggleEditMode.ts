function toggleEditMode() {
  const defaultButtons = document.getElementById(
    "defaultButtons"
  ) as HTMLButtonElement;
  const editButtons = document.getElementById(
    "editButtons"
  ) as HTMLButtonElement;
  const viewTitle = document.getElementById("viewTitle") as HTMLSpanElement;
  const editTitle = document.getElementById("editTitle") as HTMLInputElement;
  const viewDescription = document.getElementById(
    "viewDescription"
  ) as HTMLSpanElement;
  const editDescription = document.getElementById(
    "editDescription"
  ) as HTMLInputElement;
  const viewPrice = document.getElementById("viewPrice") as HTMLSpanElement;
  const editPrice = document.getElementById("editPrice") as HTMLInputElement;

  if (defaultButtons.style.display === "none") {
    defaultButtons.style.display = "flex";
    editButtons.style.display = "none";
    viewTitle.style.display = "inline";
    editTitle.style.display = "none";
    viewDescription.style.display = "inline";
    editDescription.style.display = "none";
    viewPrice.style.display = "inline";
    editPrice.style.display = "none";
  } else {
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
