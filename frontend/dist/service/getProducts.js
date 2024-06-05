"use strict";
// import { Product } from "../models/Product";
// export async function fetchProducts(): Promise<void> {
//   try {
//     const response = await fetch("http://localhost:3000/products");
//     if (!response.ok) {
//       throw new Error(`HTTP error! Status: ${response.status}`);
//     }
//     const products: Product[] = await response.json();
//     await fetch("/public/pages/products.php", {
//       method: "POST",
//       headers: {
//         "Content-Type": "application/json",
//       },
//       body: JSON.stringify({ products }),
//     });
//     console.log("Products sent to PHP:", products);
//   } catch (error) {
//     console.error("Error fetching products:", error);
//   }
// }
// fetchProducts();
