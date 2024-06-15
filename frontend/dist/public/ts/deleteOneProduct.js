"use strict";
function deleteOneProduct(productId) {
    if (confirm("Are you sure you want to delete this product?")) {
        var data = new FormData();
        data.append("id", productId);
        fetch("/public/functions/deleteProduct.php", {
            method: "POST",
            body: data,
        })
            .then(function (response) {
            if (response.status === 200) {
                window.location.href = "/drinkMaster";
                alert("The product has been deleted");
            }
            else {
                alert("Error deleting the product. Status: " + response.status);
            }
        })
            .catch(function (error) {
            console.error("Error:", error);
            alert("Error deleting the product");
        });
    }
    else {
        console.log("User declined or closed the dialog box.");
    }
}
