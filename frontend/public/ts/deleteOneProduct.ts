function deleteOneProduct(productId: string) {
  if (confirm("Are you sure you want to delete this product?")) {
    const data = new FormData();
    data.append("id", productId);

    fetch("/public/services/deleteProduct.php", {
      method: "POST",
      body: data,
    })
      .then((response) => {
        if (response.status === 200) {
          window.location.href = "/drinkMaster";
          alert("The product has been deleted");
        } else {
          alert("Error deleting the product. Status: " + response.status);
        }
      })

      .catch((error) => {
        console.error("Error:", error);
        alert("Error deleting the product");
      });
  } else {
    console.log("User declined or closed the dialog box.");
  }
}
